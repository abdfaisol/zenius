$(".title-matkul ul li ul").hide();
$('.ktsp-mat').show();

$(".matkulMenu li").hover(function(){
	$(this).parent().find("li").removeClass('active2');
	$(this).addClass('active2');
	var matakul = $("#matakul .active2").attr('id');
	var kurikulum = $("#scdMatkul .active2").attr('id');
	var tampil = kurikulum + '-' + matakul;
	$(".title-matkul ul li ul").hide();
	console.log(tampil)
	$('.'+tampil).show();
})