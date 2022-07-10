<?php

namespace app;

class CheckPrime {
    public function checkPrime($number) {
        if ($number <=1) {
            return false;
    }
        if ($number ==2){
            return true;
        }
        else{
            for($i = 2; $i <= $number; $i++) {
                if ($number%$i == 0) {
                    return false;
                }
            return true;
        }
}
}
}