<?php

namespace Slvler\Covalent\Exception;

use InvalidArgumentException;

class MissingApiKey extends InvalidArgumentException
{
    public static function create(): self
    {
        return new self(
            'The Covalenthq API Key is missing. Please publish the [covalent.php] configuration file and set the [api_key].'
        );
    }
}
