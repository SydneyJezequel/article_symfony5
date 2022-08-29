<?php

use App\Kernel;

// On fait un autoload
require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

// On appelle une fonction qui va construire mon Kernel (coeur de l'application) : Gère le Controller.
return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
