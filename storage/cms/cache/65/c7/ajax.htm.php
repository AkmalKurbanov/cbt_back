<?php 
class Cmse6ec9bf712dbcb4e6b6fad761148ec880eb175dd8ce4c0192a72a06ac93a8798Class extends Cms\Classes\PageCode
{
public function onTest()
{
    $value1 = input('value1');
    $value2 = input('value2');
    $operation = input('operation');

    switch ($operation) {
        case '+' :
            $this['result'] = $value1 + $value2;
            break;
        case '-' :
            $this['result'] = $value1 - $value2;
            break;
        case '*' :
            $this['result'] = $value1 * $value2;
            break;
        default :
            $this['result'] = $value2 != 0 ? round($value1 / $value2, 2) : 'NaN';
            break;
    }
}
}
