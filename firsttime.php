<?php

//Setting up connection
$servername="localhost";
$username ="root";
$password = "";

$conn= mysqli_connect($servername,$username,$password);
if(!$conn){
    die("Sorry Unable to Connect:". mysqli_connect_error());
}else{
    echo "Conection Esatablished. <br>";
}

//Creating database Bank12
$sql= "CREATE DATABASE Bank12";

$result = mysqli_query($conn,$sql);

if(!$result){
    echo "Sorry Unable to Create Database. <br>";
}else{
    echo "DATABASE Created Successfully.<br>";
}

//Creating table customers
 $sql = "CREATE TABLE `Bank12`.`customers` ( `Cust_ID` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(11) NOT NULL , `Email` VARCHAR(20) NOT NULL , `Amount` FLOAT(30) NOT NULL , PRIMARY KEY (`Cust_ID`)) ";

 $result = mysqli_query($conn,$sql);

if(!$result){
    echo "Sorry Unable to Create Table.<br>";
}else{
    echo "Customer Table Created Successfully.<br>";
}

//Adding 10 dummey data into table customers
$sql ="INSERT INTO `Bank12`.`customers` (`Cust_ID`, `Name`, `Email`, `Amount`) VALUES ('1', 'tejas', 'tejas@yahoo.com', '78000.00'), ('2', 'samarth', 'samarth@orkut.com', '89000.00'), ('3', 'shruti', 'shruti@outlook.com', '60000.00'), ('4', 'rishita', 'rishita@gmail.com', '920000.00'), ('5', 'sanket', 'sanket@rediff.com', '600000.00'), ('6', 'aditya', 'aditya@xyz.com', '35560.00'), ('7', 'aryan', 'aryan@abc.com', '12000.00'), ('8', 'aryan', 'aryan@123.com', '92300.00'), ('9', 'atharv', 'atharv@gmail.com', '223000.00'), ('10', 'piyushi', 'piyushi@def.com', '920000.00')";

$result = mysqli_query($conn,$sql);

if(!$result){
    echo "Sorry Unable to add entries in table. <br>";
}else{
    echo "Entries added to table Successfully.<br>";
}

//Creating transaction table customers
$sql = "CREATE TABLE `Bank12`.`transaction` ( `Tran_ID` INT NOT NULL AUTO_INCREMENT , `From` VARCHAR(11) NOT NULL , `To` VARCHAR(11) NOT NULL , `Amount` DECIMAL NOT NULL , PRIMARY KEY (`Tran_ID`))";

$result = mysqli_query($conn,$sql);

if(!$result){
   echo "Sorry Unable to Create table.<br>";
}else{
   echo "Transaction Table Created Successfully.<br>";
}

?>