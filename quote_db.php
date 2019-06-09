<?php

	$query=mysqli_connect("localhost","root","","mavin");

	$quote_name=$_POST['quote_name'];
	$quote_email=$_POST['quote_email'];
	$quote_phone=$_POST['quote_phone'];
	$quote_subject=$_POST['quote_subject'];
	$quote_detail=$_POST['quote_detail'];
	$quote_date=date("Y/m/d");
	$quote_time=date("h:i:sa");
	
	$sql = "INSERT INTO quote 
						(quote_name,quote_email,quote_phone,quote_subject,quote_detail,quote_date,quote_time) 
			VALUES('".$quote_name."','".$quote_email."',".$quote_phone.",'".$quote_subject."','".$quote_detail."','".$quote_date."','".$quote_time."')";
	
	mysqli_query($query,$sql);
	
	header('Location:index.php?q=thanks');
?>