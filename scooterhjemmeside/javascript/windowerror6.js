// http://www.the-art-of-web.com/javascript/ajax-onerror/

// Uncaught TypeError: Cannot read property 'documentElement' of null

function AjaxRequest()
{var req;var method="GET";var nocache=false;var handler;this.loadXMLDoc=function(url,params)
{if(window.XMLHttpRequest){try{req=new XMLHttpRequest();}catch(e){req=false;}}else if(window.ActiveXObject){try{req=new ActiveXObject("Msxml2.XMLHTTP");}catch(e){try{req=new ActiveXObject("Microsoft.XMLHTTP");}catch(e){req=false;}}}
if(req){if(!handler)handler=processReqChange;req.onreadystatechange=handler;if(nocache){params+=(params!='')?'&'+(new Date()).getTime():(new Date()).getTime();}
if(method=="POST"){req.open("POST",url,true);req.setRequestHeader('Content-Type','application/x-www-form-urlencoded');req.send(params);}else{if(params)url+="?"+ params;req.open(method,url,true);req.send(null);}
return true;}
return false;}
this.setMethod=function(newmethod){method=newmethod.toUpperCase();}
this.nocache=function(){nocache=true;}
this.setHandler=function(fn){handler=fn;}
this.getResponse=function(){return req;}
var getNodeValue=function(parent,tagName)
{var node=parent.getElementsByTagName(tagName)[0];return(node&&node.firstChild)?node.firstChild.nodeValue:'';}
var processReqChange=function()
{if(req.readyState==4&&req.status==200){var response=req.responseXML.documentElement;var commands=response.getElementsByTagName('command');for(var i=0;i<commands.length;i++){method=commands[i].getAttribute('method');switch(method)
{case'alert':var message=getNodeValue(commands[i],'message');window.alert(message);break;case'setvalue':var target=getNodeValue(commands[i],'target');var value=getNodeValue(commands[i],'value');if(target&&value!=null){document.getElementById(target).value=value;}
break;case'setdefault':var target=getNodeValue(commands[i],'target');if(target){document.getElementById(target).value=document.getElementById(target).defaultValue;}
break;case'focus':var target=getNodeValue(commands[i],'target');if(target){document.getElementById(target).focus();}
break;case'setcontent':var target=getNodeValue(commands[i],'target');var content=getNodeValue(commands[i],'content');if(target&&(content!=null)){document.getElementById(target).innerHTML=content;}
break;case'setstyle':var target=getNodeValue(commands[i],'target');var property=getNodeValue(commands[i],'property');var value=getNodeValue(commands[i],'value');if(target&&property&&(value!=null)){document.getElementById(target).style[property]=value;}
break;case'setproperty':var target=getNodeValue(commands[i],'target');var property=getNodeValue(commands[i],'property');var value=getNodeValue(commands[i],'value');if(value=="true")value=true;if(value=="false")value=false;if(target){document.getElementById(target)[property]=value;}
break;default:window.console.log("Error: unrecognised method '"+ method+"' in processReqChange()");}}}}}

function gemnogetmederror(msg, url, line) {

   'use strict';

   if (  url
      && url.indexOf('http://scootergrisen.dk') !== 0
      && url.indexOf('http://scootergrisen.localhost') !== 0
      && url.indexOf('http://netkoder.dk') !== 0
      && url.indexOf('http://netkoder.localhost') !== 0
   ) {
      return false;
   }

   var filename = "/scooterhjemmeside/php/logerror.php",
       params = null,
       req = null,
       i = null,
       l = null,
       useragent = null,
       // If the error is from these 3rd party script URLs, we ignore
       // We could also just ignore errors from all scripts that aren't our own
       ignorerurls = [
          'http://cdnloader.com',
          'http://www.chart.dk/js/unified.asp',
          'http://translate.googleusercontent.com',
          'http://cdncache-a.akamaihd.net',
          'https://cdncache-a.akamaihd.net',
          'http://cdncache1-a.akamaihd.net',
          'https://cdncache1-a.akamaihd.net',
          'http://cdncache3-a.akamaihd.net',
          'https://cdncache3-a.akamaihd.net',
          'http://ajax.googleapis.com',
          'http://www.superfish.com',
          'https://apis.google.com',
          'http://i.linkuryjs.info/kury/javascript.js',
          'http://srv.mzcdn.com/',
          'http://connect.facebook.net/da_DK/all.js#xfbml=1'
       ],
       // If the error matches these, ignore.
       ignorerbeskeder = [
          'Uncaught ReferenceError: jigsaw is not defined',
          'Uncaught TypeError: Cannot read property \'tagName\' of null',
          'Error: Permission denied to access property \'toString\'', // Firefox fejl : Læs mere : http://www-01.ibm.com/support/docview.wss?uid=swg21370430
          'InvalidStateError: An attempt was made to use an object that is not, or is no longer, usable', // Firefox 20.0.1 : input.stepUp() input.stepDown()
          '\'hs\' er ikke defineret', // sikkert fejl fra highslide
          'hs er udefinert', // sikkert fejl fra highslide
          'Script error.', // ved ikke hvor denne fejl kommer fra
          'Uncaught exception: ReferenceError: Undefined variable: visemailadresse3', // visemailadresse3 findes ikke mere men kommer stadig fejlbeskeder om det, måske en bruger som har en cached HTML side
          'Uncaught ReferenceError: jQuery is not defined',
          'ReferenceError: conduitPage is not defined',
          'TypeError: \'undefined\' is not a function',
          'Uncaught Error: Error connecting to extension pioclpoplcdbaefihamjohnefbikjilc',
          'Uncaught Error: Error connecting to extension nonjdcjchghhkdoolnlbekcfllmednbl'
       ],
       // ignorer disse uderagents. bots osv
       ignoreruseragents = [
          'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',
          'Mozilla/5.0 AppleWebKit/537.4 (KHTML, like Gecko; compatible; Googlebot/2.1;  http://www.google.com/bot.html) Safari/537.4'
       ];

   if (msg !== undefined && url !== undefined && line !== undefined) {

   for (i = 0, l = ignorerurls.length; i < l; i++) {
      if (url.indexOf(ignorerurls[i]) === 0) {
         return false;
      }
   }

   for (i = 0, l = ignorerbeskeder.length; i < l; i++) {
      if (msg.indexOf(ignorerbeskeder[i]) > -1) {
         return false;
      }
   }

   if (navigator.userAgent) {

      useragent = navigator.userAgent;

   }

   for (i = 0, l = ignoreruseragents.length; i < l; i++) {
      if (useragent.indexOf(ignoreruseragents[i]) > -1) {
         return false;
      }
   }

   if (line !== 0 && line !== 1) {

      if (encodeURIComponent) {

         params = "msg=" + encodeURIComponent(msg)
                + "&url=" + encodeURIComponent(url)
                + "&line=" + line
                + "&useragent=" + useragent;

         req = new AjaxRequest();

         req.setMethod("POST");

         req.loadXMLDoc(filename, params);

      }

   }

   }

   return false; // If you instead return a value of false, your error handler will be called and then the browser will respond to the error in it's own way.

}

window.onerror = gemnogetmederror; /* kan give parameter 2 og 3 i modsætning til addeventli.... som måske giver undefined */

/*
if (window.addEventListener) {

   window.addEventListener('error', gemnogetmederror, false);

} else if (window.attachEvent) {

   window.attachEvent('onerror', gemnogetmederror);

} else {


}
*/
