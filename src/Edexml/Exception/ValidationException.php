<?php

namespace Edexml\Exception;

use Throwable;

class ValidationException extends \RuntimeException
{
    /**
     * @var \libXMLError[]
     */
    private $errors;

    /**
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "Validation failed.", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    /**
     * @param $errors
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
    }

    /**
     * @return \libXMLError[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @return array
     */
    public function getErrorsAsString()
    {
        $errors = [];
        foreach ($this->errors as $error) {
            switch ($error->level) {
                case LIBXML_ERR_WARNING:
                    $level = 'Warning';
                    break;
                case LIBXML_ERR_ERROR:
                    $level = 'Error';
                    break;
                case LIBXML_ERR_FATAL:
                    $level = 'Fatal error';
                    break;
                default:
                    $level = 'Unknown error';
                    break;
            }

            $errors[] = sprintf('%s %d: %s [line %d]', $level, $error->code, $error->message, $error->line);
        }

        return $errors;
    }
}
