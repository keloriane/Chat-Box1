<?php

$post =" ";
if (isset($_POST["page"])) {
    $post = addslashes($_POST["page"]);
$get ="";
if (isset($_GET["page"])) {
    $get = addslashes($_GET["page"]);
}

// $get = explode("/", $_SERVER["REQUEST_URI"]);
// $page = $get != "" ? $get : "presentation";
$view = "./view/" . $get . ".php";
$content = "";

switch ($get) {
    case '404': echo $content=$view; break;
    case 'inscription': $content="./view/inscription.php"; break;
    case 'login': $content="./model/log-in.php";break;



}

/*if (file_exists($view)) {
    $content = $view;
} else {
    $content = "./views/error404.php";
}*/

?>