// Javascript



var datamappe = 'scooterhjemmeside';



// dummy kode for at undgå "'console' is undefined" fejl når bruger console.log() og browseren ikke har den
//if (!(window.console && console.log)) {
//
//   console = {
//      log: function() {},
//      debug: function() {},
//      info: function() {},
//      warn: function() {},
//      error: function() {}
//   };
//
//}



function fjern(formnavn, tegn) {

   'use strict';

   if (tegn === 'F') {

      formnavn.bareetfelt.value = '';

   } else {

      formnavn.bareetfelt.value += tegn;

   }

}



function visParentNoget(el) {

   'use strict';

   var tekstenderskalskjulesogvises = null;

   if (document.getElementsByClassName) {

      tekstenderskalskjulesogvises = el.parentNode.getElementsByClassName('kode')[0];

   } else {

      if (typeof gemnogetmederror === 'function') {

         gemnogetmederror('Browser understøtter ikke document.getElementsByClassName');

      }

   }

   if (tekstenderskalskjulesogvises) {

      if (!tekstenderskalskjulesogvises.style.display) {

         tekstenderskalskjulesogvises.style.display = 'block';

      }

      if (tekstenderskalskjulesogvises.style.display === 'none') {

         tekstenderskalskjulesogvises.style.display = 'block';
         el.innerHTML = 'Skjul';

      } else if (tekstenderskalskjulesogvises.style.display === 'block') {

         tekstenderskalskjulesogvises.style.display = 'none';
         el.innerHTML = 'Vis';

      }

   }

}



function visemailadresse() {

   'use strict';

   var elementnavn = 'span',
       classnavn = 'foratundgaspam',
       i = null,
       storrelse = null,
       elementer = null,
       tekst =
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
         + '<\/a>'
      ;

   if (document.querySelectorAll) {

      elementer = document.querySelectorAll('.' + classnavn);

      if (elementer && (elementer.length > 0)) {

         for (i = 0, storrelse = elementer.length; i < storrelse; i++) {

            elementer[i].innerHTML = tekst;

         }

      }

   } else {

      // document.getElementsByClassName virker ikke i IE8
      // document.querySelectorAll virker ikke før IE8

      elementer = document.getElementsByTagName(elementnavn);

      if (elementer && (elementer.length > 0)) {

         for (i = 0, storrelse = elementer.length; i < storrelse; i++) {

            if (elementer[i].className.toLowerCase().indexOf(classnavn) > -1) {

               elementer[i].innerHTML = tekst;

               if (typeof gemnogetmederror === 'function') {

                  gemnogetmederror('Browser understøtter ikke querySelectorAll. Brugte alternativ metode til at vise e-mail');

               }

            }

         }

      }

   }

}



function tilbagelinkclick(event) {

   'use strict';

   event.preventDefault();
   history.back();

}



function opdaterlinkclick(event) {

   'use strict';

   event.preventDefault();
   location.reload(true);

}



function languageformsubmit() {

   'use strict';

   this.form.submit();

}


function stemop(event) {

   'use strict';

   event.preventDefault();
   rate('5', window.location.pathname);

}



function stemned(event) {

   'use strict';

   event.preventDefault();
   rate('1', window.location.pathname);

}


function init_hjemmeside_addeventlistener() {

   'use strict';

   var tilbagelink,
       opdaterlink,
       languageselect,
       stemoplink,
       stemnedlink;

   visemailadresse();

   if (document.getElementById('tilbagelink')) {

      tilbagelink = document.getElementById('tilbagelink');
      tilbagelink.addEventListener('click', tilbagelinkclick, false);

   }

   if (document.getElementById('opdaterlink')) {

      opdaterlink = document.getElementById('opdaterlink');
      opdaterlink.addEventListener('click', opdaterlinkclick, false);

   }

   if (document.getElementById('languageselect')) {

      languageselect = document.getElementById('languageselect');
      languageselect.addEventListener('change', languageformsubmit, false);

   }

   if (document.getElementById('stemoplink')) {

      stemoplink = document.getElementById('stemoplink');
      stemoplink.addEventListener('click', stemop, false);

   }

   if (document.getElementById('stemnedlink')) {

      stemnedlink = document.getElementById('stemnedlink');
      stemnedlink.addEventListener('click', stemned, false);

   }


}



