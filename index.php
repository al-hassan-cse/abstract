<?php 

abstract class Sort{
    # this abtract method
    # ata call korte hobe class a
    public abstract function getName();
    public abstract function GetAge();
    # diferrent abstract
    # this non-abtract method
    public function GetRoll(){

    }
    
} 

abstract class Sort2{
    
} 

class SortImpl extends Sort{
    
    public function getName()
    {

    }
    public function GetAge()
    {

    }  
} 

class SortImpl2 extends Sort{
    
    public function getName()
    {

    }
    public function GetAge()
    {

    }  
} 

$obj = new SortImpl;
echo $obj->getName("Al Hassan");
echo $obj->GetAge("30");
 
 
# note:
#  same akta class er moto
#  ata akta singture, object create kora jai na
#  same as interface
#  same function implement korte hobe
#  function body call korte parbe 
#  abstract class direct object kore use kora jbe na
#  multiplue use kora jai na
?>