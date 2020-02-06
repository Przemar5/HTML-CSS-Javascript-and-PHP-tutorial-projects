<?php
	require_once "header.php";
?>
	
	<main>
		
		<div class="wrapper-main">
			
			<section>
				
				<h2>Sign up</h2>
				
				<form action="includes/signup.inc.php" method="post">
					
					<input type="text" name="uid" placeholder="Username">
					
					<input type="email" name="email" placeholder="E-mail">
					
					<input type="password" name="pass1" placeholder="Password">
					
					<input type="password" name="pass2" placeholder="Repeat password">
					
				</form>
				
			</section>
			
		</div>
		
	</main>
	
<?php
	require_once "footer.php";
?>