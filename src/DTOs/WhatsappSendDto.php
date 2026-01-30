<?php

declare(strict_types=1);

namespace Vigihdev\WpShareds\DTOs;

use Vigihdev\WpShareds\Contracts\WhatsappSendInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;

final class WhatsappSendDto implements WhatsappSendInterface
{

    public function __construct(
        private readonly string $imageUrl,
        private readonly string $contactNumber,
        private readonly string $username,
        private readonly string $message,
    ) {}

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function getContactNumber(): string
    {
        return $this->contactNumber;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
