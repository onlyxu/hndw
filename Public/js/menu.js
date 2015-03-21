$(document).ready(function(){
/*	$('#nav-menu .menu > li').hover(function(){
		$(this).find('.children').animate({ opacity:'show', height:'show' },200);
		$(this).find('.xialaguang').addClass('navhover');
	}, function() {
		$('.children').stop(true,true).hide();
		$('.xialaguang').removeClass('navhover');
	});*/


	/*---------------------------------footerOrder-------------------------------------*/
	$(".idx_name , .idx_email , .idx_phone , .idx_youWant , .idx_submit").hover(function(){
		$(this).animate({opacity:0.7},200).dequeue();
	},function(){
		$(this).animate({opacity:1},200).dequeue();
	})
/*---------------------------------footerNews-------------------------------------*/
	$(".footerContent li").hover(function(){
		$(this).find("span").first().animate({textIndent:"20px"},300).parent().find("span").css({color:"#1a529c "}).dequeue();
	},function(){
		$(this).find("span").first().animate({textIndent:"0"},300).parent().find("span").css({color:"#979797"}).dequeue();
	})

});