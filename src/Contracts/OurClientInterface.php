<?php

declare(strict_types=1);

namespace Vigihdev\WpShareds\Contracts;

interface OurClientInterface
{
    public function getName(): string;

    public function getImageUrl(): string;
}
