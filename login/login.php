<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="../css/login.css">
	<?php
		require "../blocks/head_block.php"
	?>
	<title>Login</title>

</head>

<body>
	<div class="containers">
	<?php
		require "../blocks/header.php"
	?>

		<div class="section2">
			<div class=" section2__title">
				Вхід
			</div>
			<div class="containers">
				<div class="content">
					<form class="content__form" action="">
						<div class="content__top1">
							<div class="content__item">
								<input type="text" name="" id="">
								<span class="content__item-text">Ім'я</span>
							</div>
							<div class="content__item">
								<input type="text" name="" id="">
								<span class="content__item-text">Прізвище</span>
							</div>
						</div>
						<div class="content__top2">
							<div class="content__item">
								<input type="text" name="" id="">
								<span class="content__item-text content__item-middle">Адреса електронної пошти</span>
							</div>
						</div>
						<div class="form__button">
							<button style="background: #D7CE83;opacity: 64%;font-size: 20px;font-weight: bold;
											text-shadow: 1px 1px 1px #000;border-radius: 25px;padding: 10px 40px;color: #504e3a;"
								>До тренувань</button>
						</div>
					</form>
				</div>
			</div>
		</div>

<?php
	require "../blocks/footer.php"
?>