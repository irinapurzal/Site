<?php
	if(isset($_POST['name'])) 
		$name = $_POST['name'];
	if (isset($_POST['email'])) 
		$email = $_POST['email'];
	if (isset($_POST['tel'])) 
		$tel = $_POST['tel'];

	echo "Ваше имя: $name  <br> Ваш Email: $email <br>";
	 
	require_once 'php/connectionDB/connection.php';	// подключаемся к серверу
	
	$query = "INSERT INTO users (name, email, tel) VALUES ('$name', '$email', '$tel')";//вставка полей в таблицу
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
	
	$query2 = "SELECT * FROM users WHERE email = '$email' "; //выбираем это поле из таблицы
	$result2 = mysqli_query($link, $query2) or die("Ошибка " . mysqli_error($link)); 
	if($result2) {
		$row = mysqli_fetch_assoc($result2);
		echo "Ваш ID: $row[id]";
		echo "Дату нужно добавить в таблицу сообщений";
		echo "Валидация номена телефона";
	}

	// закрываем подключение
	mysqli_close($link);
?>

<?php

function Isert_DATA(){
	if(isset($_POST['name'])) 
		$name = $_POST['name'];
	if (isset($_POST['email'])) 
		$email = $_POST['email'];
	if (isset($_POST['tel'])) 
		$tel = $_POST['tel'];
	require_once 'php/connectionDB/connection.php';	// подключаемся к серверу
	
	$query = "INSERT INTO users (name, email, tel) VALUES ('$name', '$email', '$tel')";//вставка полей в таблицу
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

	mysqli_close($link);
}
?>

<?php
//Вывод товаров по категории
function Output_Data($categ){
    require_once 'php/connectionDB/connection.php';	// подключаемся к серверу
	
	$query = "SELECT * FROM `tovars` WHERE categoriya='$categ'";
 		$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
		$img_str1="";
		if($result)
		{
		    $kolvorows = mysqli_num_rows($result); // количество полученных строк из запроса
		     for ($i = 0; $i < $kolvorows; ++$i) {
		     	//выводим каждую строку из запроса, но с заданного поля
		    	$row = mysqli_fetch_assoc($result);
	?>	    	<div class="catalog_item">
					<p  class="catalog_name">Ворота:</p>
					<!-- <?php print_r($row['name']); ?> -->
					<!-- <p  class="catalog_price">Цена:  <?php print_r($row['price']); ?>  </p> -->
					
					<?php 
							$directory="../img/кованые решетки/ворота/clear/";
							$file=$row['img'];
							
							echo '<figure class="catalog_imgtovar">
				                <img src="'.$directory.'/'.$file.'" class="pimg" title="'.$file.'" />
				            </figure>';
					 ?>
					 
					<p  class="catalog_price">Цена:  <?php print_r($row['price']); ?>  </p>	
	<?php				
	mysqli_close($link);
}
?>

<?php
//Удаление записей из таблицы на шаблону 
function Delete_Data(){
	require_once 'php/connectionDB/connection.php';	// подключаемся к серверу
	
	$query = "DELETE FROM users WHERE email NOT LIKE '%@%'";//удалить записи с ошибочным email-ом.
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

	mysqli_close($link);
}
?> 
