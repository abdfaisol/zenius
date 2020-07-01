$(".navbar-toggler").click(function(){
   var condition_exp = $(this).attr("aria-expanded");
    if(condition_exp == "true"){
        console.log("kondisi true");
        $(".social-pc").css("position","ralative !important")
    }else{
        console.log("false");
        $(".social-pc").css("position","relative !important");
    }
    // if(this.hasClass("collapsed")){
    //     $(".social-pc").css("position","relative !important")
    // }else{
    //     $(".social-pc").css("position","absolute !important")
    // }
})
function conditionScreen(){
    if ($(window).width() <= 425){
        console.log('cok');
        $("li#social").removeClass("social-pc");
    }
    else{
        $("li#social").addClass("social-pc");
    }
}
$(document).ready(function () {
    conditionScreen()
})
$(window).resize(function(){
    conditionScreen()
    
})