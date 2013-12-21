<?php // æøåÆØÅ UTF-8 uden BOM

require_once './php/opsetning_scooterhjemmeside.php';
require_once './php/generelt_funktioner.php';
require_once './php/scooterhjemmeside_funktioner.php';

$title = "gratis reklame på scootergrisen.dk";
$overskrift = "gratis reklame på scootergrisen.dk";
$metadescription = "læs denne side hvis du kunne tænke dig en gratis reklame på hjemmesiden";

function visreklamer(){

   $indhold = '';

   if($GLOBALS['setup']['reklamer']){

      $reklamer = $GLOBALS['setup']['reklamer'];

      $indhold .= '<div class="textaligncenter">';

      foreach($reklamer as $reklame){

         $indhold .= ahref($reklame[1], visbilled('1', 'reklamer/' . $reklame[2], my_mb_ucfirst($GLOBALS['setup']['l_gratisreklame_klikpabilledet']) . ' ' . $reklame[0], false, false));
         $indhold .= lidtplads('lodret');
         $indhold .= "\r\n";

      }

      $indhold .= '</div>';
      $indhold .= "\r\n";

   }else{

      trigger_error('$reklamer er ikke sat');

   }

   return $indhold;

}

$databasecenter = array(

'
gratis reklame
' => '
Jeg vil gerne give gratis reklame til scooter relaterede hjemmesider, butikker, værksteder, træf, messer og lignende i form af et billede med link på hjemmesiden.

'.afsnit('eksempler på hvad jeg vil reklamere for','
Hjemmeside om scootere.
Butik som sælger scootere og/eller reservedele til scootere.
Scooter værksted.
Scooter træf.
Scooter cafe.
Det kunne også være en video, et galleri, et forum eller noget andet så længe det har et eller andet med scootere/knallerter at gøre.
').'

'.afsnit('hvordan får jeg en gratis reklame på hjemmesiden ?','
'.kontaktmig(true).' og fortæl du gerne vil have en gratis reklame på hjemmesiden.

Du kan enten lave dit eget reklamebillede eller sende billeder til mig så laver jeg en reklame ud fra billederne.

Du kan skrive direkte til mig på '.visminemail().' og vedhæfte billeder.
').'

'.afsnit('krav til reklame','
Umiddelbart jeg har ikke de store krav.

Jeg vil ikke have at reklamen er animeret fordi det er irriterende for mig at se den samme animation igen og igen mange gange.

Det skal gerne gøres tydeligt præcist hvad brugeren kan forvente at finde inden der klikkes på linket.
').'

Hvis du senere ønsker at ændre din reklame eller få den slettet så bare skriv igen.

'.afsnit('reklamer som skiftes til at blive vist på hjemmesiden','
'.visreklamer().'
').'
'.afsnit('reklamer som har været vist men ikke vises længere','

'.visbilled('1', 'reklamer/www.scooterklubben.dk.png', 'gratis reklame for www.scooterklubben.dk', false, true).'
'.visbilled('1', 'reklamer/knallert-scooter.dk.png', 'gratis reklame for knallert-scooter.dk', false, true).'
'.visbilled('1', 'reklamer/scooterfreak.tk.png', 'gratis reklame for scooterfreak.tk', false, true).'
'.visbilled('1', 'reklamer/www.fantombike.dk.png', 'gratis reklame for www.fantombike.dk', false, true).'
').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
