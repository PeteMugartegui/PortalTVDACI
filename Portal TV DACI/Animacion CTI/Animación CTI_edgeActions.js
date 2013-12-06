/***********************
* Acciones de composición de Adobe Edge Animate
*
* Editar este archivo con precaución, teniendo cuidado de conservar 
* las firmas de función y los comentarios que comienzan con "Edge" para mantener la 
* capacidad de interactuar con estas acciones en Adobe Edge Animate
*
***********************/
(function($, Edge, compId){
var Composition = Edge.Composition, Symbol = Edge.Symbol; // los alias más comunes para las clases de Edge

   //Edge symbol: 'stage'
   (function(symbolName) {
      
      
      

      

      

      

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 0, function(sym, e) {
         // introducir código aquí
      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_Informacion}", "click", function(sym, e) {
         if(sym.$("CuadroInformacion").is(":visible")){
         sym.$("CuadroInformacion").fadeOut("slow");
         }else{sym.$("CuadroInformacion").fadeIn("slow");}

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_Historia}", "click", function(sym, e) {
         if(sym.$("CuadroHistoria").is(":visible")){
         sym.$("CuadroHistoria").fadeOut("slow");
         }else{sym.$("CuadroHistoria").fadeIn("slow");}

      });
      //Edge binding end

   })("stage");
   //Edge symbol end:'stage'

})(jQuery, AdobeEdge, "EDGE-140502237");