<?php

declare(strict_types=1);

namespace Vigihdev\WpShareds\DTOs;

use Vigihdev\WpShareds\Contracts\PostCardInterface;


final class PostCardDto implements PostCardInterface
{
    public function __construct(
        private readonly string $title,
        private readonly string $imageUrl,
        private readonly string $actionUrl,
        private readonly string $snippet
    ) {}

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function getActionUrl(): string
    {
        return $this->actionUrl;
    }

    public function getSnippet(): string
    {
        return $this->snippet;
    }
}
