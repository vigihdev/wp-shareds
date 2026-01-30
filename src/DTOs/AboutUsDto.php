<?php

declare(strict_types=1);

namespace Vigihdev\WpShareds\DTOs;

use Vigihdev\WpShareds\Contracts\AboutUsInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;

final class AboutUsDto implements AboutUsInterface
{
    public function __construct(
        private readonly string $logoUrl,
        private readonly string $description,
    ) {}

    public function getLogoUrl(): string
    {
        return $this->logoUrl;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
