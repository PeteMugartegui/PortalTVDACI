/**
 * Adobe Edge: symbol definitions
 */
(function($, Edge, compId){
//images folder
var im='images/';

var fonts = {};


var resources = [
];
var symbols = {
"stage": {
   version: "2.0.0",
   minimumCompatibleVersion: "2.0.0",
   build: "2.0.0.250",
   baseState: "Base State",
   initialState: "Base State",
   gpuAccelerate: false,
   resizeInstances: false,
   content: {
         dom: [
         {
            id:'Green_grass_by_Gardek',
            type:'image',
            rect:['-223px','214px','2048px','1536px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"Green_grass_by_Gardek.jpg",'0px','0px']
         },
         {
            id:'clouds',
            type:'image',
            rect:['-950px','-684px','1920px','1080px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"clouds.jpg",'0px','0px']
         },
         {
            id:'CTIt',
            type:'image',
            rect:['0px','5px','100%','540px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"CTIt.png",'0px','0px']
         },
         {
            id:'CuadroInformacion',
            display:'none',
            type:'group',
            rect:['672px','261px','204','180','auto','auto'],
            c:[
            {
               id:'ctiInfo',
               type:'image',
               rect:['0px','0px','204px','180px','auto','auto'],
               fill:["rgba(0,0,0,0)",im+"tres2.jpg",'0px','0px']
            },
            {
               id:'RectanguloCTI',
               type:'rect',
               rect:['0px','142px','204px','38px','auto','auto'],
               opacity:0.85534591194969,
               fill:["rgba(3,3,3,1)"],
               stroke:[0,"rgb(0, 0, 0)","solid"]
            },
            {
               id:'Text2',
               type:'text',
               rect:['39px','147px','auto','auto','auto','auto'],
               text:"Información",
               font:['Arial, Helvetica, sans-serif',24,"rgba(255,255,255,1.00)","normal","none",""]
            }]
         },
         {
            id:'CuadroHistoria',
            display:'none',
            type:'group',
            rect:['107px','191px','252px','234px','auto','auto'],
            c:[
            {
               id:'CTI_viejo',
               type:'image',
               rect:['17px','22px','204px','180px','auto','auto'],
               fill:["rgba(0,0,0,0)",im+"CTI%20viejo.jpg",'0px','0px']
            },
            {
               id:'Rectangle',
               type:'rect',
               rect:['17px','164px','204px','38px','auto','auto'],
               opacity:0.85534591194969,
               fill:["rgba(3,3,3,1)"],
               stroke:[0,"rgb(0, 0, 0)","solid"]
            },
            {
               id:'Text',
               type:'text',
               rect:['79px','169px','auto','auto','auto','auto'],
               text:"Historia",
               font:['Arial, Helvetica, sans-serif',24,"rgba(255,255,255,1.00)","normal","none",""]
            }]
         },
         {
            id:'Historia',
            display:'none',
            type:'group',
            rect:['172px','163px','40','40','auto','auto'],
            cursor:['pointer'],
            c:[
            {
               id:'ApuntadorHistoria',
               type:'rect',
               rect:['6px','6px','28px','28px','auto','auto'],
               borderRadius:["50px 50px","50px 50px","50px 50px","0px"],
               fill:["rgba(247,233,29,1)"],
               stroke:[0,"rgb(0, 0, 0)","none"],
               transform:[[],['-45']]
            },
            {
               id:'CirculoHistoria',
               type:'ellipse',
               rect:['13px','12px','13px','16px','auto','auto'],
               borderRadius:["50%","50%","50%","50%"],
               fill:["rgba(255,255,255,1)"],
               stroke:[0,"rgb(0, 0, 0)","none"]
            }]
         },
         {
            id:'Informacion',
            display:'none',
            type:'group',
            rect:['770px','203px','40','40','auto','auto'],
            cursor:['pointer'],
            c:[
            {
               id:'ApuntadorInformacion',
               type:'rect',
               rect:['6px','6px','28px','28px','auto','auto'],
               borderRadius:["50px 50px","50px 50px","50px 50px","0px"],
               fill:["rgba(247,233,29,1)"],
               stroke:[0,"rgb(0, 0, 0)","none"],
               transform:[[],['-45']]
            },
            {
               id:'CirculoInformacion',
               type:'ellipse',
               rect:['13px','12px','13px','16px','auto','auto'],
               borderRadius:["50%","50%","50%","50%"],
               fill:["rgba(255,255,255,1)"],
               stroke:[0,"rgb(0, 0, 0)","none"]
            }]
         },
         {
            id:'Entrada',
            display:'none',
            type:'group',
            rect:['400px','356px','40','40','auto','auto'],
            cursor:['pointer'],
            c:[
            {
               id:'ApuntadorEntrada',
               type:'rect',
               rect:['6px','6px','28px','28px','auto','auto'],
               borderRadius:["50px 50px","50px 50px","50px 50px","0px"],
               fill:["rgba(247,233,29,1)"],
               stroke:[0,"rgb(0, 0, 0)","none"],
               transform:[[],['-45']]
            },
            {
               id:'CirculoEntrada',
               type:'ellipse',
               rect:['13px','12px','13px','16px','auto','auto'],
               borderRadius:["50%","50%","50%","50%"],
               fill:["rgba(255,255,255,1)"],
               stroke:[0,"rgb(0, 0, 0)","none"]
            }]
         }],
         symbolInstances: [

         ]
      },
   states: {
      "Base State": {
         "${_RectanguloCTI}": [
            ["style", "top", '142px'],
            ["style", "height", '38px'],
            ["style", "opacity", '0.85534591194969'],
            ["style", "left", '0px'],
            ["style", "width", '204px']
         ],
         "${_clouds}": [
            ["style", "top", '-684px'],
            ["style", "left", '-950px']
         ],
         "${_CirculoInformacion}": [
            ["style", "left", '13px'],
            ["style", "top", '12px']
         ],
         "${_Text2}": [
            ["style", "top", '147px'],
            ["style", "left", '39px'],
            ["color", "color", 'rgba(255,255,255,1.00)']
         ],
         "${_CTIt}": [
            ["style", "top", '5px'],
            ["style", "left", '0px']
         ],
         "${_CirculoEntrada}": [
            ["style", "left", '13px'],
            ["style", "top", '12px']
         ],
         "${_ApuntadorInformacion}": [
            ["style", "top", '6px'],
            ["style", "border-top-left-radius", [50,50], {valueTemplate:'@@0@@px @@1@@px'} ],
            ["style", "border-bottom-right-radius", [50,50], {valueTemplate:'@@0@@px @@1@@px'} ],
            ["style", "left", '6px'],
            ["style", "border-top-right-radius", [50,50], {valueTemplate:'@@0@@px @@1@@px'} ],
            ["transform", "rotateZ", '-45deg']
         ],
         "${_Rectangle}": [
            ["style", "top", '164px'],
            ["style", "height", '38px'],
            ["style", "opacity", '0.85534591194969'],
            ["style", "left", '17px'],
            ["style", "width", '204px']
         ],
         "${_ctiInfo}": [
            ["style", "height", '180px'],
            ["style", "top", '0px'],
            ["style", "left", '0px'],
            ["style", "width", '204px']
         ],
         "${_Historia}": [
            ["style", "top", '186px'],
            ["style", "cursor", 'pointer'],
            ["style", "display", 'none']
         ],
         "${_CuadroHistoria}": [
            ["style", "top", '201px'],
            ["style", "display", 'none'],
            ["style", "height", '234px'],
            ["style", "left", '87px'],
            ["style", "width", '252px']
         ],
         "${_ApuntadorHistoria}": [
            ["style", "top", '6px'],
            ["style", "border-top-left-radius", [50,50], {valueTemplate:'@@0@@px @@1@@px'} ],
            ["style", "border-bottom-right-radius", [50,50], {valueTemplate:'@@0@@px @@1@@px'} ],
            ["transform", "rotateZ", '-45deg'],
            ["style", "border-top-right-radius", [50,50], {valueTemplate:'@@0@@px @@1@@px'} ],
            ["style", "left", '6px']
         ],
         "${_Entrada}": [
            ["style", "display", 'none'],
            ["style", "top", '376px'],
            ["style", "left", '400px'],
            ["style", "cursor", 'pointer']
         ],
         "${_Informacion}": [
            ["style", "display", 'none'],
            ["style", "top", '218px'],
            ["style", "left", '770px'],
            ["style", "cursor", 'pointer']
         ],
         "${_Green_grass_by_Gardek}": [
            ["style", "left", '-223px'],
            ["style", "top", '214px']
         ],
         "${_Text}": [
            ["color", "color", 'rgba(255,255,255,1.00)'],
            ["style", "left", '79px'],
            ["style", "top", '169px']
         ],
         "${_ApuntadorEntrada}": [
            ["style", "top", '6px'],
            ["style", "border-top-left-radius", [50,50], {valueTemplate:'@@0@@px @@1@@px'} ],
            ["style", "border-bottom-right-radius", [50,50], {valueTemplate:'@@0@@px @@1@@px'} ],
            ["style", "left", '6px'],
            ["style", "border-top-right-radius", [50,50], {valueTemplate:'@@0@@px @@1@@px'} ],
            ["transform", "rotateZ", '-45deg']
         ],
         "${_Stage}": [
            ["color", "background-color", 'rgba(255,255,255,1)'],
            ["style", "overflow", 'hidden'],
            ["style", "height", '540px'],
            ["style", "width", '960px']
         ],
         "${_CTI_viejo}": [
            ["style", "top", '22px'],
            ["style", "height", '180px'],
            ["style", "left", '17px'],
            ["style", "width", '204px']
         ],
         "${_CirculoHistoria}": [
            ["style", "left", '13px'],
            ["style", "top", '12px']
         ],
         "${_CuadroInformacion}": [
            ["style", "top", '261px'],
            ["style", "left", '672px'],
            ["style", "display", 'none']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 8000,
         autoPlay: true,
         timeline: [
            { id: "eid3566", tween: [ "style", "${_CuadroHistoria}", "left", '87px', { fromValue: '87px'}], position: 0, duration: 0, easing: "easeInOutBack" },
            { id: "eid3568", tween: [ "style", "${_CuadroInformacion}", "display", 'none', { fromValue: 'none'}], position: 0, duration: 0, easing: "easeInOutBack" },
            { id: "eid3462", tween: [ "style", "${_CuadroHistoria}", "display", 'none', { fromValue: 'none'}], position: 0, duration: 0 },
            { id: "eid3556", tween: [ "style", "${_Informacion}", "display", 'none', { fromValue: 'none'}], position: 0, duration: 0 },
            { id: "eid3557", tween: [ "style", "${_Informacion}", "display", 'block', { fromValue: 'none'}], position: 1500, duration: 0 },
            { id: "eid3559", tween: [ "style", "${_Informacion}", "top", '191px', { fromValue: '218px'}], position: 1750, duration: 250 },
            { id: "eid3560", tween: [ "style", "${_Informacion}", "top", '206px', { fromValue: '191px'}], position: 2000, duration: 250, easing: "easeOutBack" },
            { id: "eid3547", tween: [ "style", "${_Entrada}", "display", 'none', { fromValue: 'none'}], position: 0, duration: 0 },
            { id: "eid3548", tween: [ "style", "${_Entrada}", "display", 'block', { fromValue: 'none'}], position: 790, duration: 0 },
            { id: "eid3561", tween: [ "style", "${_Historia}", "display", 'none', { fromValue: 'none'}], position: 0, duration: 0 },
            { id: "eid3562", tween: [ "style", "${_Historia}", "display", 'block', { fromValue: 'none'}], position: 2250, duration: 0 },
            { id: "eid3567", tween: [ "style", "${_CuadroHistoria}", "top", '201px', { fromValue: '201px'}], position: 0, duration: 0, easing: "easeInOutBack" },
            { id: "eid1", tween: [ "style", "${_clouds}", "left", '0px', { fromValue: '-950px'}], position: 0, duration: 8000 },
            { id: "eid3553", tween: [ "style", "${_Entrada}", "top", '356px', { fromValue: '376px'}], position: 1000, duration: 250 },
            { id: "eid3555", tween: [ "style", "${_Entrada}", "top", '363px', { fromValue: '356px'}], position: 1250, duration: 250, easing: "easeInOutBack" },
            { id: "eid3564", tween: [ "style", "${_Historia}", "top", '163px', { fromValue: '186px'}], position: 2500, duration: 250, easing: "easeOutQuart" },
            { id: "eid3565", tween: [ "style", "${_Historia}", "top", '174px', { fromValue: '163px'}], position: 2750, duration: 250, easing: "easeOutBack" }         ]
      }
   }
}
};


Edge.registerCompositionDefn(compId, symbols, fonts, resources);

/**
 * Adobe Edge DOM Ready Event Handler
 */
$(window).ready(function() {
     Edge.launchComposition(compId);
});
})(jQuery, AdobeEdge, "EDGE-140502237");
