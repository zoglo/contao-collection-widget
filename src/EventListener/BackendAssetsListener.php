<?php

declare(strict_types=1);

namespace Zoglo\CollectionWidgetBundle\EventListener;

use Contao\CoreBundle\Routing\ScopeMatcher;
use Symfony\Component\Asset\Packages;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\HttpKernel\Event\RequestEvent;

#[AsEventListener]
class BackendAssetsListener
{
    public function __construct(
        private readonly ScopeMatcher $scopeMatcher,
        private readonly Packages $package,
    ) {
    }

    public function __invoke(RequestEvent $event): void
    {
        if ($this->scopeMatcher->isBackendMainRequest($event)) {
            $GLOBALS['TL_CSS'][] = $this->package->getUrl('collection-widget.css', 'zoglo_collection_widget');
        }
    }
}
