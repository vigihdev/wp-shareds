<?php

declare(strict_types=1);

namespace Vigihdev\WpShareds\Contracts;

interface WidgetTitleInterface
{
    public function getTitle(): string;
    public function getName(): string;
}
