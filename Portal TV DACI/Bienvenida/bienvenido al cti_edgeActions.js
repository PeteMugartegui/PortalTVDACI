
(function($,Edge,compId){var Composition=Edge.Composition,Symbol=Edge.Symbol;
//Edge symbol: 'stage'
(function(symbolName){Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",0,function(sym,e){var mySound=new buzz.sound("/media/voz",{formats:["ogg","mp3","aac"],});mySound.play().fadeIn().loop().bind("timeupdate",function(){var timer=buzz.toTimer(this.getTime());document.getElementById("timer").innerHTML=timer;});mySound.loop();});
//Edge binding end
Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",700,function(sym,e){sym.play("loop");});
//Edge binding end
})("stage");
//Edge symbol end:'stage'
})(jQuery,AdobeEdge,"EDGE-4696744");