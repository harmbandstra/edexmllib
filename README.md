# Edexml library

PHP Library for validating and importing [Edexml](https://www.edustandaard.nl/standaarden/afspraken/afspraak/edexml/2.0/) files.

## Installation

Install with composer:

`$ composer require harmbandstra/edexmllib`

## Usage

```php
    $xml = file_get_contents('path_to_file');
    try {
        $edex = EdexmlFactory::load($xml);
    } catch (ValidationException $exception) {
        // Handle exception
    }

    foreach ($edex->getGroepen()->getGroep() as $groep) {
        echo $groep->getNaam();
    }

    foreach ($edex->getLeerlingen() as $leerling) {
        echo $leerling->getGebruikersnaam();
    }
```

# Development

The library uses [xsd2php](https://github.com/goetas-webservices/xsd2php) for creating [JMS Serializer](http://jmsyst.com/libs/serializer) definition files. These files are used to deserialize the XML into bite-sized PHP objects.

## Generate classes

To generate new classed and JMS Serializer configuration based on the XSD files, run: 

`php vendor/bin/xsd2php convert config.yml src/Resources/xsd/*.xsd`

This is only needed when the specification changes.
