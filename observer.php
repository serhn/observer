<?php
namespace Serh\Observer;

class Observer{
    function __construct()
    {
        echo "hahah";
    }
    function setData(){
        return "set data";
    }
    function getData(){
        return "get data";
    }
}