<?php

declare(strict_types=1);

namespace Vigihdev\WpShareds\DTOs;

use Vigihdev\WpShareds\Contracts\WidgetTitleInterface;

final class WidgetTitleDto implements WidgetTitleInterface
{
    public function __construct(
        private readonly string $name,
        private readonly string $title,
    ) {}

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
