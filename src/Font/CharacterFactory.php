<?php

namespace Study\Design\Font;

class CharacterFactory
{
    /**
     * @var array<Character>
     */
    private static array $character = [];
    
    public static function getCharacter(string $symbol): Character
    {
        if (!isset(self::$character[$symbol])) {
            echo "Primeira instancia. <br/>";
            self::$character[$symbol] = new Letter($symbol);
        }
        
        return self::$character[$symbol];
    }
}