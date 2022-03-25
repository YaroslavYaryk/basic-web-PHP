<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="../css/services.css">
	<?php
		require "../blocks/head_block.php"
	?>
	<title>Services</title>

</head>

<body>
	<div class="containers">
		<?php
			require "../blocks/header.php"
		?>

		<div class="section2">
			<div class=" section2__title">
				Сервіси
			</div>
			<div class="containers">
				<div class="content">
					<div class=" row">
						<div class="section2__item col-sm-4 col-xs-12 ">
							<div class="section2__item-image">
								<img class="item__image" src="../img/lending/protein.jpg" alt="">
							</div>
							<div class="section2__item-text">
								MyProtein харчування
							</div>
						</div>
						<div class="section2__item col-sm-4 col-xs-12 ">
							<div class="section2__item-image">
								<img class="item__image" src=" ../img/lending/water.jpeg" alt="">
							</div>
							<div class="section2__item-text">
								Фірмова мінеральна вода
							</div>

						</div>
						<div class="section2__item col-sm-4 col-xs-12 ">
							<div class="section2__item-image">
								<img class="item__image" src="../img/lending/tonic.jpeg" alt="">
							</div>
							<div class="section2__item-text">
								Фірмовий ізотонік
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="containers">
				<div class="content">
					<div class="row">
						<div class="section2__item col-sm-4 col-xs-12 ">
							<div class="section2__item-image">
								<img class="item__image" src="../img/lending/clothes.jpg" alt="">
							</div>
							<div class="section2__item-text">
								Магазин чоловічого <br>спортивного одягу
							</div>
						</div>
						<div class="section2__item col-sm-4 col-xs-12 ">
							<div class="section2__item-image">
								<img class="item__image" src="../img/lending/girl_clothes.jpeg" alt="">
							</div>
							<div class="section2__item-text">
								Магазин жіночого <br>спортивного одягу
							</div>

						</div>
						<div class="section2__item col-sm-4 col-xs-12 ">
							<div class="section2__item-image">
								<img class="item__image" src="../img//lending/equipement.jpeg" alt="">
							</div>
							<div class="section2__item-text">
								Додатковий спортивний <br>інвентар
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

<?php
	require "../blocks/footer.php"
?>