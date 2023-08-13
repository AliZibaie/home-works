<?php

class OnlineStore implements Cart
{
    private array $cart;
    private array $item;

    public function addItem(array $item,int $number) : void
    {
         abs($number) != $number ? throw new Exception("you cant enter negative number!") : null;
         $number == 0 ? throw new Exception("you could do nothing !") : null;
         if (isset($this->cart[$item["name"]] )){
             $this->cart[$item["name"]]  +=  $number;

         }else{
             $item["number"] >= $number ? ($this->cart[$item["name"]]  = $number) : throw new Exception("product not available with the amount that you want");
         }


    }
    /**
     * @param array $item
     */
    public function setItem(array $item)
    {
        $this->item[$item["name"]] = $item["cost"];
        return $this;
    }

    /**
     * @return array
     */
    public function getItem(): array
    {
        return $this->item;
    }

    /**
     * @return array
     */
    public function getCart(): array
    {
        return $this->cart;
    }

    public function removeItem(string $name,int $number) : void{
        abs($number) != $number ? throw new Exception("you cant enter negative number!") : null;
        $number == 0 ? throw new Exception("you could do nothing !") : null;
        !array_key_exists("$name", $this->getCart()) ? throw new Exception("you have not added $name to the cart !") : null;
        $this->getCart()["$name"] < $number ? throw new Exception("you cant remove items more than you have added before!") : null;
        $this->cart["$name"]  = ($this->cart["$name"] - $number);
        if(!$this->cart["$name"]){
            unset($this->cart[$name]);
        }
    }
    public function calculateTotalPrice()
    {
        $sum = 0;
        $name = array_keys($this->getItem());
        foreach ($name as $key => $names){
            if(array_key_exists($names, $this->getCart())){
                $sum += $this->getItem()[$names] * $this->getCart()["$names"];
            }
        }
        return $sum;
    }
}
