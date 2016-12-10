<?php

$conn = mysqli_connect("localhost", "root", "", "logintest");

if(!$conn){
	die("connection failed: ".mysql_connect_error());

}
