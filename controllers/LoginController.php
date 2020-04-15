<?php
require_once __DIR__ . "\\EntityManager.php";

if (!isset($_POST['username']) || !isset($_POST['password'])) {
    echo "Incorrect login provided";
}

$agentRepository = $entityManager->getRepository(Agents::class);
$agent = $entityManager->getRepository(Agents::class)->findOneBy(['pseudoA' => $_POST['username']]);
if (isset($agent) &&  password_verify($_POST['password'], $agent->getMotDePasseA())) {
    $_SESSION["user"] = $agent;
    header("Location: ../index.php?page_id=interface");
} else {
    echo "Incorrect login provided";
}
