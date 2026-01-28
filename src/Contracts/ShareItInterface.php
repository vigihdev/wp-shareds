<?php

declare(strict_types=1);

namespace Vigihdev\WpShareds\Contracts;

interface ShareItInterface
{
    public function getName(): string;
    public function getIconUrl(): string;
    public function getShareUrl(): string;
}
