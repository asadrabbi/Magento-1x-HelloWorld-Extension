<?php
 
class Trenza_Helloworld_Block_Index extends Mage_Core_Block_Template
{
    public function sayHelloWorld()
    {
        $string =  "Hello World!!"; //value passed to helloworld.phtml file
        return $string;
    }
	public function HelloWorldAgain()
    {
        $string =  "Hello Beautiful World!!"; //value passed to helloworld.phtml file
        return $string;
    }
}
?>