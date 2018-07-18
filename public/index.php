<?php
require '../src/Suggestotron/Autoloader.php';

$data = new \Suggestotron\TopicData();

$topics = $data->getAllTopics();

$template = new \Suggestotron\Template("../views/base.phtml");
$template->render("../views/index/index.phtml", ['topics' => $topics]);

?>