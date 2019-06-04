<?php
$arr = [1,2,3,5,6,4,-9,1,6,8,5,3,-2,-1,2,3,];

class MinArr{
    function __construct($arr)
    {
        $this->arr = $arr;
    }
    function searchMin(){
        $min = $this->arr[0];
//        var_dump($min);
        for($i = 1; $i<count($this->arr); $i++){
            if ($this->arr[$i] <$min){
                $min = $this->arr[$i];
            }
        }
        return $min;
    }
}
$search = new MinArr($arr);
echo $search->searchMin();