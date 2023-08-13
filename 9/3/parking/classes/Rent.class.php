<?php
/**
 * Summary of rent
 */
class rent extends parking
{
    protected int $id;
    protected string $enterTime;
    protected string $exitTime;
    protected array $location;
    protected int $mainLocation;
    protected string $vehicleType;


    public function __construct($id, $location1,$location2, $name, $vehicleType)
    {
        parent::__construct($id, $location1, $location2, $name, $vehicleType);
        $this->id = $id;
        $this->location = [$location1, $location2];
        $this->name = $name;
        $this->vehicleType = $vehicleType;
    }



    public function calMainLocation()
    {
        $floors = $this->getFloorCapacity();
        if (!empty($floors[$this->location[0] - 1]) && (($floors[$this->location[0] - 1]) >= ($this->location[1]))) {
                $sum = 0;
                for ($i = 0; $i < $this->location[0] - 1; $i++) {
                    $sum += $floors[$i];
                }
                $sum += $this->location[1];
                return $this->mainLocation = $sum;
        }
        return $this->mainLocation = 0;
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function setEnterTime(): string
    {
        return $this->enterTime = date("Y-m-d H:i:s",time());
    }

    public function getEnterTime()
    {
        $data = json_decode(file_get_contents("data/data.json"), true);
        foreach ($data as $datas) {
           if ($datas["parkingName"] == $this->name )  {
            foreach ($datas["floor"] as $floors) {
               if ($floors["id"] == $this->id) {
                   return $datas["floor"]["enterTime"];
               }
            }
           }
        }
        return null;
    }

    public function getVehicleType()
    {
        $data = json_decode(file_get_contents("data/data.json"), true);
        foreach ($data as $datas) {
           if ($datas["parkingName"] == $this->name) {
            foreach ($datas["floor"] as $floors) {
                if ($floors["id"] == $this->id) {
                    return $floors["type"];
                }
            }
           }
        }
        return null;
    }
    public function saveData() : bool{
        $data = json_decode(file_get_contents("data/data.json"), true);
        foreach ($data as $key => $datas) {
            if ($datas["parkingName"] == $this->name) {
                if (!isset($datas["floor"])) {
                    $data[$key]["floor"] = [];
                }

                if (!empty($data[$key]["floor"])) {
                    foreach ($datas["floor"] as $floors) {
                        if ($floors["id"] == $this->id) {
                            exit;
                        }
                    }
                }
                foreach ($datas["floor"] as $floors) {
                    if ($this->mainLocation == $floors["indexLocation"]) {
                        exit;
                    }
                }
                if (isset($this->mainLocation)) {
                    array_push($data[$key]['floor'], [
                        "indexLocation"=>$this->mainLocation,
                        "id"=>$this->id,
                        "entertime"=>$this->setEnterTime(),
                        "type"=>$this->vehicleType
                    ]);
                    file_put_contents('data/data.json',json_encode($data,JSON_PRETTY_PRINT));
                    return true;
                }
            }
        }
        return false;
    }

    public function setExitTime(): string
    {
        $today = date("Y-m-d H:i:s", time());
        return $this->exitTime = $today;
    }
    
    public function removeRent(){
        $data = json_decode(file_get_contents("data/data.json"), true);
        foreach ($data as $key => $datas) {
            if ($datas["parkingName"] == $this->name) {
                foreach ($datas["floor"] as $key2 => $floors) {
                    if ($floors["id"] == $this->id) {
                        $logInfo = json_decode(file_get_contents("data/log.json"), true);
                        $exitTime = $this->setExitTime();
                        $logInfo[] = ["vehicle with the information below has exited in $exitTime",$floors];
                        file_put_contents("data/log.json", json_encode($logInfo,JSON_PRETTY_PRINT));
                       unset($data[$key]["floor"][$key2]);
                       file_put_contents('data/data.json',json_encode($data,JSON_PRETTY_PRINT));
                       return "your rented park has deleted successfully!";
                    }
                }
            }
        }
        return "failed to delete  rented park!";
    }
}

?>