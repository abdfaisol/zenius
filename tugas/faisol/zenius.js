$(".title-matkul ul li ul").hide();
$('.ktsp-mat').show();
$(".matkulMenu li").hover(function(){
	$(this).parent().find("li").removeClass('active2');
	$(this).addClass('active2');
	var matakul = $("#matakul .active2").attr('id');
	var kurikulum = $("#scdMatkul .active2").attr('id');
	var tampil = kurikulum + '-' + matakul;
	$(".title-matkul ul li ul").hide();
	$('.'+tampil).show();
})
$(".pass").click(function(){
	if ($(this).hasClass('showpass')) {
		$(this).removeClass('fa-eye');
		$(this).addClass('fa-eye-slash');
		$(this).removeClass('showpass');
		$("#InputPassword").attr('type','text');
	}else{
		$(this).removeClass('fa-eye-slash');
		$(this).addClass('fa-eye');
		$(this).addClass('showpass');
		$("#InputPassword").attr('type','password');
	}
})
$("form .button").click(function(){
	$(".form-control").each(function(){
		if($(this).val().length === 0){
			var a = (parseInt($(".form-control").index(this)));
			$(this).after('<i class="alertForm fas fa-exclamation-circle"></i>')
			document.getElementsByClassName('feed-alert')[a].style.display = 'block';
		}
	})
})
$(".form-control ").keyup(function(){
	var a = (parseInt($(".form-control").index(this)))
	if($(this).parent().parent().hasClass('was-validated')){
		if($(this).val().length === 0){
			$(this).after('<i class="alertForm fas fa-exclamation-circle"></i>');
			document.getElementsByClassName('feed-alert')[a].style.display = 'block';
		}else{
			$(this).parent().find(".alertForm").remove();
			document.getElementsByClassName('feed-alert')[a].style.display = 'none';
		}
	}else{
		console.log('Not have Validated')
	}
	
})
