<?php
// cli-config.php
require_once "controllers/EntityManager.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
