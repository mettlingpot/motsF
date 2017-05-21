<?php

if(!function_exists('not_empty')){
    
   function not_empty($field = []){
       if(count($field) != 0){
           foreach($field as $field){
               if(empty($_POST[$field])|| trim($_POST[$field]) == ""){
                   return false;
               }
           }
           return true;
       }
   } 
}

if(!function_exists('is_already_in_use')){
    
    function is_already_in_use($field, $value, $table){
        
        global $db;
        
        $q = $db->prepare("SELECT id FROM $table WHERE $field = ?");
        $q->execute([$value]);
        
        $count = $q->rowCount();
        $q->closeCursor();
        
        return $count;
    }
}

if(!function_exists('set_flash')){
    function set_flash($message, $type = 'info'){
        $_SESSION['notification']['message']= $message;
        $_SESSION['notification']['type']= $type;
    }
}

if(!function_exists('redirect')){
    function redirect($page){
        header('location: '.$page);
        exit();
    }
}

if(!function_exists('save_input_data')){
    function save_input_data(){
        foreach($_POST as $key => $value){
            if(strpos($key, 'password') === false){
                $_SESSION['input'][$key] = $value;
            }
        }
    }
}

if(!function_exists('get_input')){
    function get_input($key){
        return !empty($_SESSION['input'][$key]) //ternaire test si presence de key
            ? e($_SESSION['input'][$key])
            :null;
     }
}

if(!function_exists('clear_input_data')){
    function clear_input_data(){
        if(isset($_SESSION['input'])){
            $_SESSION['input'] = [];
        }
     }
}

if(!function_exists('e')){
   function e($string){
       if($string){
           return htmlspecialchars($string);
       }

   } 
}

//etat actif des liens
if(!function_exists('set_active')){
   function set_active($file){
       $page = trim(strrchr($_SERVER['SCRIPT_NAME'], '/'),'/');
       if($page == $file.'.php'){
           return "active";
       } else {
           return "";
       }

   } 
}

//hash password blowfish
if(!function_exists('bcrypt_hash_password')){
    function bcrypt_hash_password($value, $option = array()){
        $cost = isset($option['round']) ? $option['round'] : 10;
        $hash = password_hash($value, PASSWORD_BCRYPT, array('cost' => $cost));
        
        if($hash === false){
            throw new Exeption("Bcrypt n'est pas supporte");
        }
        return $hash;
     }
}

if(!function_exists('bcrypt_verify_password')){
    function bcrypt_verify_password($value, $hashedValue){
        return password_verify($value, $hashedValue);
     }
}

if(!function_exists('creer_grille3')){
 function creer_grille3(){
    
    for($i=1 ;$i<12 ;$i++){
        echo("<tr>");
            for($j=1 ;$j<10 ;$j++){
                $tab[$i][$j]=$i;
            echo("<td id=".$i."-".$j."><input type='text' maxlength='1' value=".$tab[$i][$j]."></input></td>");
        }
        echo("</tr>");
    }
}
}

