<?php
include_once ("MyList.php");
$myList = new MyList();
$myList->add(1);
$myList->add(2);
$myList->add(3);
$myList->add(4);
$myList->size();
$myList->insert(2,55);
$arr = [6,7,8,9];
$myList->addAll($arr);


var_dump($myList);
$myList->indexOf(6);