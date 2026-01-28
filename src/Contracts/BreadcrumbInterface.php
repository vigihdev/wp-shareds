<?php

declare(strict_types=1);

namespace Vigihdev\WpShareds\Contracts;

interface BreadcrumbInterface
{
    public function getLabel(): string;
    public function getTitle(): string;
    public function getUrl(): ?string;
}
