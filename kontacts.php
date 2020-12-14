<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Контакты художественной ковки</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/pages.css">

</head>
<body>
	<div class="wrapper">

	<?php require_once 'header.php';  ?>
        <!--Контент grid-элемент+ grid-контейнер-->
		<main class="main">
			<form action="functions.php" method="POST" class=form_link>
				<div class="title">
					<h1>Свяжитесь с нами</h1>
				</div>
				<div class="block_svyazi">
					<div class="block_item">
					</div>
					<div class="block_item">
						<p>Адрес:</p>
						<p>г. Воронеж </p>
						<p>ул. Приморская д.134</p>
					</div>
					<div class="block_item">
						<p>Телефоны:</p>
						<p>8 (920) 219 31 06 </p>
						<p> 8 (473) 269 40 37</p>
					</div>
					<div class="block_item">
						<p>Время работы:</p>
						<p>	ПН-Пят. 9:00-18:00 </p>
						<p>Сб, Вс — выходной </p>
					</div>
					<div class="block_item">
					</div>
					
				</div>	
				<div class="form_input">
					<div class="forms_items">
						<div class="form_item">
							<p>Ваше имя</p>
						<input type="text" class=input_name name="name">
						</div>
						<div class="form_item">
							<p>Электронная почта</p>
							<input type="email" class=input_email name="email">
						</div>
						<div class="form_item">
							<p>Контактный телефон</p>
							<input type="tel" class=input_tel name="tel">
						</div>
					</div>
					<div class="form_message">
						<p>Ваше сообщение</p>
						<textarea name="message" id="" cols="30" rows="10"></textarea>		
						<div class="block_btn">
							<input type="submit" class= btn_send  value="Отправить">
							<input type="submit" class= btn_del value="Удалить Email">

						</div>
					</div>
				</div>
			</form>
			
			
		</main>
		<?php require_once 'footer.php';  ?>
	</div>
</body>
</html>			



		