<?php

declare(strict_types=1);

namespace Vigihdev\WpShareds\Contracts;

interface PostCompactCardInterface extends PostCardInterface
{
    public function getAuthor(): string;
    public function getPublishedDate(): string;
    public function getKategori(): string;
}