function init_hjemmeside_attachevent() {

   'use strict';

   var tilbagelink,
       opdaterlink,
       languageselect,
       stemoplink,
       stemnedlink;

   visemailadresse();

   if (document.getElementById('tilbagelink')) {

      tilbagelink = document.getElementById('tilbagelink');
      tilbagelink.attachEvent('onclick', tilbagelinkclick);

   }

   if (document.getElementById('opdaterlink')) {

      opdaterlink = document.getElementById('opdaterlink');
      opdaterlink.attachEvent('onclick', opdaterlinkclick);

   }

   if (document.getElementById('languageselect')) {

      languageselect = document.getElementById('languageselect');
      languageselect.attachEvent('onchange', languageformsubmit);

   }

   if (document.getElementById('stemoplink')) {

      stemoplink = document.getElementById('stemoplink');
      stemoplink.attachEvent('onclick', stemop);

   }

   if (document.getElementById('stemnedlink')) {

      stemnedlink = document.getElementById('stemnedlink');
      stemnedlink.attachEvent('onclick', stemned);

   }


}



if (window.addEventListener) {

   window.addEventListener('load', init_hjemmeside_addeventlistener, false);

} else if (window.attachEvent) {

   window.attachEvent('onload', init_hjemmeside_attachevent);

}



function supports_canvas() {

   'use strict';

   return !!document.createElement('canvas').getContext;

}



function supports_audio() {

   'use strict';

   return !!document.createElement('audio').canPlayType;

}



function supports_video() {

   'use strict';

   return !!document.createElement('video').canPlayType;

}



function supports_track() {

   'use strict';

   return 'src' in document.createElement('track');

}



function volumemutexxx(afspillerid, mutebilledeid, volumestatusid, nyvolumeid) {

   'use strict';

   var xxx_afspiller = document.getElementById(afspillerid),
       xxx_mutebilledeid = document.getElementById(mutebilledeid),
       xxx_volumestatus = document.getElementById(volumestatusid),
       xxx_nyvolumeid = document.getElementById(nyvolumeid);

   if (xxx_afspiller.muted) {

      xxx_afspiller.muted = false;
      /*xxx_volumestatus.innerHTML = 'Muted';*/
      xxx_volumestatus.value = 'Muted';
      xxx_mutebilledeid.src = '/' + datamappe + '/billeder/afspiller/afspiller_volume_muted.png';

   } else {

      xxx_afspiller.muted = true;
      /*xxx_volumestatus.innerHTML = xxx_afspiller.volume.toFixed(1) * 100 + ' %';*/
      xxx_volumestatus.value = xxx_afspiller.volume.toFixed(1) * 100 + ' %';
      xxx_mutebilledeid.src = '/' + datamappe + '/billeder/afspiller/afspiller_volume_unmuted.png';

   }

}



function opdatervolumestatus(afspillerid, volumestatusid, muteknapid, mutebilledeid) {

   'use strict';

   var xxx_afspiller = document.getElementById(afspillerid),
       xxx_volumestatus = document.getElementById(volumestatusid),
       xxx_muteknapid = document.getElementById(muteknapid), // TypeError: 'null' is not an object (måske fordi <button id="?"> er efter javascript koden, men nu er brugt window load så måske rettet)
       xxx_mutebilledeid = document.getElementById(mutebilledeid);

   if (xxx_afspiller.muted) {

      xxx_volumestatus.innerHTML = 'Muted';
      xxx_muteknapid.title = 'Mute';
      xxx_mutebilledeid.title = 'Mute';
      xxx_mutebilledeid.src = '/' + datamappe + '/billeder/afspiller/afspiller_volume_muted.png';

   } else {

      xxx_volumestatus.innerHTML = xxx_afspiller.volume.toFixed(1) * 100 + ' %';
      xxx_muteknapid.title = 'Unmute'; // TypeError: 'null' is not an object
      xxx_mutebilledeid.title = 'Unmute';
      xxx_mutebilledeid.src = '/' + datamappe + '/billeder/afspiller/afspiller_volume_unmuted.png';

   }

}



