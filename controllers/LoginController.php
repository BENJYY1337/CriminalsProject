<?php
session_start();
require_once "./EntityManager.php";

if (!isset($_POST['username']) || !isset($_POST['password'])) {
    echo "Incorrect login provided";
}

$agentRepository = $entityManager->getRepository(Agents::class);
$agent = $entityManager->getRepository(Agents::class)->findOneBy(['pseudoA' => $_POST['username']]);
if (password_verify($_POST['password'], $agent->getMotDePasseA())) {
    $_SESSION["user"] = $agent;
} else {
    echo "Incorrect login provided";
}

header("Location: ../index.php?page_id=interface");
