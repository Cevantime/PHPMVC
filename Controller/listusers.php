<?php

$pdo = \Model\PDO\PDOSingleton::getPDO();

$userDAO = new \Model\DAO\UserDAO($pdo);

$users = $userDAO->findMany();

include 'View/listusers_view.php';

