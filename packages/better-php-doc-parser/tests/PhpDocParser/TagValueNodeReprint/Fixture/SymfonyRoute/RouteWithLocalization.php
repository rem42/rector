<?php

declare(strict_types=1);

namespace Rector\BetterPhpDocParser\Tests\PhpDocParser\TagValueNodeReprint\Fixture\SymfonyRoute;

use Symfony\Component\Routing\Annotation\Route;

final class RouteWithLocalization
{
    /**
     * @Route({
     *     "en": "/about-us",
     *     "nl": "/over-ons"
     * }, name="about_us")
     */
    public function run()
    {
    }
}