function opdaternoget(afspillerid, muteknapid, mutebilledeid, volumestatusid) {

   'use strict';

   var xxx_afspiller = document.getElementById(afspillerid),
       xxx_muteknap = document.getElementById(muteknapid), // Giver nogen gange fejl : TypeError: 'null' is not an object
       xxx_mutebillede = document.getElementById(mutebilledeid),
       xxx_volumestatus = document.getElementById(volumestatusid);

   if (xxx_afspiller.muted) {

      xxx_muteknap.title = 'Unmute';
      xxx_volumestatus.innerHTML = 'Muted';
      xxx_mutebillede.src = '/' + datamappe + '/billeder/afspiller/afspiller_volume_muted.png';
      xxx_mutebillede.title = 'Unmute';

   } else {

      xxx_muteknap.title = 'Mute';
      xxx_volumestatus.innerHTML = (xxx_afspiller.volume * 100).toFixed(0) + ' %';
      xxx_mutebillede.src = '/' + datamappe + '/billeder/afspiller/afspiller_volume_unmuted.png';
      xxx_mutebillede.title = 'Mute';

   }

}



function xxx_processbar(afspillerid, processbarid) {

   'use strict';

   var lyd = document.getElementById(afspillerid),
       bar = document.getElementById(processbarid);

   function progressBar() {

      if (bar.getContext) {

         var elapsedTime = lyd.currentTime,
             ctx = bar.getContext('2d'),
             //fWidth = (elapsedTime / lyd.duration) * (bar.clientWidth),
             fWidth = (elapsedTime / lyd.duration) * (bar.width),
             //gradientbar = ctx.createLinearGradient(0, 0, 0, bar.clientHeight);
             gradientbar = ctx.createLinearGradient(0, 0, 0, bar.height);

         //ctx.clearRect(0, 0, bar.clientWidth, bar.clientHeight);
         ctx.clearRect(0, 0, bar.width, bar.height);

         gradientbar.addColorStop(0, '#ffffff'); // rød
         gradientbar.addColorStop(0.50, '#888888');
         gradientbar.addColorStop(0.80, '#888888');
         gradientbar.addColorStop(1, '#000000'); // blå

         ctx.fillStyle = gradientbar;

         if (fWidth > 0) {

            //ctx.fillRect(0, 0, fWidth, bar.clientHeight);
            ctx.fillRect(0, 0, fWidth, bar.height);

         }

      }

   }



   function initEvents() {

      if (lyd.addEventListener) {

         lyd.addEventListener('timeupdate', progressBar, true);

      }

      if (bar.addEventListener) {

         bar.addEventListener('mousedown', function(evt) {

            try {

               var offs = 0;

               if (!evt) {

                  evt = window.event;

               }

               if (evt.offsetX) {

                  offs = evt.offsetX;

               } else if (evt.layerX) {

                  offs = evt.layerX;
                  offs -= bar.offsetLeft; // JUUUUUUUHUUUUUUUUUU dejligt endelige virker det præcist i Firefox. Super !

               }

            // evt.offsetX - Safari, Chrome, Internet explorer
            // evt.width
            // evt.layerX - Safari forskudt, Chrome første klik forskudt ellers rigtigt
            // evt.pageX
            // evt.screenX
            // clientX
            // document.body.scrollLeft
            // document.documentElement.scrollLeft

            // clientWidth
            // offsetLeft
            // offsetTop

               if (lyd.readyState !== 0) {

                  lyd.currentTime = lyd.duration * (offs / bar.offsetWidth);
                  lyd.play();

               } else {

                  lyd.load();

                  lyd.addEventListener('loadedmetadata', function() {
                     lyd.currentTime = lyd.duration * (offs / bar.offsetWidth);
                     lyd.play();
                  }, false);

                  lyd.play(); // Ellers gider Firefox ikke

               }

            } catch (err) {

               console.log('Error:' + err);

            }

         }, true);

      }

   }


   if (window.addEventListener) {

      window.addEventListener('DOMContentLoaded', initEvents, false);

   }

}



