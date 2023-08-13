<?php
class parking
{

	public string $name;
	protected string $openTime;
	protected string $closeTime;
	protected int $numberOfFloor;
	protected array $floorCapacity;
    protected int $remainCapacity;
	public function __construct($name)
	{
		$this->name = $name;
	}
	public function setName(){
		$data = json_decode(file_get_contents("data/data.json"), true);
		foreach ($data as $key => $datas) {
			if ($datas["parkingName"] == $this->name) {
				return "your parking is already set !";
			}
		}
		$data[]["parkingName"] = $this->name;
		file_put_contents('data/data.json', json_encode($data, JSON_PRETTY_PRINT));
		return "your parking is set successfully!";
	}
	public function getOpenTime()
	{
		$data = json_decode(file_get_contents("data/data.json"), true);
		foreach ($data as $datas) {
			if ($datas["parkingName"] == $this->name) {
				return $this->openTime = $datas["openTime"];
			}
		}
		return null;
	}
	public function setOpenTime(string $openTime): string
	{
		$data = json_decode(file_get_contents("data/data.json"), true);
		foreach ($data as $key => $datas) {
			if ($datas["parkingName"] == $this->name) {
				$data[$key]["openTime"] = $openTime;
				file_put_contents('data/data.json', json_encode($data, JSON_PRETTY_PRINT));
				return "open time has set successfully";
			}
		}
		return "failed to set open time!";

	}

	public function getCloseTime()
	{
		$data = json_decode(file_get_contents("data/data.json"), true);
		foreach ($data as $datas) {
			if ($datas["parkingName"] == $this->name) {
				return $this->closeTime = $datas["closeTime"];
			}
		}
		return null;
	}

	public function setCloseTime(string $closeTime)
	{
		$data = json_decode(file_get_contents("data/data.json"), true);
		foreach ($data as $key => $datas) {
			if ($datas["parkingName"] == $this->name) {
				$data[$key]["closeTime"] = $closeTime;
				file_put_contents('data/data.json', json_encode($data, JSON_PRETTY_PRINT));
				return "open time has reset successfully!";
			}
		}
		return "failed to set close time!";
	}



	public function getNumberOfFloor()
	{
		$data = json_decode(file_get_contents("data/data.json"), true);
		foreach ($data as  $datas) {
			if ($datas["parkingName"] == $this->name) {
				return $datas["numberOfFloor"];
			}
		}
		return null;
	}


	public function setNumberOfFloor(int $numberOfFloor) : string
	{
		$data = json_decode(file_get_contents("data/data.json"), true);
		foreach ($data as $key => $datas) {
			if ($datas["parkingName"] == $this->name) {
				$data[$key]["numberOfFloor"] = $numberOfFloor;
				file_put_contents('data/data.json', json_encode($data, JSON_PRETTY_PRINT));
				return "number of floors has set successfully!";
			}
		}
		return "failed to set number of floors!";
	}


	public function getFloorCapacity():array
	{
		$data = json_decode(file_get_contents("data/data.json"), true);
		foreach ($data as $datas) {
			if ($datas["parkingName"] == $this->name) {
					return $datas["floorCapacity"];
			}
		}
		return [];
	}


	public function setFloorCapacity(array $floorCapacity):string
	{
		$data = json_decode(file_get_contents("data/data.json"), true);
		foreach ($data as $key => $datas) {
			if ($datas["parkingName"] == $this->name) {
				$data[$key]["floorCapacity"] = $floorCapacity;
				file_put_contents('data/data.json', json_encode($data, JSON_PRETTY_PRINT));
				return "capacity of floors has set successfully!";
			}
		}
		return "failed to set capacity of floors!";
	}




    public function getRemainCapacity() 
{
    $data = json_decode(file_get_contents("data/data.json"), true);
	foreach ($data as $datas) {
		if ($datas["parkingName"] == $this->name) {
				$remainCapacity = array_sum($this->getFloorCapacity()) - count($datas["floor"]);
				return $this->remainCapacity= $remainCapacity;
		}
	}
	return null;
}
public function setRemainCapacity() :string
{
    $data = json_decode(file_get_contents("data/data.json"), true);
	foreach ($data as $key => $datas) {
		if ($datas["parkingName"] == $this->name) {
			$data[$key]["remainCapacity"] = array_sum($this->getFloorCapacity());
			file_put_contents('data/data.json', json_encode($data, JSON_PRETTY_PRINT));
			return "remain capacity has set successfully!";
		}
	}
	return "failed to set remain capacity!";
}

public function getParkingInfo()
{
	return  [
		"parkingName" => $this->name,
		"openTime" => $this->getOpenTime(),
		"closeTime" => $this->getCloseTime(),
		"numberOfFloor" => $this->getNumberOfFloor(),
		"floorCapacity" => $this->getFloorCapacity()
		];

}

}