<?php

declare(strict_types=1);

namespace Vigihdev\WpShareds\DTOs;

use Vigihdev\WpShareds\Contracts\ContactInfoInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;

final class ContactInfoDto implements ContactInfoInterface
{
    public function __construct(
        #[SerializedName('contact_value')]
        private readonly string $contactValue,
        #[SerializedName('contact_type')]
        private readonly string $contactType,
        #[SerializedName('icon_url')]
        private readonly string $iconUrl,
        #[SerializedName('action_url')]
        private readonly string $actionUrl,
    ) {}

    public function getContactValue(): string
    {
        return $this->contactValue;
    }

    public function getContactType(): string
    {
        return $this->contactType;
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
