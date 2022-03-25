<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="../css/pricing.css">
	<?php
		require "../blocks/head_block.php";
	?>
	<title>Pricing</title>
</head>



<body>
	<div class="containers">
		<?php
			require "../blocks/header.php";
		?>

		<div class="section3">
			<div class="section3__title">
				Ціни
			</div>
			<div class="conteiner">
				<div class="row">
					<div class="section3__item col-md-4 ">
						<div class="section3__header">
							<div class="section3__header-title">BASIC</div>
							<div class="section3__header-item">20$</div>
						</div>
						<div class="section3__body">
							<ul type="none" class="section3__list">
								<li class="section3__link">unlimited gym access</li>
								<li class="section3__link">1 training program</li>
								<li class="section3__link">free fitness consultation</li>
							</ul>
						</div>
						<div class="section3__footer">
							<div class="section3__footer-text">
								JOIN NOW
							</div>
						</div>

					</div>
					<div class="section3__item col-md-4 ">
						<div class="section3__header">
							<div class="section3__header-title">PREMIUM</div>
							<div class="section3__header-item">35$</div>
						</div>
						<div class="section3__body">
							<ul type="none" class="section3__list">
								<li class="section3__link">unlimited gym access</li>
								<li class="section3__link">5 training programs</li>
								<li class="section3__link">free fitness consultation</li>
								<li class="section3__link">personal trainer</li>
							</ul>
						</div>
						<div class="section3__footer">
							<div class="section3__footer-text section3__footer-active">
								JOIN NOW
							</div>
						</div>

					</div>
					<div class="section3__item col-md-4 ">
						<div class="section3__header">
							<div class="section3__header-title">ELITE</div>
							<div class="section3__header-item">45$</div>
						</div>
						<div class="section3__body">
							<ul type="none" class="section3__list">
								<li class="section3__link">unlimited gym access</li>
								<li class="section3__link">1 training program</li>
								<li class="section3__link">free fitness consultation</li>
								<li class="section3__link">personal trainer</li>
								<li class="section3__link">50% off drinks</li>
							</ul>
						</div>
						<div class="section3__footer">
							<div class="section3__footer-text">
								JOIN NOW
							</div>
						</div>

					</div>

				</div>

			</div>
		</div>

<?php
	require "../blocks/footer.php"
?>