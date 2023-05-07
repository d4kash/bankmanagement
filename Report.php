<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				
				<div id="logo-wrap">
					<div id="logo">
							<?php
								include("includes/logo.inc.php");
							?>
					</div>
				</div>
			

				<div id="page">
					
					<div id="content">
						<div class="post">
							<h1 class="title">Welcome to 
							<?php 
								if(isset($_SESSION['status']))
								{
									echo $_SESSION['unm']; 

									echo'<h3 >Your account balance is:<h3>';
									$cat=$_SESSION['unm'];

									
										$con=mysqli_connect("localhost","root","","book_store");
// Check connection
											if (mysqli_connect_errno())
  												{
  														echo "Failed to connect to MySQL: " . mysqli_connect_error();
  													}

													$sql= "SELECT d_amt FROM dept WHERE d_usr = '$cat'";

													if ($result=mysqli_query($con,$sql))
  														{
  // Fetch one and one row
  													while ($row=mysqli_fetch_row($result))
  														  {
   															 echo $row[0];
   															 }
  // Free result set
  														mysqli_free_result($result);
																}

															mysqli_close($con);
																		
									
									

								}
								else
								{	
									
									echo '<form action="process_login.php" method="POST">
										<h2>LogIn</h2>
											<b>Username:</b>
											<br><input type="text" name="usernm"><br>
											<br>
											
											
											<b>Password:</b>
											<br><input type="password" name="pwd">
											<input type="submit" id="x" value="Login" />
										</form>';
					
								}
							?>
							</h1>
							
							
						</div>
						
					</div>
					
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					
					<div style="clear: both;">&nbsp;</div>
				</div>
			
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
