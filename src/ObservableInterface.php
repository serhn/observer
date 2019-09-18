<?php
namespace Serh\Observer;

interface ObservableInterface{
    public function atach( ObserverInterface $instance);
    public function detach( ObserverInterface $instance);
    public function notify();
}