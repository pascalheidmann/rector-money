<?php

declare(strict_types=1);

use Codito\Rector\Money\Rule\MultiplyAndDivideByStringRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(__DIR__ . '/../../../../config/config.php');

    $services = $containerConfigurator->services();

    $services->set(MultiplyAndDivideByStringRector::class)
        ->configure([
            MultiplyAndDivideByStringRector::PRECISION => 5,
        ]);
};
