<?php
	$host = 'localhost'; // адрес сервера 
	$database = 'magazinkovka'; // имя базы данных
	$user = 'root'; // имя пользователя
	$password = 'root'; // пароль

	$link = mysqli_connect($host, $user, $password, $database) 
		    or die("Ошибка ПОДКЛЮЧЕНИЯ" . mysqli_error($link));
?>