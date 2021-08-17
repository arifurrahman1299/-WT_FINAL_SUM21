<?php
include 'models/db_config.php';

$name="";
$err_name="";

$from="";
$err_from="";

$to="";
$err_to="";

$sn="";
$err_sn="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["name"])){
			$err_name="Enter your Name";
			$err = true;
		}
		
		else{
			$name=$_POST["name"];
		}

		if(empty($_POST["from"])){
			$err_from="Enter Your departure Location";
			$err = true;
		}
		
		else{
			$from=$_POST["from"];
		}
		if(empty($_POST["to"])){
			$err_to="Name Required";
			$err = true;
		}
		
		else{
			$to=$_POST["to"];
		}
		if(empty($_POST["sn"])){
			$err_sn="Name Required";
			$err = true;
		}
		
		else{
			$sn=$_POST["sn"];
		}
		
		if(!$err){
			$rh=insertUserc($fname,$tid,$exp);
		  echo "Feedback submitted successfully. Thanks for your feedback"; 
		}
}
		
		
?>