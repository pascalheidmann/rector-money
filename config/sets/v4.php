<?php

declare(strict_types=1);

use Codito\Rector\Money\Rule\CurrencyAvailableWithinToCurrenciesContainsRector;
use Codito\Rector\Money\Rule\MultiplyAndDivideByStringRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(CurrencyAvailableWithinToCurrenciesContainsRector::class);
    $services->set(MultiplyAndDivideByStringRector::class);
};
