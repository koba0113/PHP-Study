<?php

// Userクラスの読み込み
require 'Gun.php';

$mainWeapon = new Gun("AK47", 30, 30);
$subWeapon = new Gun("Mosin-Nagant", 5, 5);

// 現在の状態を表示
$mainWeapon->reload(30);
$subWeapon->reload(5);

$mainWeapon->echoStatus();
$subWeapon->echoStatus();

$mainWeapon->fire();
$subWeapon->fire();

$mainWeapon->echoStatus();
$subWeapon->echoStatus();

$mainWeapon->setExtendedMagazine(10);
$mainWeapon->echoStatus();

$mainWeapon->reload(30);
$mainWeapon->echoStatus();

$subWeapon->setExtendedMagazine(5);
$subWeapon->echoStatus();

$subWeapon->reload(5);
$subWeapon->echoStatus();
