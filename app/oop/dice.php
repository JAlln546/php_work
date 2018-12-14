<?php 

class Dice {
    protected $numberOfSides = 6;
    private $currentValue;
    
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
        echo "
        <table>
            <tbody>
                <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
            </tbody>
        </table>";
        
    }
}

public class BoardGameDice extends Dice 
{
    protected $numberOfSides = 20;
}

$myDie = new Dice();
$billysDie = new Dice();
$sallysDie = new Dice();
$myFancyDie = new BoardGameDice();


echo "My die's current value is: " . $myDie->currentValue . "\n";
echo "Billy's die's current value is: " . $billysDie->currentValue . "\n";
echo "Sally's die's current value is: " . $sallysDie->currentValue . "\n";

echo "Rolling my die...\n";
$myDie->roll();

echo "My die's current value is: " . $myDie->currentValue . "\n";
echo "Billy's die's current value is: " . $billysDie->currentValue . "\n";
echo "Sally's die's current value is: " . $sallysDie->currentValue . "\n";
echo "My Fancy die's current value is: " . $myFancyDie->currentValue . "\n";