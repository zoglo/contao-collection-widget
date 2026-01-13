<?php

declare(strict_types=1);

namespace Zoglo\CollectionWidgetBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Zoglo\CollectionWidgetBundle\ZogloCollectionWidgetBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            (new BundleConfig(ZogloCollectionWidgetBundle::class))
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
