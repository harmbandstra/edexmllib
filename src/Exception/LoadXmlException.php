<?php

namespace Edexml\Exception;

class LoadXmlException extends BaseXmlException
{
    /**
     * @param string $message
     * @param int $code
     * @param \Throwable|null $previous
     */
    public function __construct($message = "Unable to load supplied XML.", $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
