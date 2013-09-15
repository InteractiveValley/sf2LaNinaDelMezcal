'use strict';

function BotellasController($scope) {
  $scope.botella = 
  	{
		botella:"Espadin",
		descripcion: "Descripcion de la botella",
		clase: "espadin",
		imagen: "/images/keyarts/espadin.png",
		mensajes: [
			{
				titulo: "vintage",
				mensaje:"texto alguno que viene en el mensaje",
				imagen: "agluna imagen en el mensaje",
				clase: "right",
				style: "top: 20px;"	
			},
			{
				titulo: "proof",
				mensaje:"texto alguno que viene en el mensaje",
				imagen: "agluna imagen en el mensaje",
				clase: "left",
				style: "top: 300px;"	
			},
			{
				titulo: "varietal",
				mensaje:"texto alguno que viene en el mensaje",
				imagen: "agluna imagen en el mensaje",
				clase: "right",
				style: "top: 450px; right: 110px;"	
			},
			{
				titulo: "region",
				mensaje:"texto alguno que viene en el mensaje",
				imagen: "agluna imagen en el mensaje",
				clase: "left",
				style: "top: 510px;"	
			},
			{
				titulo: "joven",
				mensaje:"texto alguno que viene en el mensaje",
				imagen: "agluna imagen en el mensaje",
				clase: "right",
				style: "top: 530px; right:110px;"	
			},
			{
				titulo: "reposado en campo",
				mensaje:"texto alguno que viene en el mensaje",
				imagen: "agluna imagen en el mensaje",
				clase: "left",
				style: "top: 610px;"	
			}
		],
		howToMix:{
			titulo: "how to mix",
			mensaje:"",
			imagen: "",
			clase: "right",
			style: "top: 640px; right:110px;",
			imagenes: [
				{
					imagen: 'http://localhost:8029/images/demo/img_1.jpg',
				},
				{
					imagen: 'http://localhost:8029/images/demo/img_2.jpg',
				},
				{
					imagen: 'http://localhost:8029/images/demo/img_3.jpg',
				}	
			]	
		},
	};
	
        $scope.generarHowToMix=function(){
            var titulos=[],imagenes=[],descripciones=[],contador=0;
           angular.forEach($scope.botella.howToMix.imagenes,function(mensaje){
               titulos[contador]="Imagen "+(contador+1);
               imagenes[contador]=mensaje.imagen;
               descricpiones[contador] ="";
               $.prettyPhoto.open(titulos,imagenes,descricpiones);
           });
        };
	
}