<?php

    interface IElectronicPart  {
        function getSpecs();
    }



    class ElectronicPart {
        private $manufacturer;
        private $price;
        private $model;
        function __construct($manufacturer, $price ,$model) {
            $this->setManufacturer($manufacturer);
            $this->setPrice($price);
            $this->setModel($model);
        }
        function setManufacturer($manufacturer) {
             $this->manufacturer = $manufacturer;
        }
        function setPrice($price) {
            $this->price = $price;
        }
        function setModel($model) {
            $this->model = $model;
        }
        function getManufacturer() {
            return $this->manufacturer;
        }
        function getPrice() {
            return  $this->price;
        }
        function getModel() {
            return  $this->model;
        }
    }




    class Screen extends ElectronicPart implements IElectronicPart  {
            private $size;
            private $panel;
            function __construct($manufacturer, $price, $model,  $size, $panel) {
                parent::setManufacturer($manufacturer);
                parent::setPrice($price);
                parent::setModel($model);
                $this->setSize($size);
                $this->setPanel($panel);
            }
            function setSize($size) {
                $this->size = $size;
            }
            function setPanel($panel) {
                $this->panel = $panel;
            }
            function getSize() {
                return $this->size;
            }
            function getPanel() {
                return  $this->panel;
            }
            function getSpecs(){
                return 'Screen manufacturer: ' . parent::getManufacturer() .
                    ', model: '             . parent::getModel() . 
                    ', price: '             . parent::getPrice();
            }
            function print(){
                return 'Screen manufacturer: ' . parent::getManufacturer() .
                    ', model: '             . parent::getModel() . 
                    ', price: '             . parent::getPrice() .
                    ', size: '              . $this->getSize() . 
                    ', panel: '             . $this->getPanel();
            }
        }



        class Mouse extends ElectronicPart implements IElectronicPart {
            private $isWired;
            function __construct($manufacturer, $price, $model, $isWired) {
            
            parent::setManufacturer($manufacturer);
            parent::setModel($model);
            parent::setPrice($price);
            $this->setIsWired($isWired);
            }
            function setIsWired($isWired) {
                $this->isWired = $isWired;
            }
            function getIsWired() {
                return $this->isWired;
            }
            function getSpecs(){
                return 'Mouse manufacturer: ' . parent::getManufacturer() .
                    ', model: '            . parent::getModel() . 
                    ', price: '            . parent::getPrice();
            }
            function print(){
                return 'Mouse manufacturer: ' . parent::getManufacturer() .
                    ', model: '            . parent::getModel() . 
                    ', price: '            . parent::getPrice() .
                    ', is wired: '         . $this->getIsWired();
            }
        }



        class Keyboard extends ElectronicPart implements IElectronicPart {
            private $isWired;
            function __construct($manufacturer, $price, $model, $isWired) {
                
                parent::setManufacturer($manufacturer);
                parent::setPrice($price);
                parent::setModel($model);
                $this->setIsWired($isWired);
            }
            function setIsWired($isWired) {
                $this->isWired = $isWired;
            }
            function getIsWired() {
                return $this->isWired;
            }
            function getSpecs(){
                return 'Keyboard manufacturer: ' . parent::getManufacturer() .
                    ', model: '               . parent::getModel() . 
                    ', price: '               . parent::getPrice();
                                    //    '  is wired: '     . $this->getIsWired();
            }
            function print(){
                return 'Keyboard manufacturer: ' . parent::getManufacturer() .
                    ', model: '               . parent::getModel() . 
                    ', price: '               . parent::getPrice() .
                    ', is wired: '            . $this->getIsWired();
            }
        }



        class Computer extends ElectronicPart implements IElectronicPart {
            private $motherboard;
            private $processor;
            private $hardDrive;
            private $ram;
            private $graphicCard;
            function __construct($manufacturer, $price, $model, $motherboard, $processor, $hardDrive, $ram, $graphicCard) {
                parent::setManufacturer($manufacturer);
                parent::setPrice($price);
                parent::setModel($model);
                $this->setMotherboard($motherboard);
                $this->setProcessor($processor);
                $this->setHardDrive($hardDrive);
                $this->setRam($ram);
                $this->setGraphicCard($graphicCard);
            }
            function setMotherboard($motherboard) {
                $this->motherboard = $motherboard;
            }
            function setProcessor($processor) {
                $this->processor = $processor;
            }
            function setHardDrive($hardDrive) {
                $this->hardDrive = $hardDrive;
            }
            function setRam($ram) {
                $this->ram = $ram;
            }
            function setGraphicCard($graphicCard) {
                $this->graphicCard = $graphicCard;
            }
            function getMotherboard() {
                return $this->motherboard;
            }
            function getProcessor() {
                return  $this->processor;
            }
            function getHardDrive() {
                return  $this->hardDrive;
            }
            function getRam() {
                return  $this->ram;
            }
            function getGraphicCard() {
                return  $this->graphicCard;
            }
            function getSpecs(){
                return 'Computer manufacturer: ' . parent::getManufacturer() .
                    ', model: '               . parent::getModel() . 
                    ', price: '               . parent::getPrice();
            }
            function print(){
                return 'Computer manufacturer: ' . parent::getManufacturer() .
                    ', model: '               . parent::getModel() . 
                    ', price: '               . parent::getPrice() .
                    ', motherboard: '         . $this->getMotherboard() . 
                    ', processor: '           . $this->getProcessor() .
                    ', hardDrive: '           . $this->getHardDrive() .
                    ', ram: '                 . $this->getRam() .
                    ', graphicCard: '         . $this->getGraphicCard() ;
            }
        }



        class Purchase  {
            private $screen;
            private $mouse;
            private $keyboard;
            private $computer;
            function __construct($screen, $mouse, $keyboard, $computer) {
                $this->setScreen($screen);
                $this->setMouse($mouse);
                $this->setKeyboard($keyboard);
                $this->setComputer($computer);
            }
            function setScreen($screen) {
                $this->screen = $screen;
            }
            function setMouse($mouse) {
                $this->mouse = $mouse;
            }
            function setKeyboard($keyboard) {
                $this->keyboard = $keyboard;
            }
            function setComputer($computer) {
                $this->computer = $computer;
            }
            function getScreen() {
                return $this->screen->getSpecs();
            }
            function getMouse() {
                return  $this->mouse->getSpecs();
            }
            function getKeyboard() {
                return  $this->keyboard->getSpecs();
            }
            function getComputer() {
                return  $this->computer->getSpecs();
            }
            function printScreen() {
                return $this->screen->print();
            }
            function printMouse() {
                return  $this->mouse->print();
            }
            function printKeyboard() {
                return  $this->keyboard->print();
            }
            function printComputer() {
                return  $this->computer->print();
            }
            function getFullPurchaseDetails(){
                return $this->getScreen() . '<br>' . $this->getMouse() . '<br>' . $this->getKeyboard() . '<br>' . $this->getComputer() . '<br>';  
            }
            function print(){
                return $this->printScreen() . '<br>' . $this->printMouse() . '<br>' . $this->printKeyboard() . '<br>' . $this->printComputer() . '<br>';  
            }
        }

?>