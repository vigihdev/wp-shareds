<?php

declare(strict_types=1);

namespace Vigihdev\WpShareds\DTOs;

use Vigihdev\WpShareds\Contracts\ConnectWithUsInterface;


final class ConnectWithUsDto implements ConnectWithUsInterface
{


    public function __construct(
        private readonly string $name,
        private readonly string $iconUrl,
        private readonly string $actionUrl,
    ) {}

    public function getName(): string
    {
        return $this->name;
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
