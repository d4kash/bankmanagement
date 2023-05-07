<?php
require('includes/config.php');
 session_start();

	
	$amt = $_POST['amtw'];
	
	$cat=$_SESSION['unm'];
	
	$totalq="select d_amt from dept where d_usr='$cat'";
	
	$totalres=mysqli_query($conn,$totalq) or die("Can't Execute Query...");
	$totalrow=mysqli_fetch_assoc($totalres);
	
	
	$page_total_rec=$totalrow['d_amt'];
	

			if($page_total_rec == 0){
				echo "Can't Withdraw";

				
	}else{
				$amwt =  $page_total_rec - $amt ;
				$lin = mysqli_connect("localhost","root","","book_store");
				if($lin === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$bal = "UPDATE dept SET d_amt = '$amwt' WHERE d_usr = '$cat'";
if(mysqli_query($lin, $bal)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $bal. " . mysqli_error($link);
}
	}
	
	
?>