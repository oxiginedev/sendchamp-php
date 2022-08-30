<?php

declare(strict_types=1);

namespace Adedaramola\Sendchamp;

use Adedaramola\Sendchamp\Concerns\BuildRequests;
use Adedaramola\Sendchamp\Concerns\HasApiResources;
use InvalidArgumentException;

final class Sendchamp
{
    use BuildRequests;
    use HasApiResources;

    public function __construct(
        private string $publicKey,
        private string $mode = 'sandbox'
    ) {
        if (empty($publicKey) || !is_string($publicKey)) {
            throw new InvalidArgumentException(
                'Please provide a valid API public key'
            );
        }
    }

    private function url(): string
    {
        $mode = $this->mode;

        return match ($mode) {
            'sandbox' => 'https://sandbox-api.sendchamp.com/api/v1/',
            'live' => 'https://api.sendchamp.com/api/v1/'
        };
    }
}
