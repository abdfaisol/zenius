$(".cancel-edit").click(function(){
  $(this).parent().parent().find(".show-data").show();
  $(this).parent().parent().find(".edit-data-c").hide();
  $(this).parent().parent().find(".title-label").css("font-weight","bolder");
})
$(".show-edit").click(function(){
  $(this).parent().parent().find(".show-data").hide();
  $(this).parent().parent().find(".edit-data-c").show();
   $(this).parent().parent().find(".title-label").css("font-weight","500");
  
})
$(".option-server .btn").click(function(){
  $(this).parent().find(".btn").removeClass("activee");
  $(this).addClass("activee")
})