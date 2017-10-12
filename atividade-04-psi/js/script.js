
$(document).ready(function(){


	var box_height = $(".box").height();
	var box_width = $(".box").width();

	var i = 0;
	var mess = ['Aeee', 'Acertou Miseravi', 'Boa', 'Parabéns', 'Foi sorte', 'Na próxima você não consegue'];

	var contato = 0;
	var num = 0;
	var speed = '';
	var min = '';

	$("#facil").click(function(){
		speed = 400;
		min = 50;
		$(".box").animate({'width':rand_height + 'px'}, speed);
		console.log('facil');

	});

	$("#intermediario").click(function(){
		speed = 200;
		min = 30;
		console.log('intermediario');

	});

	$("#dificil").click(function(){
		speed = 50;
		min = 20;
		console.log('dificil');
 
	});

	$("#btn_move").mouseenter(function(){
		$("#btn_move").html("Contador:" + contador++);
		console.log(Math.random());
		var rand_width = Math.random() * (box_width - min + 1) - btn_move;
		var rand_height = Math.random() * (box_height - min + 1) - btn_move;

		if(rand_width > box_width || rand_height > box_height) {
			alert("Ultrapassou a borda");
		}

		$("#btn_move").animate({'margin-top':rand_height + 'px'}, speed);
		$("#btn_move").animate({'margin-bottom':rand_height + 'px'}, speed);
		$("#btn_move").animate({'margin-left':rand_width + 'px'}, speed);
		$("#btn_move").animate({'margin-right':rand_width + 'px'}, speed);

	});



});


