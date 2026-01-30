<?php

declare(strict_types=1);

namespace Vigihdev\WpShareds\DTOs;

use Vigihdev\WpShareds\Contracts\OurClientInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;

final class OurClientDto implements OurClientInterface
{

    public function __construct(
        private readonly string $name,
        private readonly string $imageUrl
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }
}
