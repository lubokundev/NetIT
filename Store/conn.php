
<link rel="stylesheet" href="style/conn.css" type="text/css">
<link rel="stylesheet" href="style/table.css" type="text/css">
<?php


require_once('db.php');
$host = 'localhost';
$database = 'store';
$username = 'root';
$password = '';

try {
	$connect = new PDO("mysql:host=$host;dbname=$database", $username,$password);

	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$query = "SELECT * FROM add_product";

	$data = $connect->query($query);
	

	echo '
	<table class="container" style="width:1125px;>
	<tr>
		<th colspan="7"><h2>Store product for PC</h2></th>
	</tr>
		<tr>
		<th style="width:40px;">№</th>
		<th>Име</th>
		<th>Цена</th>
				
		<th>Описание</th>
		<th style="width:70px";>Купи</th> 
	</tr>';
	
	foreach($data as $row)
	{

		echo '
		<tr>	
				<td align="center">'.$row["id"].'</td>
				<td>'.$row["product_name"].'</td>
				<td align="center">'.$row["price"].'</td>
								
				<td>'.$row["product_description"].'</td>
				<td style=text-align:center;><a href=" https://www.google.com" target="_blank">Click</a></td> 

			</tr>';
		
	}
	echo '</table>';
}
catch (PDOException $error)
{
	$error->getMessage();
}





?>




