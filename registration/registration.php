<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../css/registration.css">
	<?php
		require "../blocks/head_block.php";
		if ($_SESSION["user"]){
			header('Location: '."/");
		}
	?>
	<title>Registration</title>

</head>

<body>
	<div class="containers">
	<?php
		require "../blocks/header.php"
	?>
		<div class="section2">
			<div class=" section2__title">
				Реєстрація
			</div>
			<div class="containers">
				<div class="content">
					<form class="content__form" action="../views/sign_up.php" method="POST">
						<div class="content__top1">
							<div class="content__item">
								<input type="text" name="name" id="" placeholder="Ім'я">
							</div>
							<div class="content__item">
								<input type="text" name="surname" id="" placeholder="Прізвище">
							</div>
						</div>
						<div class="content__top2">
							<div class="content__item">
								<input type="text" name="age" id="" placeholder="Вік">
							</div>
							<div class="content__item">
								<input type="text" name="email" id="" placeholder="Адреса електронної пошти">
							</div>
						</div>
						<div class="content__middle">
							<div class="content__item content__item-middle">
								<input type="text" name="health" id="" placeholder="Група здоров'я">
							</div>
						</div>
						<div class="content__bottom1">
							<div class="content__item">
								<input type="text" name="sport_type" id="" placeholder="Вид спорту">
							</div>
							<div class="content__item">
								<input type="text" name="living_place" id="" placeholder="Місце проживання">
							</div>
						</div>
						<div class="content__bottom2">
							<div class="content__item">
								<input type="text" name="music" id="" placeholder="Напрям музики">
							</div>
							<div class="content__item">
								<input type="text" name="experience" id="" placeholder="Тренувальний стаж">
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