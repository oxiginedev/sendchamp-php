<?php

declare(strict_types=1);

namespace Adedaramola\Sendchamp\Resources;

final class Wallet extends Resource
{
    public function getBalance()
    {
        $response = $this->client->get('wallet/wallet_balance');

        $this->throwExceptionOnFailure($response);

        return json_decode((string) $response->getBody());
    }
}
