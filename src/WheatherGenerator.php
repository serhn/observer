<?php
namespace Serh\Observer;
class WheatherGenerator implements ObservableInterface{
    private $observers=[];
    private $temperatue;
    private $presure;
    use ObservableTrait;
    
    public function setParams($temperatue,$presure){
        $this->temperatue=$temperatue;
        $this->presure=$presure;
        $this->notify();
    }
    public function getTemperature(){
        return $this->temperatue;
    }
    public function getPresure(){
        return $this->presure;
    }
}