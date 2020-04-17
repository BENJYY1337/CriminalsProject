<?php

require_once __DIR__ . "\\EntityManager.php";

use benjamin\Agents;

// Afficher la liste des agents
$agentRepository = $entityManager->getRepository(Agents::class);
$agents = $agentRepository->findAll();

foreach ($agents as $agent) {
    var_dump($agent);
}

// Ajouter un agent
/*$agent = new Agents();
$agent->setPseudoA("tmlp");
$agent->setMotDePasseA(password_hash("tmlp1", PASSWORD_BCRYPT));
$agent->setNiveauAccreditationA(3);

// tell Doctrine you want to (eventually) save the Product (no queries yet)
$entityManager->persist($agent);
// actually executes the queries (i.e. the INSERT query)
$entityManager->flush();*/

// Modifier un agent
$id = 4;
$agent = $entityManager->getRepository(Agents::class)->find($id);
if (!$agent) {
    throw $this->createNotFoundException(
        'No agent found for this id ' . $id
    );
}
$agent->setPseudoA("tplbg");
$entityManager->flush();
var_dump($agent);