function xxx_processbarb(afspillerid, processbarid) {

   'use strict';

   var i,
       lyd = document.getElementById(afspillerid),
       bar = document.getElementById(processbarid),
       gradientbar = null,
       storrelse = null;

   function progressBarb() {

      if (bar.getContext) {

         if (lyd.buffered) {

            var ctx = bar.getContext('2d'),
                r = lyd.buffered,
                start = null,
                end = null,
                bredde = null;

            ctx.clearRect(0, 0, bar.width, bar.height);
            gradientbar = ctx.createLinearGradient(0, 0, 0, bar.height);
            gradientbar.addColorStop(0, '#ffffff');
            gradientbar.addColorStop(0.10, '#ff9999');
            gradientbar.addColorStop(0.90, '#ff0000');
            gradientbar.addColorStop(1, '#000000');
            ctx.fillStyle = gradientbar;

            for (i = 0, storrelse = r.length; i < storrelse; i++) {

               start = r.start(i)/lyd.duration * bar.width;
               end = r.end(i)/lyd.duration * bar.width;
               bredde = end-start;
               ctx.fillRect(start, 0, bredde, bar.height);

            }

         }

      }

   }



   function initEventsb() {

      if (lyd.addEventListener) {

         lyd.addEventListener('progress', progressBarb, true);

      }

   }


   if (window.addEventListener) {

      window.addEventListener('DOMContentLoaded', initEventsb, false);

   }

}



function afspiller_playpause(afspillerid) {

   'use strict';

   var afspiller = document.getElementById(afspillerid);

   if (afspiller.paused) {

      afspiller.play();

   } else {

      afspiller.pause();

   }

}



function understotter_attributitag(attribut, tag) {

   'use strict';

   return attribut in document.createElement(tag);

}



function rate(rating, url) {

   'use strict';

   var xhr = new XMLHttpRequest();
   xhr.open('GET', '/' + datamappe + '/php/rate2.php?rating=' + rating + '&url=' + url, true);

   xhr.onreadystatechange = function() {

      if (xhr.readyState === 4 && xhr.status === 200) {

         var response = xhr.responseText;

         if (response === 'fejl') {

            console.log('Der skete en fejl så der blev ikke stemt');

         } else if (response === 'X') {

            console.log('Denne IP har stemt sidst');
            document.getElementById('stemtal').innerHTML = 'X';
            document.getElementById('stemekstrabesked').innerHTML = '<div class="harstemtfor">Du har allerede stemt på den viste side.</div>';
            document.getElementById('stemnedlink').style.visibility = 'hidden';
            document.getElementById('stemoplink').style.visibility = 'hidden';

         } else {

            console.log('Stemme blev sendt afsted... det er dog ikke ensbetydne med at den blev modtaget og gemt');
            document.getElementById('stemekstrabesked').innerHTML = '<div class="harikkestemtfor">Du har nu stemt på den viste side</div>';
            document.getElementById('stemtal').innerHTML = response.replace('.', ',');
            document.getElementById('stemnedlink').style.visibility = 'hidden';
            document.getElementById('stemoplink').style.visibility = 'hidden';

            if (document.getElementById('ratemeter')) {

               document.getElementById('ratemeter').value = (100 / 5 * response);

            }

         }

      }

   };

   xhr.send();

}
