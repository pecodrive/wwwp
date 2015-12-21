$(window).on("ready resize",function(){
    $(window).on("scroll",function(){
        var windowHeight = $( window ).height();
        var scroll_flag;
        var body_scroll;
        if($("body").scrollTop === 0){
            scroll_flag = "ie";
        }else{
            scroll_flag = "others";
        }
        if(scroll_flag === "ie"){
            body_scroll = $("html").scrollTop();
        }else if(scroll_flag === "others"){
            body_scroll = $("body").scrollTop();
        }
        if(body_scroll < windowHeight || body_scroll <= 0){
            $("#upaer").css("visibility","hidden");
        }else if(body_scroll>windowHeight){
            $("#upaer").css("visibility","visible");
        }
    });
    $("#upaer").on("click",function(){
        $("html,body").animate({ scrollTop: 0}, "2000");
    });
});
