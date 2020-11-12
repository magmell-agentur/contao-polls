<?php

namespace Magmell\Contao\Polls\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Magmell\Contao\Polls\ContaoPollsBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoPollsBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
        ];
    }
}
