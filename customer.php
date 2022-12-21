<?php
	include('conn.php');
	
    $id=$_POST['id'];
	$title=$_POST['title'];
    $fName=$_POST['fname'];
    $mName=$_POST['mname'];
    $lName=$_POST['lname'];
	$contact=$_POST['contact'];
    $district=$_POST['district'];
	

    $sql="insert into `customer` (`title`,`first_name`,`middle_name`,`last_name`,`contact_no`,`district`) 
    values('$title','$fName','$mName','$lName','$contact','$district')";

    if(mysqli_query($conn,$sql===TRUE)){
        echo "<script>alert('Details Added');window.location.href='index.html';</script>";
    }else{
        echo"Error: ".$sql2. "<br>".mysqli_error($conn);

    }
    mysqli_close($conn);
	
?>