<?php
	include('conn.php');
	
    $itemcode=$_POST['itemCode'];
	$itemname=$_POST['itemName'];
    $itemcat=$_POST['cat'];
    $itemsubcat=$_POST['scat'];
    $qty=$_POST['qty'];
	$unitprice=$_POST['unitPrice'];

	

    $sql="insert into `item` (`item_code`,`item_category`,`item_subcategory`,`item_name`,`quantity`,`unit_price`) 
    values('$itemcode','$itemcat','$itemsubcat','$itemname','$qty','$unitprice')";

    if(mysqli_query($conn,$sql===TRUE)){
        echo "<script>alert('Details Added');window.location.href='index.html';</script>";
    }else{
        echo"Error: ".$sql2. "<br>".mysqli_error($conn);

    }
    mysqli_close($conn);
	
?>