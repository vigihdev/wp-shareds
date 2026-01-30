<?php

declare(strict_types=1);

namespace Vigihdev\WpShareds\DTOs;

use Vigihdev\WpShareds\Contracts\BreadcrumbInterface;

final class BreadcrumbDto implements BreadcrumbInterface
{
    public function __construct(
        private readonly string $title,
        private readonly string $label,
        private readonly ?string $url,
    ) {}

    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function getLabel(): string
    {
        return $this->label;
    }
}
