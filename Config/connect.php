<?php
$info = array(
    'host' => 'ns2.bestthaihost.com:3306',
    'user' => 'lamphun_admin',
    'password' => 'lkm8888',
    'dbname' => 'lamphun_sinopharm01'
);
$conn = mysqli_connect($info['host'], $info['user'], $info['password'], $info['dbname']) or die('Error connection database!');
mysqli_set_charset($conn, 'utf8');

