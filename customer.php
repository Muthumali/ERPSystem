<?php
	include('conn.php');
	
    $id=$_POST['lblCusId'];
	$title=$_POST['lblCusTitle'];
    $fName=$_POST['lblcusFName'];
    $mName=$_POST['lblcusMName'];
    $lName=$_POST['lblcsLName'];
	$contact=$_POST['lblcusContact'];
    $district=$_POST['lblcusDis'];
	

    $sql="insert into `customer` (id,title,first_name,middle_name,last_name,contact_no,district) values(?,?,?,?,?,?,?)";
	$statment=$conn->prepare($sql);

    $statment->bind_param("sssssss",$id,$title,$fName,$mName,$lName,$contact,$district);
    $statment->execute();
?>