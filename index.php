<?php
include 'Mobile_Detect.php';

$OB=NEW Mobile_Detect();

$RS=$OB->isMobile();
$RS1=$OB->isTablet();
var_dump($RS,$RS1);