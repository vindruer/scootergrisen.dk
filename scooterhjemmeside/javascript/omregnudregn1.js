// Javascript for http://scootergrisen.dk/scooterhjemmeside/omregn.php



// enheder
var psi = "PSI",
    kgcm2 = "Kg/cm²",
    bar = "Bar",
    kpascal = "Kpascal",
    nm = "Nm",
    lbft = "Lb-Ft",
    kgm = "Kg-m";



function lavom(valg, data) {

   'use strict';

   if (valg === "fra") {

      data += ''; // konverter til string
      data = data.replace(/\,/, "."); // erstat komma med punktum
      data = parseFloat(data, 10); // antal tal

   }

   if (valg === "til") {

      data = data.toFixed(3);
      data += '';
      data = data.replace(/\./, ",");

   }

   return data;

}



function udregn_olieblanding(formnavn) {

   'use strict';

   var volumea = 0,
       volumeb = 0,
       dataind = formnavn.olieblanding_dataind.value;

   dataind = lavom("fra", dataind);

   volumea = 'x';
   volumeb = 'x';

   if (isFinite(volumea) && isFinite(volumeb)) {

      volumea = lavom("til", volumea);
      volumeb = lavom("til", volumeb);

      volumea = "1:" + volumea;
      volumeb += " %";

   } else {

      volumea = "";
      volumeb = "";

   }

   formnavn.olieblanding_dataud1.value = volumea;
   formnavn.olieblanding_dataud2.value = volumeb;

}



function udregn_volume(formnavn) {

   'use strict';

   var volume = 0,
       boring = formnavn.dataind_boring.value,
       slaglengde = formnavn.dataind_slaglengde.value;

   boring = lavom("fra", boring);
   slaglengde = lavom("fra", slaglengde);

   volume = (Math.PI / 4 * Math.pow(boring, 2) * slaglengde / 1000);

   if (isFinite(volume)) {

      volume = lavom("til", volume);
      volume += " cm³";

   } else {

      volume = "";

   }

   formnavn.dataud_volume.value = volume;

}



function udregn_forbvolume(formnavn) {

   'use strict';

   var forbvolume = 0,
       slagvolume = formnavn.forb_dataind_slagvolume.value,
       kompression = formnavn.forb_dataind_kompression.value;

   slagvolume = lavom("fra", slagvolume);
   kompression = lavom("fra", kompression);

   if (isFinite(slagvolume) && isFinite(kompression)) {

      forbvolume = (slagvolume / (kompression - 1));

      if (isFinite(forbvolume)) {

         forbvolume = lavom("til", forbvolume);
         forbvolume += " cm³";

      } else {

         forbvolume = "";

      }


   } else {

      forbvolume = "";

   }

   formnavn.forb_dataud_forbvolume.value = forbvolume;

}



function udregn_kompression(formnavn) {

   'use strict';

   var kompression = 0,
       forbvolume = formnavn.kompression_dataind_forbvolume.value,
       slagvolume = formnavn.kompression_dataind_slagvolume.value;

   forbvolume = lavom("fra", forbvolume);
   slagvolume = lavom("fra", slagvolume);

   if (isFinite(forbvolume) && isFinite(slagvolume)) {

      kompression = ((forbvolume + slagvolume) / forbvolume);

      if (isFinite(kompression)) {

         kompression = lavom("til", kompression);
         kompression += ':1';

      } else {

         kompression = "";

      }


   } else {

      kompression = "";

   }

   formnavn.kompression_dataud_kompression.value = kompression;

}



function omregn_benzinforbrug(formnavn) {

   'use strict';

   if (formnavn.dataind.value) {

      var fraogtilvalg = formnavn.fraogtil.value,
          res1 = 0,
          tal = formnavn.dataind.value;

      tal = lavom("fra", tal);

      switch (fraogtilvalg) {

      // ? -> MPG (Imp)
      // MPGIMP ≈ (4.546 / 1.609) * KMPL ≈ 2.825 * KMPL
      // MPGIMP ≈ 100 * (4.546 / 1.609) / LPHKM ≈ 282 / LPHKM
      // MPGIMP ≈ 0.833 * MPGUS

      // ? -> MPG (US)
      // MPGUS ≈ (3.785 / 1.609) * KMPL ≈ 2.352 * KMPL
      // MPGUS ≈ 100 * (3.785 / 1.609) / LPHKM ≈ 235 / LPHKM
      // MPGUS ≈ 1.201 * MPGIMP

      // ? -> km/L
      // KMPL ≈ (1.609 / 4.546) * MPGIMP ≈ 0.354 * MPGIMP
      // KMPL ≈ (1.609 / 3.785) * MPGUS ≈ 0.425 * MPGUS
      // KMPL = 100 / LPHKM

      // ? -> L/100 km
      // LPHKM ≈ 100 * (4.546 / 1.609) / MPGIMP ≈ 282 / MPGIMP
      // LPHKM ≈ 100 * (3.785 / 1.609) / MPGUS ≈ 235 / MPGUS
      // LPHKM = 100 / KMPL (der er vist fejl, skulle vist være * i stedet for /)

      // lpg   = liters per gallon (Imperial) = 4.54609188
      // kmpm  = kilometers per mile = 1.609344 

      // omregner mpg til liter pr mil

         case "mpgimptilmpgus":

            res1 = 0.833 * tal;
            break;

         case "mpgimptilkml":

            res1 = (1.609 / 4.546) * tal;
            break;

         case "mpgimptill100km":

            res1 = 282.5357364822871 / tal;
            break;



         case "mpgustilmpgimp":

            res1 = 1.201 * tal;
            break;

         case "mpgustilkml":

            res1 = (1.609 / 3.785) * tal;
            break;

         case "mpgustill100km":

            res1 = 235 / tal;
            break;



         case "kmltilmpgimp":

            res1 = (4.546 / 1.609) * tal;
            break;

         case "kmltilmpgus":

            res1 = (3.785 / 1.609) * tal;
            break;

         case "kmltill100km":

            res1 = 100 / tal;
            break;




         case "l100kmtilmpgimp":

            res1 = 282.5357364822871 / tal;
            break;

         case "l100kmtilmpgus":

            res1 = 235.2392790553139 / tal;
            break;

         case "l100kmtilkml":

            res1 = 100 / tal;
            break;

      }

      if (isFinite(res1)) {

         res1 = lavom("til", res1);

      } else {

         res1 = "";

      }

      switch (fraogtilvalg) {

         case "mpgustilmpgimp":
         case "kmltilmpgimp":
         case "l100kmtilmpgimp":

            if (res1 !== "") {

               formnavn.dataud_resultat1.value = res1 + " mpg (imperial)";

            }

            break;

         case "mpgimptilmpgus":
         case "kmltilmpgus":
         case "l100kmtilmpgus":

            if (res1 !== "") {

               formnavn.dataud_resultat1.value = res1 + " mpg (us)";

            }

            break;

         case "mpgimptilkml":
         case "mpgustilkml":
         case "l100kmtilkml":

            if (res1 !== "") {

               formnavn.dataud_resultat1.value = res1 + " km/l";

            }

            break;

         case "mpgimptill100km":
         case "mpgustill100km":
         case "kmltill100km":

            if (res1 !== "") {

               formnavn.dataud_resultat1.value = res1 + " L/100 km";

            }

            break;

      }

   }

}



