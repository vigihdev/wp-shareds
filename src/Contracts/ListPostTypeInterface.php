<?php

declare(strict_types=1);

namespace Vigihdev\WpShareds\Contracts;

interface ListPostTypeInterface
{
    public function getTitle(): string;

    public function getImageUrl(): string;

    public function getActionUrl(): string;

    public function getSnippet(): string;
}
