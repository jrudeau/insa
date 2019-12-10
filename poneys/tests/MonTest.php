<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Poneys.php';

/**
 * Classe de test de gestion de poneys
 */
class MonTest extends TestCase
{
    public function testZero()
    {
	$number = 8;
        $this->assertEquals(8, $number);
    }



}
?>
