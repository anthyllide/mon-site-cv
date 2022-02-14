$(document).ready(function(){

	//ouvre le menu mobile
	$("#menu-burger").click(function(){
		$("#menu-mobile").show();
	});

	// ferme le menu mobile 
	$(".closeNav").click(function(){
		$("#menu-mobile").hide();
	});

	//retourne les blocs réalisations à partir d'un clic pour la version mobile, sinon au survol
	if($(".rea").css("margin-bottom") == "20px"){
		$(".rea").flip({
  		axis: 'y',
  		trigger : 'click'
		});
	} else {
		$(".rea").flip({
  		axis: 'y',
  		trigger : 'hover'
		});
	}	

});
