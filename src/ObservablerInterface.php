<?php
namespace Serh\Observer;

interface ObserableInterface{
    public function atach( ObserverInterface $instance);
    public function detach( ObserverInterface $instance);
    public function notify();
}