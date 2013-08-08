// javascript for http://scootergrisen.dk



function fjern(formnavn, tegn) {

   'use strict';

   if (tegn === "F") {

      formnavn.bareetfelt.value = "";

   } else {

      formnavn.bareetfelt.value += tegn;

   }

}



function visParentNoget(el) {

   'use strict';

   var tekstenderskalskjulesogvises = el.parentNode.getElementsByClassName("kode")[0];

   if (!tekstenderskalskjulesogvises.style.display) {

      tekstenderskalskjulesogvises.style.display = "block";

   }

   if (tekstenderskalskjulesogvises.style.display === "none") {

      tekstenderskalskjulesogvises.style.display = "block";
      el.innerHTML = "Skjul";

   } else if (tekstenderskalskjulesogvises.style.display === "block") {

      tekstenderskalskjulesogvises.style.display = "none";
      el.innerHTML = "Vis";

   }

}


function visemailadresse() {

   'use strict';

   var tekst =
        '<script type="text/javascript">'
      + '// <![CDATA[' + '\r\n'
      + 'document.write(\'<a href=\"\');'
      + 'document.write(\'&#109;a&#105;&#108;&#116;&#111;&#58;\');'
      + 'document.write(\'sc&#111;&#111;t&#101;rg&#114;is&#101;n\');'
      + 'document.write(\'&#64;&#103;m\');'
      + 'document.write(\'a&#105;&#108;\');'
      + 'document.write(\'&#46;&#99;&#111;&#109;\');'
      + 'document.write(\'\">\');'
      + 'document.write(\'sc&#111;&#111;t&#101;rg&#114;is&#101;n\');'
      + 'document.write(\'&#64;&#103;m\');'
      + 'document.write(\'a&#105;&#108;\');'
      + 'document.write(\'&#46;&#99;&#111;&#109;\');'
      + 'document.write(\'<\/a>\')'
      + '// ]]>' + '\r\n'
      + '</script>'
      + '<noscript><div style="display: none;">ingen javascript</div></noscript>';

   document.write(tekst);

}



function visemailadresse2() {

   'use strict';

   if(document.getElementsByClassName){

      var elementer = document.getElementsByClassName('foratundgaspam');

      var tekst =
           '<a href=\"'
         + '&#109;a&#105;&#108;&#116;&#111;&#58;'
         + 'sc&#111;&#111;t&#101;rg&#114;is&#101;n'
         + '&#64;&#103;m'
         + 'a&#105;&#108;'
         + '&#46;&#99;&#111;&#109;'
         + '\">'
         + 'sc&#111;&#111;t&#101;rg&#114;is&#101;n'
         + '&#64;&#103;m'
         + 'a&#105;&#108;'
         + '&#46;&#99;&#111;&#109;'
         + '<\/a>';
   
      for (var i = 0, length = elementer.length; i < length; i++) {
   
         elementer[i].innerHTML = tekst;
   
      }

   }

}



/*
if (window.addEventListener) {

   window.addEventListener('load', visemailadresseCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCc, false);

} else if (window.attachEvent) {

   window.attachEvent('onload', visemailadresseCCCCCCCCCCCCCCCc);

}
*/
