$(".dropbtnoriginal").click(function(){
	// Jika ul disembunyikan maka jalankan jika tidak maka yah sudahlan
	if($(this).find('ul').is(':visible')){
		$(this).find('.fas').removeClass('fa-minus').addClass('fa-plus');
		$(this).find('ul').hide();
		console.log('iya benar');
	}else{
		$(this).find('.fas').removeClass('fa-plus').addClass('fa-minus');
		$(this).find('ul').show();
		console.log('enggak salah')
	}
})