<?php
const VERTICAL = true;
const HORIZONTAL = false;

class Mots{
    private $_mot;
    private $_definition;
    private $_sens;
    private $_origine;
    private $_origineDef;
  
    
        
    public function __construct($mot, $definition, $sens, $origine, $_origineDef) {

        $this->_mot = $mot;
        $this->_definition = $definition;
        $this->_sens = $sens;
        $this->_origine = $origine;
        $this->_origineDef = $_origineDef;
      }
     
    public function mot(){
        return $this->_mot;
    }
    
    public function definition(){
        return $this->_definition;
    }
    
    public function sens(){
        return $this->_sens;
    }
    
    public function origine(){
        return $this->_origine;
    }
    
    public function origineDef(){
        return $this->_origineDef;
    }
    
    public function decoupeMot($tab){
        $origine= explode("-",$this->_origine);
        $origineDef= explode("-",$this->_origineDef);
        $x=$origine[0];
        $y=$origine[1];
        
        if(isset($tab[$origineDef[0]][$origineDef[1]])){
            $stringDef="<table><tr><td class='demi'>".$tab[$origineDef[0]][$origineDef[1]]."</tr><tr><td>".$this->_definition."</td></tr></table>";
        }
        else{
            $stringDef = $this->_definition;   
        }
        
        $tab[$origineDef[0]][$origineDef[1]] = $stringDef;
        
        for($i=0;$i<strlen($this->_mot);$i++){
            $lettre = $this->_mot[$i];
            
            if($this->_sens){
                $tab[$x][$y]=$lettre;
                $x+=1;
            }
            else{
                $tab[$x][$y]=$lettre;
                $y+=1;
            }
            
        }
        return $tab;
    }
    
}

if(!function_exists('creer_grille')){
 function creer_grille($tab){

    for($i=1 ;$i<12 ;$i++){
        echo("<tr>");
            for($j=1 ;$j<10;$j++){
                $lettre=$tab[$i][$j];
                //echo $lettre;
                if(strlen($lettre)<2){
                    echo("<td id=".$i."-".$j."><input type='text' maxlength='1' value=''></input></td>");
                }
                else{
                    
                    echo("<td id=".$i."-".$j.">$lettre</td>");
                }
        }
        echo("</tr>");
    }
}
}
/*
if(!function_exists('verifier_mot')){
 function verifier_mot(){
     $value = $_POST["value"];
     $position = $_POST["position"];
     echo($value);
 }
}

*/

$tab = array();

