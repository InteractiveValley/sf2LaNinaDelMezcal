function iniciarSplash(){
	var $frase = $("#frase");
	$frase.fadeIn("slow",function(){
		setTimeout(splashShow,1500);
	});
}

function splashShow(){
	var $leyenda = $("#leyenda");
	var $frase = $("#frase");
	var $botones = $("#botones");

	$frase.fadeOut("slow",function(){
		$leyenda.fadeIn("slow");
		$botones.fadeIn("slow");
	});

}

$(document).on("ready",iniciarSplash);
