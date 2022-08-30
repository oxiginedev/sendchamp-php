<?php

declare(strict_types=1);

namespace Adedaramola\Sendchamp\Resources;

use Adedaramola\Sendchamp\Exceptions\SendchampException;
use Adedaramola\Sendchamp\Sendchamp;

abstract class Resource
{
    public function __construct(protected Sendchamp $client)
    {
    }

    protected function throwExceptionOnFailure($response)
    {
        if ($response->getStatusCode() >= 400) {
            throw new SendchampException($response->getMessage());
        }
    }
}
