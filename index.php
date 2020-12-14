<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<title>Ворота, калитки, забор, кованые изделия, беседки, ковка металла</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/catalog.css">
	<!-- <link rel="stylesheet" href="css/grid-shablon.css"> -->
	<!-- <script src="js/main.js" defer></script> -->
</head>
<body>
	<div class="wrapper">
		<!--Оболочка grid-контейнер-->
		<?php require_once 'header.php';  ?>
        <!--Контент grid-элемент+ grid-контейнер-->
		<main class="main">
			<aside class="sidebar">
			 	<?php require_once 'sidebarmenu.php';  ?>
			</aside>
			<section class="content">
				<h1 class="content_title">Мастерская художественной ковки</h1>
				<?php  require_once 'galary.php';  ?>
				<?php  
					$categ ='vor';
					 require_once 'catalog.php' 
				?>
			</section>
		</main>
		<?php require_once 'footer.php';  ?>
	</div>
</body>
</html>			
 
