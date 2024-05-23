<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "web_project"; 

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("fail to connect!");
}