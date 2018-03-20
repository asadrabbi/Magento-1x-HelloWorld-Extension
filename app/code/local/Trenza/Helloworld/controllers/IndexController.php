<?php
 
class Trenza_Helloworld_IndexController extends Mage_Core_Controller_Front_Action{

    public function indexAction(){
		$this->loadLayout();
        $this->renderLayout();
    }
    public function anotherAction(){
		$this->loadLayout();
        $this->renderLayout();
    }
}
?>