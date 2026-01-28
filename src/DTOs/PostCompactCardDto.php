<?php

declare(strict_types=1);

namespace Vigihdev\WpShareds\DTOs;

use Vigihdev\WpShareds\Contracts\PostCompactCardInterface;


final class PostCompactCardDto implements PostCompactCardInterface
{
    public function __construct(
        private readonly string $title,
        private readonly string $imageUrl,
        private readonly string $actionUrl,
        private readonly string $snippet,
        private readonly string $author,
        private readonly string $kategori,
        private readonly string $publishedDate,
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

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getKategori(): string
    {
        return $this->kategori;
    }

    public function getPublishedDate(): string
    {
        return $this->publishedDate;
    }
}
