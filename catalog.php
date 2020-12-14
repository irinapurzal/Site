<?php
/*Шаблон каталога*/
	require_once 'php/connectionDB/connection.php';	// подключаемся к серверу
?>
<section class="content_catalog">
	<h2 class="catalog_title">Каталог изделий</h2>
	<div class="catalog_items">
	<?php
	    if ($categ !='')
	 		$query = "SELECT * FROM `tovars` WHERE categoriya='$categ'";
	 	else $query = "SELECT * FROM `tovars`";
 		$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
		$img_str1="";
		if($result)
		{
		    $kolvorows = mysqli_num_rows($result); // количество полученных строк из запроса
		     for ($i = 0; $i < $kolvorows; ++$i) {
		     	//выводим каждую строку из запроса, но с заданного поля
		    	$row = mysqli_fetch_assoc($result);
	?>	    	<div class="catalog_item">
					<p  class="catalog_name">
						<?php print_r($row['name']); ?>
					</p>
					<!-- <p  class="catalog_price">Цена:  <?php print_r($row['price']); ?>  </p> -->
					
					<?php 
							$directory="../img/кованые решетки/ворота/clear/";
							$file=$row['img'];
							
							echo '<figure class="catalog_imgtovar">
				                <img src="'.$directory.'/'.$file.'" class="pimg" title="'.$file.'" />
				            </figure>';
					 ?>
					 
					<p  class="catalog_price">Цена:  <?php print_r($row['price']); ?>  </p>	
					<button class="catalog_btndetales" >Подробнее</button>
					<button class="catalog_btnbuy">Купить</button>
				</div>
	<?php
	 $img_str1=""; $path="";   
		    } 
		}	
	?>
	</div>
</section>
<?php     
// закрываем подключение
    mysqli_close($link);
?>
		
