<?php
namespace Serh\Observer;

interface ObserverInterface{
    public function update(ObservableInterface $instance);
}