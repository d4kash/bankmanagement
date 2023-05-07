<?php
require('includes/config.php');
 session_start();

	
	$amt = $_POST['amt'];
	
	$cat=$_SESSION['unm'];
	
	$totalq="select d_amt from dept where d_usr='$cat'";
	
	$totalres=mysqli_query($conn,$totalq) or die("Can't Execute Query...");
	$totalrow=mysqli_fetch_assoc($totalres);
	
	
	$page_total_rec=$totalrow['d_amt'];
	

			if($page_total_rec == 0){

				$lik = mysqli_connect("localhost","root","","book_store");
				if($lik === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "UPDATE dept SET d_dpt = '$amt' , d_amt = '$amt' WHERE d_usr = '$cat'";
if(mysqli_query($lik, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($lik);
}
	}else{
				$amtt = $amt + $page_total_rec;
				$lin = mysqli_connect("localhost","root","","book_store");
				if($lin === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$bal = "UPDATE dept SET d_dpt = '$amt' , d_amt = '$amtt' WHERE d_usr = '$cat'";
if(mysqli_query($lin, $bal)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $bal. " . mysqli_error($link);
}
	}
	
	
?>