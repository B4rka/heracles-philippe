<?php

/* Fighter class definition */
class Fighter 
{
    public const MAX_LIFE = 100;

    public string $name;
    public int $strength;
    public int $dexterity;
    public int $life = self::MAX_LIFE;
    public int $victories = 0;

    public function __construct(string $name, int $strength, int $dexterity)
    {
        $this->name = $name;
        $this->strength=$strength;
        $this->dexterity=$dexterity;
    }

    function fight(Fighter $fighter)
    {
        $attack = rand(1, $this->strength);
        $defense = $attack - $fighter->dexterity;
        if ($defense < 0){
            $defense = 0;
        }
        $fighter->life = $fighter->life - $defense;
        return $this->name. ' atk '.$fighter->name .'. '.$fighter->name. ' : '. $fighter->life;
    }

    function isAlive(): bool
    {
        if ($this->life > 0) {
            return true;
        } else {
            return false;
        }

    }
}