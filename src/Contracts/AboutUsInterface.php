<?php

declare(strict_types=1);

namespace Vigihdev\WpShareds\Contracts;

interface AboutUsInterface
{
    public function getLogoUrl(): string;
    public function getDescription(): string;
}
