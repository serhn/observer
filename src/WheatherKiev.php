<?php

namespace Serh\Observer;

class WheatherKiev implements ObserverInterface
{
    private $currentTemperature;
    private $currentPresure;
    public function update(ObservableInterface $instance)
    {
        $this->currentTemperature = $instance->getTemperature();
        $this->currentPresure = $instance->getPresure();
        $this->display();
    }
    public function display()
    {
        echo '<b>WheatherKiev</b> Текущая температура: ' . $this->currentTemperature . '; Текущее давление: ' . $this->currentPressure . '<br/>';
    }
}
