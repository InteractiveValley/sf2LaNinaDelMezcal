'use strict';

function BotellasController($scope) {
  $scope.botella = {
		botella:"Primario joven",
		descripcion: "Descripcion de la botella",
		clase: "primario",
		imagen: "/images/keyarts/primario.png",
		mensajes: [
			{
				titulo: "vintage",
				mensaje:"texto alguno que viene en el mensaje",
				imagen: "agluna imagen en el mensaje",
				clase: "right",
				style: "right:100px;top: 20px;"	
			},
			{
				titulo: "proof",
				mensaje:"texto alguno que viene en el mensaje",
				imagen: "agluna imagen en el mensaje",
				clase: "left",
				style: "top: 270px;"	
			},
			{
				titulo: "region",
				mensaje:"texto alguno que viene en el mensaje",
				imagen: "agluna imagen en el mensaje",
				clase: "left",
				style: "top: 430px;"	
			},
			{
				titulo: "joven",
				mensaje:"texto alguno que viene en el mensaje",
				imagen: "agluna imagen en el mensaje",
				clase: "right",
				style: " right:100px; top: 335px;"	
			}
		],
		howToMix:{
			titulo: "how to mix",
			mensaje:"",
			imagen: "",
			clase: "right",
			style: "top: 590px; right:100px;",
			imagenes: [
				{
					imagen: 'http://localhost:8029/images/demo/img_3.jpg',
				},
				{
					imagen: 'http://localhost:8029/images/demo/img_4.jpg',
				},
				{
					imagen: 'http://localhost:8029/images/demo/img_5.jpg',
				}	
			]	
		},
	}
	
        $scope.generarHowToMix=function(){
           var titulos=[],imagenes=[],descripciones=[],contador=0;
           forEach($scope.botella.howToMix.imagenes,function(mensaje){
               titulos[contador]="Imagen "+(contador+1);
               imagenes[contador]=mensaje.imagen;
               descripciones[contador] ="";
               $.prettyPhoto.open(titulos,imagenes,descripciones);
           });
        };
}