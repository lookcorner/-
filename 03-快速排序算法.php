<?php
/**
 * 快速排序
 * 
 */
 $arr = [6,1,2,7,9,3,4,5,10,8];
 $cnt = count($arr);

 function quickSort($arg1,$arg2){
    //定义一个左右暂存区
    $right = $arg1;
    $left  = $arg2;
    $temp  = $cnt[$left];
    while($left!=$right){
        if($right < $left){
            return false;
        }
        while($cnt[$right] >=$temp && $left < $right){
            $right --;
        }
        while($cnt[$left]<= $temp && $left < $right){
            $left ++;
        }

        if($left < $right){
            $t = $cnt[$left];
            $cnt[$left] = $cnt[$right];
            $cnt[$right] = $t;
        }
        $cnt[$arg1] = $cnt[$left];
        $cnt[$left] = $temp;

        quickSort($arg1,$left - 1);
        quickSort($right+1,$arg2);
        return;

    }
    

 }
