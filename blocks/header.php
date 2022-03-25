<header class="header__container">
	<div class="header">
		<div class="header__logo">
			<img src="../img/lending/logo.png" alt="">
			<span>MGym</span>
		</div>
		<nav>
			<div class="topnav" id="myTopnav">
				<a class="topnav__item" href="../index.php">HOME</a>
				<a class="topnav__item" href="../trainers/trainers.php">TRAINERS</a>
				<a class="topnav__item" href="../services/services.php">SERVICES</a>
				<a class="topnav__item" href="../pricing/pricing.php">PRICING</a>
				<?php
					if ($_SESSION["user"]){
						echo '<a class="topnav__item create-account" href="../views/logout.php">Logout</a>';
					}
					else{
						echo '<a class="topnav__item create-account" href="../registration/registration.php">CREATE ACCOUNT</a>';

					}
				?>  
				<a href="#" id="menu" class="icon">&#9776</a>
			</div>
		</nav>
	</div>
</header>