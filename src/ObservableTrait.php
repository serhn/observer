<?php
namespace Serh\Observer;
trait ObservableTrait{
    public function atach(ObserverInterface $instance)
    {
        foreach($this->observers as $observer){
             if($observer===$instance){
                 return false;
             }
        }
        $observers[]=$instance;
        return true;
        
    }
    public function detach(ObserverInterface $instance)
    {
        foreach($this->observers as $key=>$observer){
            if($observer===$instance){
                unset($this->observers[$key]);
                return true;
            }
        }
        return false;
    }
    
    public function notify()
    {
        foreach($this->observers as $observer){
             $observer->update($this);
        }
    }
}