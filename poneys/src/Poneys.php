<?php
/**
 * Gestion de poneys
 */
class Poneys
{
    private $count = 8;

    /**
     * Retourne le nombre de poneys
     *
     * @return void
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Retire un poney du champ
     *
     * @param int $number Nombre de poneys à retirer
     *
     * @return void
     */
    public function removePoneyFromField(int $number)
    {
	if($this->count - $number < 0){ throw new Exception("OUPS total négatif"); }
        $this->count -= $number;
    }

    /**
     * Retourne les noms des poneys
     *
     * @return array
     */
    public function getNames()
    {

    }

    public function addPoneyToField(int $number)
    {
	$this->count += $number;
    }

    public function fieldHasSpace()
    {
	if($this->count > 15){ return False; }
	else{ return True; }
    }

    public function setCount(int $number)
    {
	$this->count = $number;
    }
}


?>
