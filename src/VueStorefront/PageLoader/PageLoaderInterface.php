<?php declare(strict_types=1);

namespace SwagVueStorefront\VueStorefront\PageLoader;

use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Symfony\Component\HttpFoundation\Request;

interface PageLoaderInterface
{
    public function supports(Request $request): bool;

    public function load(Request $request, SalesChannelContext $context);
}
