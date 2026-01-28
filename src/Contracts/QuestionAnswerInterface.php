<?php

declare(strict_types=1);

namespace Vigihdev\WpShareds\Contracts;

interface QuestionAnswerInterface
{
    public function getQuestion(): string;
    public function getAnswers(): array;
}
