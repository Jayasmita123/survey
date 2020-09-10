<?php
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="survey_database";
 $connection=new mysqli ($servername,$username,$password,$dbname);

if( $connection->connect_error)
{
    die("connection fail".$connection->connect_error);
}





?>
