<?php
/**
 * 如果我们有100个或者1000个数字只需要在里面排序出5个那么我们可能一个变量存贮了很多值这样很消耗性能
 * 
 */

 //生成数组使用PHP自带函数array_fill 当然也可以使用for循环
  //定义：array_fill(start,number,value)  //start：起始索引 number：值的个数 value：数组值
//   $arr = array_fill(1,100,rand(1,100));
//   $cnt = count($arr);
  $arr = [35,19,18,12,76];
  $cnt = count($arr);
  $storage = '';
  for($i=0;$i<$cnt;$i++){
    for($j=$i+1;$j<$cnt;$j++){
        if($arr[$i] > $arr[$j]){
            $storage = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $storage;
        }
    }
  }



  var_dump($arr);die;