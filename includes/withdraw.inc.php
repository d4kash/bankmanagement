<ul>
			<li id="login">
				
						<?php
						require('includes/config.php');
							if(isset($_SESSION['status']))
							{
								echo '<form action="process_withdraw.php" method="POST">
										<h2>Withdraw here:</h2>
											<b>Amount:</b>
											<br><input type="text" name="amtw"><br>
											<br>
											
											
											<input type="submit" id="x" value=" Withdraw" />
										</form>';
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
			</li>

			
			
			
		</ul>