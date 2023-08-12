<?php
$databaseHost = 'localhost';
$databaseUsername = 'root';
$databasePassword = '';
$dbname='nivedb';
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword,$dbname);
mysqli_query($mysqli,"CREATE TABLE cust(
    id int(11) NOT NULL auto_increment,
    name varchar(100),
    email varchar(100),
    mobile varchar(15),
    PRIMARY KEY  (id)
  );");
?>
