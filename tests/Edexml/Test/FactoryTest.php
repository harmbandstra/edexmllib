<?php

namespace Edexml\Test;

use Edexml\EdexmlFactory;
use Edexml\Exception\ValidationException;
use Edexml\Types\EDEX;
use Edexml\Types\VestigingType;
use PHPUnit\Framework\TestCase;

class FactoryTest extends TestCase
{
    public function testLoadValidXml()
    {
        $edex = EdexmlFactory::load(file_get_contents(__DIR__ . '/../Resources/EDEXML.Voorbeeld.2.0.xml'));
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
    }

    public function testIfInvalidSchoolElementThrowsException()
    {
        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage('Validation failed.');
        EdexmlFactory::load(file_get_contents(__DIR__ . '/../Resources/EDEXML.invalid_1.xml'));
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
