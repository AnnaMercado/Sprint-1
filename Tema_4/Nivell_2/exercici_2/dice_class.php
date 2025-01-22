
<?php
class PokerDice{
    public $sides = ['As', 'K', 'Q', 'J', '7', '8'];
    public $lastThrow;


    public function throw (){
        $this->lastThrow = $this->shapes[rand(0, 5)];
    }


    public function shapeName(){
        if ($this->lastThrow){
            echo $this->lastThrow;
        }
        else{
            echo "You haven't rolled the dice yet.";
        }
    }

}

?>