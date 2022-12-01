<?php

namespace Tests\Edexml\Test;

use Edexml\EdexmlFactory;
use Edexml\Exception\LoadXmlException;
use Edexml\Exception\ValidationException;
use Edexml\Types\EDEX;
use Edexml\Types\VestigingType;
use PHPUnit\Framework\TestCase;

class FactoryTest extends TestCase
{
    public function testLoadValidXml()
    {
        $edex = EdexmlFactory::load(file_get_contents(__DIR__ . '/../Resources/EDEXML.Voorbeeld.2.1.xml'));
        $this->assertInstanceOf(EDEX::class, $edex);

        /* School */
        $this->assertSame('2014-2015', $edex->getSchool()->getSchooljaar());
        $this->assertInstanceOf(\DateTime::class, $edex->getSchool()->getPeildatum());
        $this->assertSame('2014-10-01', $edex->getSchool()->getPeildatum()->format('Y-m-d'));
        $this->assertInstanceOf(\DateTime::class, $edex->getSchool()->getAanmaakdatum());
        $this->assertSame('2014-11-25T14:33:33', $edex->getSchool()->getAanmaakdatum()->format(EdexmlFactory::DATE_TIME_FORMAT));
        $this->assertSame('41323', $edex->getSchool()->getSchoolkey());

        /* Vestigingen */
        $this->assertEquals($this->getExpectedVestigingen(), $edex->getVestigingen());

        /* Leerlingen */
        $leerlingen = $edex->getLeerlingen();
        $this->assertSame('https://id.school/LL_123467890abcdefghijklmnopqrstuvwxzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^_-', $leerlingen[0]->getEckid());
        $this->assertNull($leerlingen[1]->getEckid());
    }

    public function testLoadInvalidXmlWithoutStrictCheck()
    {
        $edex = EdexmlFactory::load(file_get_contents(__DIR__ . '/../Resources/EDEXML.invalid_1.xml'), false);
        $this->assertInstanceOf(EDEX::class, $edex);
    }

    public function testIfInvalidSchoolElementThrowsException()
    {
        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage('Validation of XML failed.');
        EdexmlFactory::load(file_get_contents(__DIR__ . '/../Resources/EDEXML.invalid_1.xml'));
    }

    public function testItThrowsExceptionOnInvalidToevoegingen()
    {
        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage('Validation of XML failed.');
        EdexmlFactory::load(file_get_contents(__DIR__ . '/../Resources/EDEXML.invalid_toevoegingen.xml'));
    }

    public function testItPassesValidationWhenStrippingInvalidToevoegingen()
    {
        $edex = EdexmlFactory::load(
            EdexmlFactory::stripToevoegingen(
                file_get_contents(__DIR__ . '/../Resources/EDEXML.invalid_toevoegingen.xml')
            )
        );
        $this->assertInstanceOf(EDEX::class, $edex);
    }

    public function testItThrowsExceptionWhenStrippingInvalidXml()
    {
        $this->expectException(LoadXmlException::class);
        $this->expectExceptionMessage('Unable to load supplied XML.');
        EdexmlFactory::stripToevoegingen('This is not an XML');
    }

    public function testItThrowsExceptionWhenValidatingInvalidXml()
    {
        $this->expectException(LoadXmlException::class);
        $this->expectExceptionMessage('Unable to load supplied XML.');
        EdexmlFactory::validate('This is not an XML');
    }

    /**
     * @return array
     */
    private function getExpectedVestigingen()
    {
        $v1 = new VestigingType();
        $v1->setKey('VH');
        $v1->setNaam('Vestiging Huissen');

        $v2 = new VestigingType();
        $v2->setKey('VB');
        $v2->setNaam('Vestiging Bemmel');

        return [$v1, $v2];
    }
}
