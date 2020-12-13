<?php
// require_once('song.php');
//$conn = new mysqli('localhost', 'root', '', 'auto');
$host = 'localhost';
$db = 'store';
$user = 'root';
$pass = '';
$options = [
    PDO::ATTR_PERSISTENT => true,
];
$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass, $options);


function prepareArrayParam(string $label, array $values) {
    $query = [];
    $params = [];
    $n = count($values);
    for ($i = 0; $i < $n; $i++) {
        $query []= ":$label$i";
        $params[$label.$i] = $values[$i];
    }

    return [
        'query' => implode(",", $query),
        'params' => $params,
    ];
}




if (!isset($_SESSION)) {
    session_start();
}


if (isset($_SESSION['userId'])) {



?>
<link rel="stylesheet" href="style/colorDB.css" type="text/css">
<div class="color2" style="float: right;"> <a class="Colorhotpink" href="logout.php">Logout</a></div>
<?php
}

?>

