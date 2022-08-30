<?php

declare(strict_types=1);

namespace Adedaramola\Sendchamp\Exceptions;


class SendchampException extends \Exception
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}
