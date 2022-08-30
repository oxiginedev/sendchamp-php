<?php

declare(strict_types=1);

namespace Adedaramola\Sendchamp\Resources;

final class Sms extends Resource
{
    public function send(array $payload)
    {
        $response = $this->client->post('sms/send', $payload);

        $this->throwExceptionOnFailure($response);

        return json_decode((string) $response->getBody());
    }

    public function createSenderId(array $payload)
    {
        $response = $this->client->post('sms/crete-sender-id', $payload);

        $this->throwExceptionOnFailure($response);

        return json_decode((string) $response->getBody());
    }

    public function getDeliveryReport(string $sms_uid)
    {
        $response = $this->client->get('sms/status/' . $sms_uid);

        $this->throwExceptionOnFailure($response);

        return json_decode((string) $response->getBody());
    }

    public function getBulkDeliveryReport(string $bulk_sms_uid)
    {
        $response = $this->client->get('sms/bulk-sms-status/' . $bulk_sms_uid);

        $this->throwExceptionOnFailure($response);

        return json_decode((string) $response->getBody());
    }
}
