<?php

declare(strict_types=1);

/*
 * Contao Cleverreach Bundle
 *
 * @copyright  Copyright (c) 2008-2022, 47GradNord - Agentur für Internetlösungen
 * @author     47GradNord - Agentur für Internetlösungen <info@47gradnord.de>
 */

namespace SgnDev\ContaoCleverreachBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use SgnDev\ContaoCleverreachBundle\ContaoCleverreachBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoCleverreachBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
