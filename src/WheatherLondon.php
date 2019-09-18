<?php
namespace Serh\Observer;
class WheatherLondon implements ObserverInterface{
    private $currentTemperature;
    private $currentPresure;
    public function update(ObservableInterface $instance)
    {
        $this->currentTemperature= $instance->getTemperature();
        $this ->currentPresure= $instance->getPresure();

        $this->display();
    }
    public function display() {        
        echo '<b>WheatherLondon</b> Текущая температура: '.$this->currentTemperature.'; Текущее давление: '.$this->currentPressure.'<br/>';    
    }
}