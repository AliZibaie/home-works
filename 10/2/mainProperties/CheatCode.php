<?php

class cheatCode
{
    private static $cheatCode= "1309li1jk1B23*12";
    private bool $isInfinity;

    public static function checkCode($code) : bool{
        if (self::$cheatCode != $code){
            return false;
        }
        return true;
    }

    /**
     * @return bool
     */
    public function isInfinity(): bool
    {
        return $this->isInfinity;
    }


}