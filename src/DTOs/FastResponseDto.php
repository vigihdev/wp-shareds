<?php

declare(strict_types=1);

namespace Vigihdev\WpShareds\DTOs;

use Vigihdev\WpShareds\Contracts\FastResponseInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;

final class FastResponseDto implements FastResponseInterface
{
    public function __construct(
        private readonly string $fastValue,
        private readonly string $fastType,
        private readonly string $iconUrl,
        private readonly string $actionUrl,
    ) {}

    public function getFastValue(): string
    {
        return $this->fastValue;
    }

    public function getFastType(): string
    {
        return $this->fastType;
    }

    public function getIconUrl(): string
    {
        return $this->iconUrl;
    }

    public function getActionUrl(): string
    {
        return $this->actionUrl;
    }
}
