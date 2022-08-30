<?php

declare(strict_types=1);

namespace Adedaramola\Sendchamp\Concerns;

use Adedaramola\Sendchamp\Resources\Otp;
use Adedaramola\Sendchamp\Resources\Sms;
use Adedaramola\Sendchamp\Resources\Wallet;

trait HasApiResources
{
    public function sms(): Sms
    {
        return new Sms($this);
    }

    public function wallet(): Wallet
    {
        return new Wallet($this);
    }

    public function otp(): Otp
    {
        return new Otp($this);
    }
}
