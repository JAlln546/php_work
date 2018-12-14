<?php
class Dice
{
    protected $numberOfSides = 6;
    private $currentValue;
    protected $diceMap = [
        1 => [
            [0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0],
            [0, 0, 1, 0, 0],
            [0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0]
        ],
        2 => [
            [0, 0, 0, 0, 0],
            [0, 1, 0, 0, 0],
            [0, 0, 0, 0, 0],
            [0, 0, 0, 1, 0],
            [0, 0, 0, 0, 0]
        ],
        3 => [
            [0, 0, 0, 0, 1],
            [0, 0, 0, 0, 0],
            [0, 0, 1, 0, 0],
            [0, 0, 0, 0, 0],
            [1, 0, 0, 0, 0]
        ],
        4 => [
            [0, 0, 0, 0, 0],
            [0, 1, 0, 1, 0],
            [0, 0, 0, 0, 0],
            [0, 1, 0, 1, 0],
            [0, 0, 0, 0, 0]
        ],
        5 => [
            [0, 0, 0, 0, 0],
            [0, 1, 0, 1, 0],
            [0, 0, 1, 0, 0],
            [0, 1, 0, 1, 0],
            [0, 0, 0, 0, 0]
        ],
        6 => [
            [0, 1, 0, 1, 0],
            [0, 0, 0, 0, 0],
            [0, 1, 0, 1, 0],
            [0, 0, 0, 0, 0],
            [0, 1, 0, 1, 0]
        ]
    ];
    
    public function __construct() {
        $this->roll();
    }
    
    public function getCurrentValue() {
        return $this->currentValue;
    }
    
    public function setCurrentValue($newValue) {
        if (is_numeric($newValue)) {
            if ($newValue >= 1 && $newValue <= $this->numberOfSides) {
                $this->currentValue = $newValue;
            }
        }
    }
    
    public function roll() {
        $this->setCurrentValue(random_int(1, $this->numberOfSides));
    }
    
    public function draw() {
        echo "<table><tbody>";
        $map = $this->diceMap[$this->currentValue];
        
        foreach ($map as $rowMap) {
            echo "<tr>";
            foreach ($rowMap as $col) {
                if ($col == 1) {
                    echo "<td class=\"fill\"></td>";
                } else {
                    echo "<td></td>";
                }
            }
            echo "</tr>";
        }
        
        echo "</tbody></table>";
    }
}
