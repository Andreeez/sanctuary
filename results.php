<?php

    abstract class SanctuaryFarm {
        protected $image;
        protected $sound;               

            private function onClick(){                
                $names = array("Pelle","Pele","Kajsa","jenny","Amanda","Joakim","Jonathan","Anton","Thompa","Yeppsson","krasse","pedram","faroch","louise","Daniel","Emil");
                $this->allName = $names[array_rand($names)];
                return $this->onClickSpecific();
            }

            public abstract function onClickSpecific();

            public function draw(){
          
            echo "<img style='width: 300px; height: 300px;' src='/".$this->image."' onclick='".$this->onClick()."'/>";
    }
}

class ApaCharacter extends SanctuaryFarm {
    protected $image = 'apa.jpg';
    protected $sound = 'Ohohohohohoho';
    
    public function onClickSpecific(){
        return "alert(\" $this->sound + $this->allName\");";

    }
}

class GiraffCharacter extends SanctuaryFarm {
    protected $sound = 'Wihihihi';
    protected $image = 'giraff.jpg';

    public function onClickSpecific(){
        return "alert(\" $this->sound + $this->allName\");";

    }
}

class TigerCharacter extends SanctuaryFarm{
    protected $image ='tiger.jpg';
    protected $sound = 'WraowWraow';

    public function onClickSpecific(){
        return "alert(\" $this->sound + $this->allName\");";

    }
}

class KokosNotCharacter extends SanctuaryFarm {
    protected $image = 'kokosnot.jpg';

    public function onClickSpecific(){
        return null;
    }
}

// $farm = array(
//     new ApaCharacter(),
//     new KokosNotCharacter(),
//     new GiraffCharacter(),
//     new TigerCharacter()

// );

$tiger = $_GET['numberTiger'];
$giraff = $_GET['numberGiraff'];
$apor = $_GET['numberApor'];
$kokosnot = $_GET['numberKokosNut'];

for($i = 0; $i < $tiger; $i++ ){
    $tigern = new TigerCharacter();
    $tigern->draw();
}

for($i = 0; $i < $giraff; $i++ ){
    $giraffn = new GiraffCharacter();
    $giraffn->draw();
}

for($i = 0; $i < $apor; $i++ ){
    $aporn = new ApaCharacter();
    $aporn->draw();
}

for($i = 0; $i < $kokosnot; $i++ ){
    $kokosnotn = new KokosNotCharacter();
    $kokosnotn->draw();
}

// foreach ($farm as $member){
//     $member->draw();
// }
//         echo "What was gotten: <br/>";
//         print_r($_GET ['numberTiger']);
//         echo "<br/>";
//         print_r($_GET ['numberGiraff']);
//         echo "<br/>";
//         print_r($_GET ['numberApor']);
//         echo "<br/>";
//         print_r($_GET ['numberKokosNut']);
        
        // print_r( $_GET ['numberTiger', 'numberGiraff' , 'numberApor'] );

?>

