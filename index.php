<?php

include_once('config/database.php'); //connexion à la base de donnée


$query = $db->query("CREATE SEQUENCE event_seq;
CREATE TABLE event(
id int primary key default nextval ('event_seq'),
title varchar(255),
content text,
id_user int
);");

$query = $db->query("SELECT * FROM event");
$data = $query->fetchAll(PDO::FETCH_OBJ);

// couroussel event display
$query = $db->query("SELECT * FROM event");
$data_c = $query->fetchAll();
// $data_carrousel = array_rand($data_c, 3);
// var_dump($data_c[$data_carrousel[0]]);
// die();

include_once('template/index.view.php');

// la page d'acceuil
