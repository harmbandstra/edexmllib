<?php

namespace Edexml;

use Edexml\Exception\LoadXmlException;
use Edexml\Exception\ValidationException;
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

    const TAG_NAME_TOEVOEGINGEN = 'toevoegingen';

    /** @var Serializer */
    private static $serializer;

    private function __construct()
    {
    }

    /**
     * @param string $xml
     * @param bool $strict
     *
     * @return EDEX
     */
    public static function load($xml, $strict = true)
    {
        if (!self::$serializer instanceof Serializer) {
            self::initSerializer();
        }

        if ($strict) {
            self::validate($xml);
        }

        /** @var EDEX $object */
        $object = self::$serializer->deserialize($xml, 'Edexml\Types\EDEX', 'xml');

        return $object;
    }

    /**
     * @param string $xml
     *
     * @throws LoadXmlException|ValidationException
     */
    public static function validate($xml)
    {
        $dom = self::createDomDocumentFromXml($xml);

        libxml_use_internal_errors(true);
        if (!$dom->schemaValidate(self::SCHEMA)) {
            $exception = new ValidationException();
            $errors = libxml_get_errors();
            $exception->setErrors($errors);
            libxml_clear_errors();

            throw $exception;
        }
    }

    /**
     * Some suppliers do not add a proper XSD URI for a custom <blok> element under <toevoegingen>. This will cause the
     * validation to fail.
     *
     * If you do not need the data contained within this element, you can preprocess the XML data with this method.
     * All <toevoegingen> elements will be stripped from the XML.
     *
     * @param string $xml
     *
     * @return string
     *
     * @throws LoadXmlException|\InvalidArgumentException
     */
    public static function stripToevoegingen($xml)
    {
        $dom = self::createDomDocumentFromXml($xml);
        $domNodeList = $dom->getElementsByTagName(self::TAG_NAME_TOEVOEGINGEN);

        $elementsToRemove = [];
        foreach ($domNodeList as $domElement) {
            $elementsToRemove[] = $domElement;
        }

        foreach ($elementsToRemove as $domElement) {
            $domElement->parentNode->removeChild($domElement);
        }

        $result = $dom->saveXML();
        if ($result === false) {
            throw new \InvalidArgumentException('An error occurred while stripping elements.');
        }

        return $result;
    }

    /**
     * @param string $xml
     *
     * @return \DOMDocument
     *
     * @throws LoadXmlException
     */
    private static function createDomDocumentFromXml($xml)
    {
        libxml_use_internal_errors(true);

        $dom = new \DOMDocument();
        $dom->loadXml($xml);
        if (!$dom->loadXml($xml)) {
            $exception = new LoadXmlException();
            $errors = libxml_get_errors();
            $exception->setErrors($errors);
            libxml_clear_errors();

            throw $exception;
        }

        return $dom;
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
