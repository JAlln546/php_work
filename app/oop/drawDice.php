<?php 

class Dice {
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
    
    public function getCurrectValue() {
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
        $this->setCurrentValue(random_int(1,$this->numberOfSides));
    }
    
    public function draw () {
        echo "<table><tbody>";
        $map = $this->diceMap[$this->currentValue];
        
        foreach($map as $rowMap) {
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

class BoardGameDice extends Dice 
{
    protected $numberOfSides = 20;
    
    public function draw() {
        echo "<h1 class=\"dice\">" . $this->getCurrectValue() . "</h1>";
    }
}

$myDie1 = new Dice();
$myDie2 = new Dice();

$fancyDie = new BoardGameDice();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dice Roll!</title>
        <style type="text/css">
            table {
                border-spacing:0;
                border-collapse: collapse;
            }
            tbody {
                border:1px solid #ccc;
            }
            
            td {
                width:20px;
                height:20px;
                bordeR:0;
                background-color:white;
            }
            
            .fill {
                background-color:dodgerblue;
                border-radius:10px;
            }
            
            .dice {
                width:100px;
                height:100px;
                padding:8px;
                text-align:center;
                border:1px solid #ccc;
                color:dodgerblue;
            }
        </style>
    </head>
    <body>
        <h1>Acme Dice Roller!</h1>
        
        <?php
        
        $myDie1->draw();
        echo "<br><br>";
        $myDie2->draw(); 
        echo "<br><br>";
        $fancyDie->draw();
        ?>
    </body>
</html>