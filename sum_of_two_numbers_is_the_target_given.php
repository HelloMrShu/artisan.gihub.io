<?php

# 在数组中查询和为target的两个数, 并返回index
# 默认最多只有一组满足条件

function twoSum($nums, $target) {
    $pos = []; 
    if (empty($nums) || count($nums) <= 1 || is_null($target)) {
        return $pos; 
    }   

    $len = count($nums);
    foreach ($nums as $key => $val) {
        $rest = array_slice($nums, $key + 1, $len - $key ,true);
        $second = array_search($target - $val, $rest);
        if ($second) {
            $pos = [$key, $second];
            break;
        }   
    }   
    return $pos;
}

# 测试用例
$num = []; 
$target = 1;
$ret = twoSum($num, $target);
echo json_encode($ret)."\n";

$num = [2,7,23,45];
$target = 9;
$ret = twoSum($num, $target);
echo json_encode($ret)."\n";

$num = [-1,-2,-3,-4,-5];
$target = -8;
$ret = twoSum($num, $target);
echo json_encode($ret)."\n";

$num = [-1,-2,-3,-4,-5,0,4];
$target = 3;
$ret = twoSum($num, $target);
echo json_encode($ret)."\n";
