<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Poneys.php';

/**
 * Classe de test de gestion de poneys
 */
class PoneysTest extends TestCase
{
    public function setUp()
    {
        $this->poneys = new Poneys();
        $this->poneys->setCount(12);
    }

    public function tearDown()
    {
	$this->poneys = NULL;
    }

    /**
     * Undocumented function
     *
     * @dataProvider provider
     *
     * @return void
     */
    public function testRemovePoneyFromField(int $number, int $expectedNumber)
    {
        // Setup
        $Poneys = new Poneys();

        // Action
        $Poneys->removePoneyFromField($number);

        // Assert
        $this->assertEquals($expectedNumber, $Poneys->getCount());
     }

    /**
     *
     */
    public function testAddPoneyToField()
    {
        // Setup
        $Poneys = new Poneys();

        // Action
        $Poneys->addPoneyToField(3);

        // Assert
        $this->assertEquals(11, $Poneys->getCount());

    }


    /**
     *
     */
     public function provider()
     {
       return [
           [3, 5],
           [0, 8],
           [1, 7]
       ];
     }


     public function testCheckExceptionRemovePoneyFromField()
     {
        // Setup
        $Poneys = new Poneys();

        // Assert
        $this->expectException(Exception::class);

        // Action
        $Poneys->removePoneyFromField($GLOBALS['tailleChamps']);
     }

     public function testMockerGetNames()
     {

	$names = [ 'Joe', 'William', 'Jack', 'Averell' ];

	$this->poneys = $this->getMockBuilder('Poneys')->getMock();
	$this->poneys
	     ->method('getNames')
	     ->willReturn($names);

	$this->assertEquals($names, $this->poneys->getNames());
     }

     public function testFieldhasSpace()
     {
	$Poneys = new Poneys();

	$this->assertTrue($Poneys->fieldHasSpace());

	$Poneys->addPoneyToField(15);

	$this->assertFalse($Poneys->fieldHasSpace());

     }

}


?>
