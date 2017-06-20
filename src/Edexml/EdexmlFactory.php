<?php

namespace Edexml;

use Edexml\Types\EDEX;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

class EdexmlFactory
{
    const DATE_TIME_FORMAT = 'Y-m-d\TH:i:s';

    const SCHEMA = __DIR__ . '/Resources/xsd/EDEXML.structuur.xsd';
    const METADATA = __DIR__ . '/Resources/metadata';

    /** @var Serializer */
    private static $serializer;

    private function __construct()
    {
    }

    /**
     * @param string $xml
     *
     * @return EDEX
     */
    public static function load($xml)
    {
        if (!self::$serializer instanceof Serializer) {
            self::initSerializer();
        }

        self::validate($xml);

        /** @var EDEX $object */
        $object = self::$serializer->deserialize($xml, 'Edexml\Types\EDEX', 'xml');

        return $object;
    }

    public static function validate($xml)
    {
        libxml_use_internal_errors(true);

        $dom = new \DOMDocument();
        $dom->loadXml($xml);
        if (!$dom->schemaValidate(self::SCHEMA)) {
            $exception = new ValidationException();
            $errors = libxml_get_errors();
            $exception->setErrors($errors);
            libxml_clear_errors();

            throw $exception;
        }
    }

    private static function initSerializer()
    {
        $serializerBuilder = SerializerBuilder::create();
        $serializerBuilder->addMetadataDir(realpath(self::METADATA), 'Edexml\Types');
        $serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
            $serializerBuilder->addDefaultHandlers();
            $handler->registerSubscribingHandler(new BaseTypesHandler()); // XMLSchema List handling
            $handler->registerSubscribingHandler(new XmlSchemaDateHandler()); // XMLSchema date handling
        });

        self::$serializer = $serializerBuilder->build();
    }
}