//************************ essais en dur ************************//
   /*
if(!function_exists('creer_grille2')){
 
 function creer_grille2(){
        echo("<tr>");
            echo("<td id='1-1'><table><tr><td class='demi'>sans </br>cafeine</td></tr><tr><td>agreable </br>a vivre</td></tr></table></td>");
            echo("<td id='1-2' ><input  type='text' maxlength='1' value='d'><div class='bas'></div></input></td>");
            echo("<td id='1-3'><table><tr><td class='demi'>inau-</br>gurera</td></tr><tr><td>amateur </br>de javas</td></tr></table></td>");
            echo("<td id='1-4'><input type='text' maxlength='1' value='e'></input></td>");
            echo("<td id='1-5'><table><tr><td class='demi'>fait pale </br>figure</td></tr><tr><td>fin de </br>verbe</td></tr></table></td>");
            echo("<td id='1-6'><input type='text' maxlength='1' value='b'></input></td>");
            echo("<td id='1-7'><table><tr><td>repere </br>dans le </br>temps</td></tr></table>");
            echo("<td id='1-8'><input type='text' maxlength='1' value='d'></input></td>");
            echo("<td id='1-9'><table><tr><td>degre en </br>gamme</td></tr></table>");
        echo("</tr>");
        echo("<tr>");
            echo("<td id='2-1'><input type='text' maxlength='1' value='g'></input></td>");
            echo("<td id='2-2'><input type='text' maxlength='1' value='e'></input></td>");
            echo("<td id='2-3'><input type='text' maxlength='1' value='n'></input></td>");
            echo("<td id='2-4'><input type='text' maxlength='1' value='t'></input></td>");
            echo("<td id='2-5'><input type='text' maxlength='1' value='i'></input></td>");
            echo("<td id='2-6'><input type='text' maxlength='1' value='l'></input></td>");
            echo("<td id='2-7'><table><tr><td class='demi'>argon</br>abrege</td></tr><tr><td>habitant</br>du pays</td></tr></table></td>");
            echo("<td id='2-8'><input type='text' maxlength='1' value='a'></input></td>");
            echo("<td id='2-9'><input type='text' maxlength='1' value='r'></input></td>");
        echo("</tr>");
        echo("<tr>");
            echo("<td id='3-1'><table><tr><td class='demi'>de bonne</br>tenue</td></tr><tr><td>visage</td></tr></table></td>");
            echo("<td id='3-2'><input type='text' maxlength='1' value='c'></input></td>");
            echo("<td id='3-3'><input type='text' maxlength='1' value='o'></input></td>");
            echo("<td id='3-4'><input type='text' maxlength='1' value='r'></input></td>");
            echo("<td id='3-5'><input type='text' maxlength='1' value='r'></input></td>");
            echo("<td id='3-6'><input type='text' maxlength='1' value='e'></input></td>");
            echo("<td id='3-7'><input type='text' maxlength='1' value='c'></input></td>");
            echo("<td id='3-8'><input type='text' maxlength='1' value='t'></input></td>");
            echo("<td id='3-9'><input type='text' maxlength='1' value='e'></input></td>");
        echo("</tr>");
        echo("<tr>");
            echo("<td id='4-1'><input type='text' maxlength='1' value='f'></input></td>");
            echo("<td id='4-2'><input type='text' maxlength='1' value='a'></input></td>");
            echo("<td id='4-3'><input type='text' maxlength='1' value='c'></input></td>");
            echo("<td id='4-4'><input type='text' maxlength='1' value='e'></input></td>");
            echo("<td id='4-5'><table><tr><td class='demi'>milieu</br>du pain</td></tr><tr><td>regle a</br>dessin</td></tr></table></td>");
            echo("<td id='4-6'><input type='text' maxlength='1' value='m'></input></td>");
            echo("<td id='4-7'><input type='text' maxlength='1' value='i'></input></td>");
            echo("<td id='4-8'><input type='text' maxlength='1' value='e'></input></td>");
            echo("<td id='4-9'><table><tr><td>belle </br>saison</td></tr></table>");
        echo("</tr>");
        echo("<tr>");
            echo("<td id='5-1'><table><tr><td>couleur de</br>chataigne</td></tr></table>");
            echo("<td id='5-2'><table><tr><td class='demi'>butee</td></tr><tr><td>enleve la</br>suie</td></tr></table></td>");
            echo("<td id='5-3'><input type='text' maxlength='1' value='e'></input></td>");
            echo("<td id='5-4'><input type='text' maxlength='1' value='n'></input></td>");
            echo("<td id='5-5'><input type='text' maxlength='1' value='t'></input></td>");
            echo("<td id='5-6'><input type='text' maxlength='1' value='e'></input></td>");
            echo("<td id='5-7'><input type='text' maxlength='1' value='t'></input></td>");
            echo("<td id='5-8'><input type='text' maxlength='1' value='e'></input></td>");
            echo("<td id='5-9'><input type='text' maxlength='1' value='e'></input></td>");
        echo("</tr>");
        echo("<tr>");
            echo("<td id='6-1'><input type='text' maxlength='1' value='b'></input></td>");
            echo("<td id='6-2'><input type='text' maxlength='1' value='r'></input></td>");
            echo("<td id='6-3'><input type='text' maxlength='1' value='u'></input></td>");
            echo("<td id='6-4'><input type='text' maxlength='1' value='n'></input></td>");
            echo("<td id='6-5'><input type='text' maxlength='1' value='e'></input></td>");
            echo("<td id='6-6'><table><tr><td>ecran</br>vraiment</br>petit</td></tr></table>");
            echo("<td id='6-7'><input type='text' maxlength='1' value='o'></input></td>");
            echo("<td id='6-8'><table><tr><td>versee a</br>titre de</br>recompense</td></tr></table>"); 
            echo("<td id='6-9'><input type='text' maxlength='1' value='t'></input></td>");
        echo("</tr>");
        echo("<tr>");
            echo("<td id='7-1'><table><tr><td class='demi'>mesure</br>agraire</td></tr><tr><td>devant le</br>roi</td></tr></table></td>");
            echo("<td id='7-2'><input type='text' maxlength='1' value='a'></input></td>");
            echo("<td id='7-3'><input type='text' maxlength='1' value='r'></input></td>");
            echo("<td id='7-4'><input type='text' maxlength='1' value='e'></input></td>");
            echo("<td id='7-5'><table><tr><td class='demi'>individu</td></tr><tr><td>choisi dans</br>l isoloir</td></tr></table></td>");
            echo("<td id='7-6'><input type='text' maxlength='1' value='t'></input></td>");
            echo("<td id='7-7'><input type='text' maxlength='1' value='y'></input></td>");
            echo("<td id='7-8'><input type='text' maxlength='1' value='p'></input></td>");
            echo("<td id='7-9'><input type='text' maxlength='1' value='e'></input></td>");
        echo("</tr>");
        echo("<tr>");
            echo("<td id='8-1'><input type='text' maxlength='1' value='s'></input></td>");
            echo("<td id='8-2'><input type='text' maxlength='1' value='m'></input></td>");
            echo("<td id='8-3'><table><tr><td class='demi'>oublier la</br>realite</td></tr><tr><td>style</br>musical</td></tr></table></td>");
            echo("<td id='8-4'><input type='text' maxlength='1' value='r'></input></td>");
            echo("<td id='8-5'><input type='text' maxlength='1' value='e'></input></td>");
            echo("<td id='8-6'><input type='text' maxlength='1' value='v'></input></td>");
            echo("<td id='8-7'><input type='text' maxlength='1' value='e'></input></td>");
            echo("<td id='8-8'><input type='text' maxlength='1' value='r'></input></td>");
            echo("<td id='8-9'><table><tr><td>mot de</br>douleur</td></tr></table>");
        echo("</tr>");
        echo("<tr>");
            echo("<td id='9-1'><table><tr><td class='demi'>transmis par</br>la parole</td></tr><tr><td>haute</br>ecole</td></tr></table></td>");
            echo("<td id='9-2'><input type='text' maxlength='1' value='o'></input></td>");
            echo("<td id='9-3'><input type='text' maxlength='1' value='r'></input></td>");
            echo("<td id='9-4'><input type='text' maxlength='1' value='a'></input></td>");
            echo("<td id='9-5'><input type='text' maxlength='1' value='l'></input></td>");
            echo("<td id='9-6'><table><tr><td class='demi'>n admit</br>pas</td></tr><tr><td>inter-</br>jection</td></tr></table></td>");
            echo("<td id='9-7'><input type='text' maxlength='1' value='n'></input></td>");
            echo("<td id='9-8'><input type='text' maxlength='1' value='i'></input></td>");
            echo("<td id='9-9'><input type='text' maxlength='1' value='a'></input></td>");
        echo("</tr>");
        echo("<tr>");
            echo("<td id='10-1'><input type='text' maxlength='1' value='e'></input></td>");
            echo("<td id='10-2'><input type='text' maxlength='1' value='n'></input></td>");
            echo("<td id='10-3'><input type='text' maxlength='1' value='a'></input></td>");
            echo("<td id='10-4'><table><tr><td>europe en</br>raccourci</td></tr></table>");
            echo("<td id='10-5'><input type='text' maxlength='1' value='u'></input></td>");
            echo("<td id='10-6'><input type='text' maxlength='1' value='e'></input></td>");
            echo("<td id='10-7'><table><tr><td>entre re</br>et fa</td></tr></table>");
            echo("<td id='10-8'><input type='text' maxlength='1' value='m'></input></td>");
            echo("<td id='10-9'><input type='text' maxlength='1' value='i'></input></td>");
        echo("</tr>");
        echo("<tr>");
            echo("<td id='10-1'><table><tr><td>elle dope</br>les sportifs</td></tr></table>");
            echo("<td id='10-2'><input type='text' maxlength='1' value='e'></input></td>");
            echo("<td id='10-3'><input type='text' maxlength='1' value='p'></input></td>");
            echo("<td id='10-4'><input type='text' maxlength='1' value='o'></input></td>");
            echo("<td id='10-5'><table><tr><td>accueillie</br>avec des</br>sifflets</td></tr></table>");
            echo("<td id='10-6'><input type='text' maxlength='1' value='h'></input></td>");
            echo("<td id='10-7'><input type='text' maxlength='1' value='u'></input></td>");
            echo("<td id='10-8'><input type='text' maxlength='1' value='e'></input></td>");
            echo("<td id='10-9'><input type='text' maxlength='1' value='e'></input></td>");
        echo("</tr>");
    }
}
*/
//************************ essais en dur ************************//











