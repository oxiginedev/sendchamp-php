<?php

declare(strict_types=1);

namespace Adedaramola\Sendchamp\Concerns;

use Exception;
use GuzzleHttp\Client;

trait BuildRequests
{
    public function get(string $uri, $query = null)
    {
        return $this->request('GET', $uri, ['query' => $query]);
    }

    public function post(string $uri, array $body = [])
    {
        return $this->request('POST', $uri, ['json' => $body]);
    }

    protected function client()
    {
        return new Client([
            'base_uri' => $this->url(),
            'timeout' => 5
        ]);
    }

    protected function request(string $method, string $uri, array $options = [])
    {
        return $this->client()->request($method, $uri, array_merge(
            $options,
            $this->withHeaders()
        ));
    }

    protected function withHeaders(): array
    {
        return [
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . $this->publicKey
            ]
        ];
    }
}
