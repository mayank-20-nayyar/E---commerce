<?php

$fileUpload_name=($_FILES['file']['name']);
$fileUpload_size=($_FILES['file']['size']);
$fileUpload_type=($_FILES['file']['type']);
$fileUpload=( $_FILES['file']['tmp_name']);


$strDesc=$_POST["strDesc"];



if(empty($strDesc) || $fileUpload == "none")

die("You must enter both a description and file");





$dbServer = "localhost";


$dbUser = "root";

$dbPass = "";

$sConn = mysqli_connect($dbServer, $dbUser, $dbPass) or die("Couldn't connect to database server");

mysqli_select_db($sConn,"woostyle") or die(mysqli_error($sConn));



$fileHandle = fopen($fileUpload, "r");

$fileContent = fread($fileHandle, $fileUpload_size);

$fileContent = addslashes($fileContent);



$dbQuery = "INSERT INTO shopdetails VALUES ";

$dbQuery .= "(0, '$about', '$shoplocation', '$instahandle', '$shopname', '$fbhandle', '$twitterhandle', '$website', '$fileContent')";

mysqli_query($sConn,$dbQuery) or die("Couldn't add file to database");

echo "<h1>File Uploaded</h1>";
echo "The details of the uploaded file are shown below:<br><br>";

echo "<b>File name:</b> $fileUpload_name<br>";

echo "<b>File type:</b> $fileUpload_type <br>";

echo "<b>File size:</b> $fileUpload_size <br>";

echo "<b>Uploaded to:</b> $fileUpload <br><br>";





?>
