<?php

/**  
 * Faltaba incluir Config.php, o include poderia ir en Autoloader.php 
 * posiblemente teria mais sentido ali que aqui
 **/
require '../src/Suggestotron/Config.php'; 

require '../src/Suggestotron/Autoloader.php';

$data = new \Suggestotron\TopicData();

$topics = $data->getAllTopics();

$template = new \Suggestotron\Template("../views/base.phtml");
$template->render("../views/index/index.phtml", ['topics' => $topics]);

?>