function konverter(formnavn, slags) {

   'use strict';

   var fraogtilvalg = formnavn.fraogtil.value,
       fra = formnavn.dataind.value,
       til = 0;

   fra = lavom("fra", fra);
   til = lavom("fra", til);

   if (slags === "daktryk") {

      switch (fraogtilvalg) {

         case "kgcm2tilpsi":     til = (fra * 14.223);   break;
         case "kgcm2tilbar":     til = (fra / 1.02);     break;
         case "kgcm2tilkpascal": til = (fra * 98.07);    break;
         case "psitilbar":       til = (fra * 0.068948); break;
         case "psitilkgcm2":     til = (fra / 14.223);   break;
         case "psitilkpascal":   til = (fra * 6.895);    break;
         case "bartilpsi":       til = (fra / 0.068948); break;
         case "bartilkgcm2":     til = (fra * 1.02);     break;
         case "bartilkpascal":   til = (fra * 100);      break;
         case "kpascaltilkgcm2": til = (fra / 98.07);    break;
         case "kpascaltilpsi":   til = (fra / 6.895);    break;
         case "kpascaltilbar":   til = (fra / 100);      break;

      }

   }else if (slags === "moment") {

      switch (fraogtilvalg) {

         case "nmtilkgm":        til = (fra * 0.102);   break;
         case "nmtillbft":       til = (fra * 0.738);   break;
         case "kgmtilnm":        til = (fra * 9.804);   break;
         case "kgmtillbft":      til = (fra * 7.233);   break;
         case "lbfttilnm":       til = (fra * 1.356);   break;
         case "lbfttilkgm":      til = (fra * 0.138);   break;

      }

   }else if (slags === "effekt") {

      switch (fraogtilvalg) {

         // metrisk
         case "kwtilhkmet":         til = (fra * 1.36);   break;
         // mechanical
         case "kwtilhkmec":         til = (fra * 1.34102);   break;
         // metrisk
         case "hkmettilkw":         til = (fra * 0.735499);   break;
         // mechanical
         case "hkmectilkw":         til = (fra * 0.7456999);   break;

      }

   }else if (slags === "hastighed") {

      switch (fraogtilvalg) {

         case "kmttilmph":         til = (fra * 0.6214);   break;
         case "mphtilkmt":         til = (fra * 1.609);   break;

      }

   }

   if (isFinite(til)) {

      til = lavom("til", til);

      switch (fraogtilvalg) {

         case "kgcm2tilpsi":     til += " " + psi;       break;
         case "kgcm2tilbar":     til += " " + bar;       break;
         case "kgcm2tilkpascal": til += " " + kpascal;   break;
         case "psitilbar":       til += " " + bar;       break;
         case "psitilkgcm2":     til += " " + kgcm2;     break;
         case "psitilkpascal":   til += " " + kpascal;   break;
         case "bartilpsi":       til += " " + psi;       break;
         case "bartilkgcm2":     til += " " + kgcm2;     break;
         case "bartilkpascal":   til += " " + kpascal;   break;
         case "kpascaltilkgcm2": til += " " + kgcm2;     break;
         case "kpascaltilpsi":   til += " " + psi;       break;
         case "kpascaltilbar":   til += " " + bar;       break;

         case "nmtilkgm":        til += " " + kgm;       break;
         case "nmtillbft":       til += " " + lbft;      break;
         case "kgmtilnm":        til += " " + nm;        break;
         case "kgmtillbft":      til += " " + lbft;      break;
         case "lbfttilnm":       til += " " + nm;        break;
         case "lbfttilkgm":      til += " " + kgm;       break;

      }

   } else {

      til = "";

   }

   formnavn.dataud.value = til;

}



function disableEnterKey(e) {

   'use strict';

   var key,
       targetelement;

   e = e || window.event;

   if (e.keyCode) {

      key = e.keyCode;

   }else if (e.which) {

      key = e.which;

   }

   if (e.target) {

      targetelement = e.target;

   }else if (e.srcElement) {

      targetelement = e.srcElement;

   }

   if (key === 13 && !(targetelement.type === 'submit' || targetelement.type === 'textarea')) {

      return false;

   } else {

      return true;

   }

}
