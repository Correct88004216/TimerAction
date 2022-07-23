<?php

class Timer{
    public function __construct($time = 5, $type = 1){
        $this->time = $time;
        $this->type = $type;
    }

    public function transformTime($type){
        if($type === 1){
            return "seconds";
        }
        if($type === 2){
            return "minutes";
        }
        if($type === 3){
            return "hours";
        }
    }

    public function isTimeOver(){
        if($this->type == 1){
            sleep($this->time);
            //Action after execution (in script)
        }
        if($this->type == 2){
            sleep($this->time * 60);
            //Action after execution (in script)
        }
        if($this->type == 3){
            sleep($this->time * 60 * 60);
            //Action after execution (in script)
        }
    }
}