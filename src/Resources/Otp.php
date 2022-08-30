<?php

declare(strict_types=1);

namespace Adedaramola\Sendchamp\Resources;

final class Otp extends Resource
{
    public function send(array $payload)
    {
        $response = $this->client->post('verification/create', $payload);

        $this->throwExceptionOnFailure($response);

        return json_decode((string) $response->getBody());
    }

    public function confirm(string $reference, string $code)
    {
        $response = $this->client->post('verification/confirm', [
            'verification_reference' => $reference,
            'verification_code' => $code
        ]);

        $this->throwExceptionOnFailure($response);

        return json_decode((string) $response->getBody());
    }
}
