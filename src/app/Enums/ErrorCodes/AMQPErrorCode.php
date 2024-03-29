<?php

namespace App\Enums\ErrorCodes;

final class AMQPErrorCode extends Enum
{
    const ERR_WRONG_EXCHANGE_TYPE  = 'ERR_WRONG_EXCHANGE_TYPE';
    const ERR_MISSING_QUEUE_NAME   = 'ERR_MISSING_QUEUE_NAME';
    const ERR_INIT_FAILED          = 'ERR_INIT_FAILED';
    const ERR_EMPTY_PAYLOAD        = 'ERR_EMPTY_PAYLOAD';
}
