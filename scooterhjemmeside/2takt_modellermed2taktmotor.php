<?php // æøåÆØÅ UTF-8 uden BOM

require_once('./php/opsetning_scooterhjemmeside.php');
require_once('./php/generelt_funktioner.php');
require_once('./php/scooterhjemmeside_funktioner.php');

$title = "modeller med 2 takt motor";
$overskrift = "modeller med 2 takt motor";
$metadescription = "liste med scootere/knallert med 2 takt motor som kan eller har kunne fås i danmark";

$databasecenter = array(

'
modeller med 2 takt motor
' => '
Her skriver jeg en liste med alle de scootere/knallerter der har 2 takt motor som kan eller har kunne fås i danmark.

Listen er ikke komplet. Jeg tilføjer nye modeller på listen når jeg hører om dem.

Du kan '.kontaktemig().' hvis du kender nogle 2 takt scootere/knallerter som ikke er med på listen.

'.
box(array('170', '170', '170')
   ,array(
       array('mærke', 'model', 'bemærkning')
      ,array('adly', 'cat
GTA
baboon SF-50
gazelle TB-50
silverfox
panther
noble
super sonic
', '')
      ,array('AMC', 'exatly
', '')
      ,array('aprilia', 'sx
rx
rs
sr
sr r factory
sonic
classic
amico
mojito
mojito custom
habana
rally (Er det ikke en 2 takt ?)
scarabeo
scarabeo street
', '')
      ,array('aragon', 'evolution
', '')
      ,array('atala', 'hacker (er det ikke en 2 takt ?) ZETS1L000T0012 (S09011)
', '')
      ,array('beta', 'ark ac 50
rr 50 std. offroad
rr 50 motard track
', '')
      ,array('black\'n\'roll', 's4800
', '')
      ,array('cpi', 'hussar
popcorn
oliver
oliver city
formula r
aragon GP
gtr
', '')
      ,array('daelim', 's-five
', '')
      ,array('derbi', 'predator
senda
senda r xtreme
senda sm xtreme
atlantis bullet/city
GP1
GPR racing
', '')
      ,array('fantic', 'chopper
', '')
      ,array('generic', 'onyx
epico 50
race 50
ideo 50
xor 2
trigger 50 sm
trigger 50 x
', '')
      ,array('giantco', 'G-10
lambros
spartan
', '')
      ,array('gilera', 'RCR
SMT
stalker
stalker naked
runner
runner dd (double disc)
runner sp
runner purejet (indsprøjtning)
dna
storm
touring
', '')
      ,array('hero majestic / effy', 'cityflex deluxe
', '')
      ,array('honda', 'wallaroo
melody
cd50
camino
sfx
sky
sky vetro
', '')
      ,array('italjet', 'dragster
formula
jetset
torpedo
velocifero
', '')
      ,array('keeway', 'f-act
f-act nkd
flash
focus
hurricane
matrix
swan (Leone Swan)
x-ray
', '')
      ,array('kreidler', 'florett
hiker 5000 sp.
galatica 50 dd
easy rider
', '')
      ,array('kymco', 'fever zx
people
super 9
vitality
', '')
      ,array('leone', 'swan (Keeway Swan)
', '')
      ,array('malaguti', 'drakon
F12
', '')
      ,array('peugeot', 'ludix
ludix one
ludix pro
fox
tkr
tkr furious
speedfight 3
speedfight 3 rs
jetforce c-tech rcup
vivacity
new vivacity
elystar advantage
', '')
      ,array('PGO', 'hot (classic, 12", SP, naked)
big max (classic, 12", SP, naked)
P3 knallert
comet
tornado
g-max
it\'s magic
libra
x-hot
ligero
ligero rs
galaxy
pmx sport
pmx naked
P3 magnum
trike
dr big
t-rex (classic, SP)
rodoshow
new ligero
PSE (elektrisk)
', '')
      ,array('piaggio', 'fly
ape
zip
new zip
NRG dt ac
NRG power
typhoon
liberty s
', '')
      ,array('puch', 'maxi
monza
ms50
yz50
grand prix
', '')
      ,array('rieju', 'tango 50
rs2 50 matrix
rs2 pro 50
rs3
mrt pro 50 sm
', '')
      ,array('sachs', 'sx1
', '')
      ,array('suzuki', 'FZ50
RMX
SMX
katana
k50
dm50 (samurai)
street magic
estilete
', '')
      ,array('sym', 'dd
jet euro x
jet sport x s
jet sport x r
jet sport x sr
', '')
      ,array('tgb', '101 r
104 t
delivery
303 r hawk
r x
', '')
      ,array('tomos', 'classic
standard
', '')
      ,array('vespa', 'ciao
LX
s
lxv
et
', '')
      ,array('vga', 'digita (Longjia Firefly LJ50QT-2L)
grido (Longjia Grido LJ50QT-H)
exactly (Longjia LJ50QT-K)
versus (LJ50QT-F)
', '')
      ,array('yamaha', 'Why
Neos
Jog
Jog R
FS1 (2 gear og 4 gear)
aerox
aerox r
aerox race replica
tzr 50
bws
pasola
slider naked
sting
dt 50 r
AXIS50 (YA 50R) type 4 S J
', '')
      ,array('zico', 'simpli city
', '')
   )
)
.'
'

);

$databaseright = array(

//'emner på siden' => array()

);

echo bygsiden($title, $overskrift, $metadescription, $databaseright, true, true, $databasecenter, true, true, true);

?>
