<?php

declare(strict_types=1);

namespace Vigihdev\WpShareds\Contracts;

interface WhatsappCollapseInterface
{


    public function getTitle(): string;
    /**
     *
     * @return string
     */
    public function getDescription(): string;

    /**
     *
     * @return WhatsappSendInterface[]
     */
    public function getItems(): array;
}