$mot1 = new Mots("deca","sans </br>cafeine",VERTICAL,"1-2","1-1");
$mot2 = new Mots("etrennera","inau-</br>gurera",VERTICAL,"1-4","1-3");
$mot3 = new Mots("bleme","fait pale </br>figure",VERTICAL,"1-6","1-5");
$mot4 = new Mots("datee","repere </br>dans le </br>temps",VERTICAL,"1-8","1-7");
$mot5 = new Mots("ramone","enleve la</br>suie",VERTICAL,"6-2","5-2");
$mot6 = new Mots("re","degre en </br>gamme",VERTICAL,"2-9","1-9");
$mot7 = new Mots("gentil","agreable </br>a vivre",HORIZONTAL,"2-1","1-1");
$mot8 = new Mots("ar","argon</br>abrege",HORIZONTAL,"2-8","2-7");
$mot9 = new Mots("correcte","de bonne</br>tenue",HORIZONTAL,"3-2","3-1");
$mot10 = new Mots("face","visage",HORIZONTAL,"4-1","3-1");
$mot11 = new Mots("mie","milieu</br>du pain",HORIZONTAL,"4-6","4-5");
$mot12 = new Mots("entetee","butee",HORIZONTAL,"5-3","5-2");
$mot13 = new Mots("ete","belle </br>saison",VERTICAL,"5-9","4-9");
$mot14 = new Mots("brune","couleur de</br>chataigne",HORIZONTAL,"6-1","5-1");
$mot15 = new Mots("te","regle a</br>dessin",VERTICAL,"5-5","4-5");
$mot16 = new Mots("citoyen","habitant</br>du pays",VERTICAL,"3-7","2-7");
$mot17 = new Mots("noceur","amateur </br>de javas",VERTICAL,"2-3","1-3");
$mot18 = new Mots("ir","fin de </br>verbe",VERTICAL,"2-5","1-5");
$mot19 = new Mots("tv","ecran</br>vraiment</br>petit",VERTICAL,"7-6","6-6");
$mot20 = new Mots("prime","versee en</br>recom-</br>pense",VERTICAL,"7-8","6-8");
$mot21 = new Mots("are","mesure</br>agraire",HORIZONTAL,"7-2","7-1");
$mot22 = new Mots("type","individu",HORIZONTAL,"7-6","7-5");
$mot23 = new Mots("sm","devant le</br>roi",HORIZONTAL,"8-1","7-1");
$mot24 = new Mots("rever","oublier la</br>realite",HORIZONTAL,"8-4","8-3");
$mot25 = new Mots("elu","choisi dans</br>l isoloir",VERTICAL,"8-5","7-5");
$mot26 = new Mots("aie","mot de</br>douleur",VERTICAL,"9-9","8-9");
$mot27 = new Mots("oral","transmis par</br>la parole",HORIZONTAL,"9-2","9-1");
$mot28 = new Mots("nia","n admit</br>pas",HORIZONTAL,"9-7","9-6");
$mot29 = new Mots("rap","style</br>musical",VERTICAL,"9-3","8-3");
$mot30 = new Mots("ena","haute</br>ecole",HORIZONTAL,"10-1","9-1");
$mot31 = new Mots("ue","europe en</br>raccourci",HORIZONTAL,"10-5","10-4");
$mot32 = new Mots("mi","entre re</br>et fa",HORIZONTAL,"10-8","10-7");
$mot33 = new Mots("eh","inter-</br>jection",VERTICAL,"10-6","9-6");
$mot34 = new Mots("epo","elle dope</br>les sportifs",HORIZONTAL,"11-2","11-1");
$mot35 = new Mots("huee","accueillie</br>avec des</br>sifflets",HORIZONTAL,"11-6","11-5");

/*
for($i=1;$i<36;$i++){
    $mot = ('$mot'.$i);
    //echo ( $mot);
    $tab = $mot->decoupeMot($tab);
}
*/
$tab = $mot1->decoupeMot($tab);
$tab = $mot2->decoupeMot($tab);
$tab = $mot3->decoupeMot($tab);
$tab = $mot4->decoupeMot($tab);
$tab = $mot6->decoupeMot($tab);
$tab = $mot7->decoupeMot($tab);
$tab = $mot8->decoupeMot($tab);
$tab = $mot9->decoupeMot($tab);
$tab = $mot10->decoupeMot($tab);
$tab = $mot11->decoupeMot($tab);
$tab = $mot12->decoupeMot($tab);
$tab = $mot5->decoupeMot($tab);
$tab = $mot13->decoupeMot($tab);
$tab = $mot14->decoupeMot($tab);
$tab = $mot15->decoupeMot($tab);
$tab = $mot16->decoupeMot($tab);
$tab = $mot17->decoupeMot($tab);
$tab = $mot18->decoupeMot($tab);
$tab = $mot19->decoupeMot($tab);
$tab = $mot20->decoupeMot($tab);
$tab = $mot21->decoupeMot($tab);
$tab = $mot22->decoupeMot($tab);
$tab = $mot23->decoupeMot($tab);
$tab = $mot24->decoupeMot($tab);
$tab = $mot25->decoupeMot($tab);
$tab = $mot26->decoupeMot($tab);
$tab = $mot27->decoupeMot($tab);
$tab = $mot28->decoupeMot($tab);
$tab = $mot29->decoupeMot($tab);
$tab = $mot30->decoupeMot($tab);
$tab = $mot31->decoupeMot($tab);
$tab = $mot32->decoupeMot($tab);
$tab = $mot33->decoupeMot($tab);
$tab = $mot34->decoupeMot($tab);
$tab = $mot35->decoupeMot($tab);


//var_dump($tab);
//creer_grille($tab);
//echo $tab[6][3];
