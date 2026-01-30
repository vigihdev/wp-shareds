<?php

declare(strict_types=1);

namespace Vigihdev\WpShareds\DTOs;

use Vigihdev\WpShareds\Contracts\QuestionAnswerInterface;

final class QuestionAnswerDto implements QuestionAnswerInterface
{

    public function __construct(
        private readonly string $question,
        private readonly array $answers
    ) {}

    public function getAnswers(): array
    {
        return $this->answers;
    }

    public function getQuestion(): string
    {
        return $this->question;
    }
}
