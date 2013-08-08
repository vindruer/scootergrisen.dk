<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$setup['nogetikon']               = 'ikoner/ikon_information2.png';

$title = "introduktion";
$overskrift = "introduktion";
$metadescription = "velkomst og forklaring af hjemmesiden";

$databasecenter = array(

'
velkomst
' => '
<div style="float: left; margin: 30px;">'.visbilled('1', 'billed3390.jpg', 'to scootere').'</div>
<div>
'.visbilled('2', 'animation0027.gif', 'smiley på scooter').'

Hej og velkommen til Scootergrisen.

En hjemmeside om scootere og knallerter.

Scooterne her på hjemmesiden må køre 25, 30 eller 45 km/t.
Du kan finde scootere med 2 takt, 4 takt og elektrisk motor her på hjemmesiden.

Du finder ikke Maxi-scootere/MC-scootere/motorcykler her på hjemmesiden. Det er dem med motorcykel nummerplade som må køre over 45 km/t.
<div class="clearboth"></div>
</div>
<div style="float: right; margin-left: 30px; margin-right: 10px;">'.visbilled('1', 'billed3389.jpg', 'to scootere').'</div>
<div>
Jeg håber du kan bruge hjemmesiden.

Du er velkommen til at komme ind i '.forummet().' og skrive med os andre eller '.kontaktemig().' hvis du har spørgsmål, kommentar, ris og ros eller hvad det måtte være.

Hilsen Scootergrisen.
<div class="clearboth"></div>
</div>
'

,'
tips
' => '
Den side som vises lige nu er markeret med omvendte farver i menuerne.
'.visbilled('1', 'billed3656.jpg', 'menu med omvendte farver', false, true).'
Hold markøren stille over et link i menuerne for at få mere information om siden før du besøger den.
'.visbilled('1', 'billed3657.jpg', 'menu med hover title beskrivelse', false, true).'
'

,'
emner på siden
' => '
Emner på siden (øverst til højre på hjemmesiden) giver et overblik af den aktuelle side i alfabetisk rækkefølge.
Klikker du på et af linksne vil du hoppe ned til emnet på samme side.
'.visbilled('1', 'billed3658.jpg', 'emner på siden menu', false, true).'
'

,'
funktioner
' => '
Du kan søge på hjemmesiden.
Søgefunktionen er dog ikke i stand til at søge på hele hjemmesiden men den er stadig brugbar.
Vær opmærksom på at søge funktionen ikke virker på samme måde som mange søgemaskiner så i de fleste tilfælde er det bedst kun at skrive 1 eller 2 ord og undgå tegn som - + og / for at få det bedste resultat.
'.visbilled('1', 'billed3659.jpg', 'søg', false, true).'

Hvis du ser en fejl på hjemmesiden (for eksempel en stavefejl) så kan du hjælpe med at få det rettet.
Ved at markere teksten med musen og trykke CTRL og ENTER kommer denne popup besked hvor du eventuelt kan skrive en rettelse eller kommentar.
'.visbilled('1', 'billed3660.jpg', 'fundet en fejl ? orphus ctrl + enter', false, true).'
Når du trykker på Send knappen bliver der sendt en besked om fejlen til mig så jeg kan rette det.
'

,'
spørgsmål og svar
' => '
'.afsnit('hvorfor hedder hjemmesiden scootergrisen.dk ?','
Jeg bruger navnet scootergrisen på diverse forum så jeg tænkte at det kunne jeg også bruge som domænenavn.
Jeg kunne i hvert fald  ikke finde på noget bedre.
').'

'.afsnit('hvem har lavet hjemmesiden ?','
Det har jeg.
').'

'.afsnit('hvad hedder du ?','
Jeg hedder David Nielsen.
').'

'.afsnit('hvorfor har du lavet hjemmesiden ?','
Det startede med at jeg ville købe en scooter.
Jeg fandt ud af at det skulle være en 4 takt scooter da jeg havde læst at de kører længere på literen end en 2 takt scooter.
Så søgte jeg på nettet efter de forskellige 4 takt scootermodeller man kunne købe.
På det tidspunkt skrev jeg på '.ahref('http://www.billig-scooter.dk', 'billig-scooter.dk').' hvor jeg samlede info og skrev indlæg om de scootermodeller jeg fandt.
Jeg kunne ikke rigtig finde nogen hjemmeside som havde de informationer jeg søgte omkring 4 takt scootere. I hvert fald ikke på dansk. Og nogle af de scootermodeller som de udenlandske hjemmesider skrev om kunne man ikke få i danmark.
På et tidspunkt havde jeg samlet nok info til at starte en lille hjemmeside.
').'

'.afsnit('hvad kræves for at bruge hjemmesiden fuldt ud ?','
Hjemmesiden bør se nogenlunde ens ud de forskellige browsere så det burde ikke betyde noget hvilken browser du bruger så længe det er en nyere version.

Browseren bør have Javascript og cookies aktiveret.

'.ahref('http://get.adobe.com/flashplayer/', 'Adobe Flash Player').' kræves for at se flash indhold så som videoer.

PDF filer kan åbnes med '.ahref('http://get.adobe.com/reader/', 'Adobe Reader').'.
ZIP filer kan åbnes med '.ahref('http://www.7-zip.org/', '7-zip').'.
SVG filer kan åbnes i nogle browsere. Ellers med '.ahref('http://inkscape.org/', 'Inkscape').'.
').'

'.afsnit('min scooter vil ikke starte... kan du hjælpe mig ?','
Måske.
Du kan skrive i '.forummet().' eller '.kontaktemig().' og beskrive problemet så godt du kan og hvad du har prøvet at gøre.
').'

'.afsnit('sælger du noget ?','
Nej jeg sælger ikke noget.
Ikke endnu i hvert fald.
På '.ahref('links.php', 'links').' siden kan du se forskellige forhandlere af scootere og reservedele.
').'

'.afsnit('kan du fortælle mig præcist hvor begrænsningerne sidder på min scooter ?','
For det meste nej.
Men scooterne er ofte begrænset nogenlunde de samme steder.
Du kan selv undersøge din scooter for nogle af begrænsningerne ved at besøge '.ahref('begrensninger.php', 'begrænsninger').' og sammenligne med din egen scooter.
Start med at kig om den er begrænset i variatoren.
Hvis din scooter model findes i '.ahref('galleri.php', 'galleri').' så kan du prøve og gå ind på din scootermodel og se om der står noget om begrænsninger.
').'

'.afsnit('hvorfor skriver du ikke så meget om 2 takt scootere ?','
Jeg interesser mig ikke så meget for 2 takt motorer.
Jeg interesser mig for at køre langt på literen og det er der ikke så mange scootere med 2 takt motor der kan.
Ser man bort fra motoren så er de fleste dele på 2 takt og 4 takt scootere ens så du kan godt få en masse ud af hjemmesiden selvom du har en scooter med 2 takt motor.
').'

'.afsnit('hvorfor skriver du ikke om tuning ?','
Jeg interesser mig ikke for tuning.
Der findes mange andre hjemmesider som skriver om tuning og de ved meget mere om det end jeg gør.
Hvis du vil vide noget om begrænsninger så se '.ahref('begrensninger.php', 'begrænsninger').'.
Jeg betragter ikke fjernelse af begrænsninger som tuning.
').'

'.afsnit('mit spørgsmål er ikke her','
Skriv i '.forummet().' eller '.kontaktmig().' så skal jeg prøve at svare på dit spørgsmål.
').'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
