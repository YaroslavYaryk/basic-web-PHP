<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="../css/trainers.css">

	<?php
		require "../blocks/head_block.php"
	?>
</head>

<body>
	<div class="containers">
		<?php
			require "../blocks/header.php"
		?>
		<div class="container__body">
			<div class="container__header">
				<div class="container__title">Тренери</div>
			</div>
			<div class="row" style="width: 100%;">
				<div class="col-md-12 row__item" style="width: 85%;">
					<div class="col-sm-12__img row__item-img">
						<img class="row__item-img-image" src="../img/lending/trainer1.jpg" alt="">
					</div>
					<ul type="none" class="col-sm-12__list">
						<li>ПІБ: Keith Lawrence </li>
						<li>Вік: 34 роки</li>
						<li>Професіональний стаж: 15 років</li>
						<li>Напрям спорту: Powerlifting</li>
						<li>Габарити тіла: 170х90х30 см</li>
						<li>Ціна тренування: 350 грн</li>
					</ul>
				</div>
				<div class="col-md-12 row__item" style="width: 85%;">
					<div class="col-sm-12__img row__item-img">
						<img class="row__item-img-image" src="../img/lending/trainer2.jpg" alt="">
					</div>
					<ul type="none" class="col-sm-12__list">
						<li>ПІБ: Mat Forzaglia </li>
						<li>Вік: 33 роки</li>
						<li>Професіональний стаж: 13 років</li>
						<li>Напрям спорту: Crossfit</li>
						<li>Габарити тіла: 175х95х35 см</li>
						<li>Ціна тренування: 350 грн</li>
					</ul>
				</div>
				<div class="col-md-12 row__item" style="width: 85%;">
					<div class="col-sm-12__img row__item-img">
						<img class="row__item-img-image" src="../img/lending/trainer3.jpg" alt="">
					</div>
					<ul type="none" class="col-sm-12__list">
						<li>ПІБ: Zack Thompson </li>
						<li>Вік: 27 роки</li>
						<li>Професіональний стаж: 8 років</li>
						<li>Напрям спорту: Fitnes</li>
						<li>Габарити тіла: 180х80х20 см</li>
						<li>Ціна тренування: 250 грн</li>
					</ul>
				</div>
			</div>

<?php
	require "../blocks/footer.php"
?>