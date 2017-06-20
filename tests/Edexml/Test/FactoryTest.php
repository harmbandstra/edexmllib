<?php

namespace Edexml\Test;

use Edexml\EdexmlFactory;
use Edexml\Exception\ValidationException;
use Edexml\Types\EDEX;
use PHPUnit\Framework\TestCase;

class FactoryTest extends TestCase
{
    public function testLoadValidXml()
    {
        $edex = EdexmlFactory::load(file_get_contents(__DIR__ . '/../Resources/EDEXML.Voorbeeld.2.0.xml'));

        $this->assertInstanceOf(EDEX::class, $edex);
        $this->assertSame('2014-2015', $edex->getSchool()->getSchooljaar());
        $this->assertInstanceOf(\DateTime::class, $edex->getSchool()->getPeildatum());
        $this->assertSame('2014-10-01', $edex->getSchool()->getPeildatum()->format('Y-m-d'));

        $this->assertInstanceOf(\DateTime::class, $edex->getSchool()->getAanmaakdatum());
        $this->assertSame('2014-11-25T14:33:33',
            $edex->getSchool()->getAanmaakdatum()->format(EdexmlFactory::DATE_TIME_FORMAT));
    }

    public function testIfInvalidSchoolElementThrowsException()
    {
        $this->expectException(ValidationException::class);
        EdexmlFactory::load(file_get_contents(__DIR__ . '/../Resources/EDEXML.invalid_1.xml'));
    }
}
