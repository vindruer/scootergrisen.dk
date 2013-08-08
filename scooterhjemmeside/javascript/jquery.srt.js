/*

   Scootergrisen's comments starts here : æøå

   This is a modified version of "jQuery srt 0.1".
   Let call it "jQuery srt 0.1.scootergrisen.1" or something.

   Its used to display subtitles from a .srt file under af <video> or <audio> for example.
   This can be used until browsers start supporting the <track> element.
   The smart thing is that you can use the exact same .srt files now with this script and when the <track> element works in browsers.

   There was som "bugs" in the original code and i could not find any updates so i changes some things.

   It seems to work now i both Firefox, Opera, Safari, Chrome and Internet explorer.
   So hurra for that :O)

   Actualy it worked fine i Firefox and Safari from the start but in other browsers it diddent work so good.
   There was strange behavior because some text was showing up and other text was not.

   The original script took the starting time for each text and passed it
   though toSeconds() and used that number as and index in the subtitles array.

      00:00:11,000 (became 11 after toSeconds())

   That was fine but if you used milleseconds like this :

      00:00:11,500 (became 11.5 after toSeconds() but this none-integer-number is not allowed as a index i some browsers i guess)

   I changed the subtitles array so it uses index numbers 0, 1, 2, 3, 4, etc instead of using the starttimes fom the subtitle file (.srt)

   Also there was a problem with the variable "i" that was used in a loop and also used later causing it to always be "3".
   I renamed the "i" variable to "loop" in for().

   Also i added a <br/> so that linebrakes in the text also breaks on a HTML page.

   Scootergrisen's comments ends here.

*/

/*
 * jQuery srt
 *
 * version 0.1 (November 28, 2008)
 *
 * Dual licensed under the MIT and GPL licenses:
 *   http://www.opensource.org/licenses/mit-license.php
 *   http://www.gnu.org/licenses/gpl.html
 */
/*
  usage:
    <video src="example.ogg" id="examplevideo" />
    <div class="srt" data-video="examplevideo" data-srt="example.srt"></div>

  jquery.srt.js will try to load subtitles in all elements with 'srt' class.
  'data-video' atribute is used to link to the related video,
  if no data-srt is provided, the contents of the div is parsed as srt.
*/

$(document).ready(function() {
  function toSeconds(t) {
    var s = 0.0
    if(t) {
      var p = t.split(':');
      for(loop=0;loop<p.length;loop++)
        s = s * 60 + parseFloat(p[loop].replace(',', '.'))
    }
    return s;
  }
  function strip(s) {
    return s.replace(/^\s+|\s+$/g,"");
  }
  function playSubtitles(subtitleElement) {

    var videoId = subtitleElement.attr('data-video');
    var srt = subtitleElement.text();
    subtitleElement.text('');
    srt = srt.replace(/\r\n|\r|\n/g, '\n')
    
    var xxx = 0;
    var subtitles = {};
    srt = strip(srt);
    var srt_ = srt.split('\n\n');
    for(s in srt_) {

        st = srt_[s].split('\n');

        if(st.length >=2) {
          n = st[0];
          i = strip(st[1].split(' --> ')[0]);
          o = strip(st[1].split(' --> ')[1]);
          t = st[2];
          if(st.length > 2) {
            for(j=3; j<st.length;j++)
              t += '<br/>\n'+st[j]; // <-------------------- added <br/>
          }

          is = toSeconds(i);
          os = toSeconds(o);
          subtitles[xxx] = {i: i, o: o, t: t}; // <----------------- use index like 0, 1, 2, 3, 4, etc insted of the starttime of text
          xxx++;
        }

    }
    var currentSubtitle = -1;
    var ival = setInterval(function() {
      var currentTime = document.getElementById(videoId).currentTime;
      var subtitle = -1;

      for(s in subtitles) {
          www = toSeconds(subtitles[s].i);
          wwwo = toSeconds(subtitles[s].o);

        if(www > currentTime){

            break

         }else{

               subtitle = s;

         }

      }

      if(subtitle != -1){

         qi = toSeconds(subtitles[subtitle].i);
         qo = toSeconds(subtitles[subtitle].o);

         if(subtitle != currentSubtitle) {

            subtitleElement.html(subtitles[subtitle].t);
            currentSubtitle=subtitle;

         }
         
         if(qo < currentTime) {

            subtitleElement.html('');

         }

      }

    }, 100);
  }
  $('.srt').each(function() {
    var subtitleElement = $(this);
    var videoId = subtitleElement.attr('data-video');
    if(!videoId) return;
    var srtUrl = subtitleElement.attr('data-srt');
    if(srtUrl) {
      $(this).load(srtUrl, function (responseText, textStatus, req) { playSubtitles(subtitleElement)})
    } else {
      playSubtitles(subtitleElement);
    }

  });


});