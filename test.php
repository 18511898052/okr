<?php
//测试webhooks 同步代码
require 'vendor/autoload.php';
 
$article1 = new Hhxc\hs\Article();
$article2 = new Hhxc\lj\Article();

echo $article2->test();
