<?php
session_start();
require_once "./EntityManager.php";

// $ficheCriminelList;
$agentRepository = $entityManager->getRepository(Agents::class);
$agents = $agentRepository->findAll();

foreach ($agents as $agent) {
    var_dump($agent);
}
