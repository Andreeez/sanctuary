<?php

    abstract class SanctuaryFarm {
        protected $image;

            public abstract function onClick();

            public function draw(){
            
            echo "<img style='width: 300px; height: 300px;' src='/".$this->image."' onclick='".$this->onClick()."'/>";
            // echo "<img style='margin: 100px;' src='/jsFromPhp/".$this->image."' onclick='".$this->onClick()."' />";
    }
}

class ApaCharacter extends SanctuaryFarm {
    protected $image = 'apa.jpg';

    public function onClick(){
        return "alert(\"Ohohohohohoho\");";
    }
}

class GiraffCharacter extends SanctuaryFarm {
    protected $image = 'giraff.jpg';

    public function onClick(){
        return "alert(\"Gitigiaihia\");";
    }
}

class TigerCharacter extends SanctuaryFarm{
    protected $image ='tiger.jpg';

    public function onClick(){
        return "alert(\"WraowWraow\");";
    }
}

class KokosNotCharacter extends SanctuaryFarm {
    protected $image = 'kokosnot.jpg';

    public function onClick(){
        return null;
    }
}


$farm = array(
    new ApaCharacter(),
    new KokosNotCharacter(),
    new GiraffCharacter(),
    new TigerCharacter()

);

foreach ($farm as $member){
    $member->draw();
}

?>

