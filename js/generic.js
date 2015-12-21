
$(window).on("load",function(){
    globals.aa = 1;
    globals.flag = "aru";
});
$(window).on("load resize",function(){
    wwidth = $(window).width();
    if(wwidth < 420){
        $(".disBox").css("font-size","80%");
        $(".disBox-rss").css("font-size","80%");
        $(".disBox-head").css("font-size","80%");
        $(".disBox-Side").css("font-size","80%");
    }else if(wwidth >= 420 && wwidth < 768){
        $(".disBox").css("font-size","100%");
        $(".disBox-rss").css("font-size","100%");
        $(".disBox-head").css("font-size","100%");
        $(".disBox-Side").css("font-size","100%");
    }else if(wwidth >= 768 && wwidth < 992){
        $(".disBox").css("font-size","80%");
        $(".disBox-rss").css("font-size","80%");
        $(".disBox-head").css("font-size","80%");
        $(".disBox-Side").css("font-size","120%");
    }else if(wwidth >= 992 && wwidth < 1200){
        $(".disBox").css("font-size","100%");
        $(".disBox-rss").css("font-size","100%");
        $(".disBox-head").css("font-size","100%");
        $(".disBox-Side").css("font-size","100%");
    }else if(wwidth >= 1200){
        $(".disBox").css("font-size","78%");
        $(".disBox-rss").css("font-size","100%");
        $(".disBox-head").css("font-size","100%");
        $(".disBox-Side").css("font-size","100%");
    }
    if(wwidth < 420){
        $(".youtube").css("width","250");
        $(".youtube").css("height","180");
    }else if(wwidth >= 420 && wwidth < 768){
        $(".youtube").css("width","320");
        $(".youtube").css("height","240");
    }else if(wwidth >= 768 && wwidth < 992){
        $(".youtube").css("width","480");
        $(".youtube").css("height","320");
    }else if(wwidth >= 992 && wwidth < 1200){
        $(".youtube").css("width","640");
        $(".youtube").css("height","400");
    }else if(wwidth >= 1200){
        $(".youtube").css("width","800");
        $(".youtube").css("height","600");
    }

    $(".headerpanel").css("height",$(".headertop").innerHeight());

        var ratio;
        var listPanel = $(".listpanel");
        if(listPanel.width() > 240){
            ratio = 0.2;
        }else if(listPanel.width() <= 240){
            ratio = 0.3;
        } 
        var listPanelWidth= listPanel.width();
        var imgBoxWidth = Math.floor(listPanelWidth * ratio) - 1;
        var disBoxWidth = listPanelWidth - imgBoxWidth - 1;
        $(".imgBox").css("width",imgBoxWidth);
        $(".imgBox").css("height",imgBoxWidth);
        $(".disBox").css("width",disBoxWidth);
        $(".disBox").css("height",imgBoxWidth);

        var ratioSide;
        var listPanelSide = $(".listpanel-side");
        if(listPanelSide.width() > 240){
            ratioSide = 0.2;
        }else if(listPanelSide.width() <= 240){
            ratioSide = 0.3;
        } 
        var listPanelSideWidth = listPanelSide.width();
        var imgBoxSideWidth = Math.floor(listPanelSideWidth * ratioSide) - 1;
        var disBoxSideWidth = listPanelSideWidth - imgBoxSideWidth - 1;
        $(".imgBox-Side").css("width",imgBoxSideWidth);
        $(".imgBox-Side").css("height",imgBoxSideWidth);
        $(".disBox-Side").css("width",disBoxSideWidth);
        $(".disBox-Side").css("height",imgBoxSideWidth);

        var ratioHead;
        var headerPanel = $(".listpanel-head");
        if(headerPanel.width() > 240){
            ratioHead = 0.5;
        }else if(headerPanel.width() <= 240){
            ratioHead = 0.5;
        } 
        var headerPanelWidth = headerPanel.width();
        var imgBoxHeadWidth = Math.floor(headerPanelWidth * ratioHead) - 1;
        var disBoxHeadWidth = headerPanelWidth - imgBoxHeadWidth - 1;
        $(".imgBox-head").css("width",imgBoxHeadWidth);
        $(".imgBox-head").css("height",imgBoxHeadWidth);
        $(".disBox-head").css("width",disBoxHeadWidth);
        $(".disBox-head").css("height",imgBoxHeadWidth);

        var rsstitle = $(".rsstitle");
        var rsslink  = $(".rsslink");
        var windowWidth = $( window ).width();
        if(windowWidth > 670){
            rsstitle.css("width","15%");
            rsslink.css("width","85%");
            rsslink.css("padding","0 0 0 5px");
            }else{
            rsstitle.css("width","100%");
            rsslink.css("width","100%");
            rsslink.css("padding","0 0 0 0");
        }

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
            $("#upper").css("visibility","hidden");
        }else if(body_scroll>windowHeight){
            $("#upper").css("visibility","visible");
        }

       if($(window).width() > 779){ 
            var sidebarHeight = $(".sidebar").height();
            var mainHeight = $(".main").height();
            var sidebarPosi = $(".sidebar").position();
            var tempsidebarPosi = JSON.stringify(sidebarPosi);
            var headerHeight = $("header").outerHeight(true);
            var footerHeight = $(".footer").outerHeight(true);

            if(body_scroll < (sidebarHeight - windowHeight - headerHeight) || body_scroll <= 0){
                $(".sidebar").css("position","static");
            }else if(body_scroll > (sidebarHeight - windowHeight + headerHeight) && body_scroll < (mainHeight - windowHeight + headerHeight)){
                $(".sidebar").css("position","fixed");
                $(".sidebar").css("bottom","0");
                $(".sidebar").css("left",sidebarPosi.left);
            }else if(body_scroll >= (mainHeight - windowHeight + headerHeight)){
                $(".sidebar").css("position","rerative");
                $(".sidebar").css("left",sidebarPosi.left);
                $(".sidebar").css("bottom",footerHeight);
            }
       }
    });
    $("#upper").on("click",function(){
        $("html,body").animate({ scrollTop: 0}, "2000");
        body_scroll = null;
    });

    $("#submit").on("click",function(){
        var au = navigator.userAgent;
        var ph = navigator.platform;
        var ap = navigator.appName;

        var url = $("#issurl").val(); 
        var file = $("#issfile").val(); 
        var mail = $("#issmail").val(); 
        var note = $("#issnote").val(); 

        var ismail = mail.match(/^[a-zA-Z0-9_\.\-]+?@[A-Za-z0-9_\.\-]+$/);
        var isurl = url.match(/http:\/\/omoro.top\/\?p=[0-9]+/);
        var isfile = file.match(/[_0-9a-z\.]+/);
        var isnote;
        if(note.length > 200){isnote = false;}else{isnote = true;}
        if(
                Boolean(ismail) === true &&
                Boolean(isurl) === true &&
                Boolean(isfile) === true &&
                Boolean(isnote) === true
          )
        {
            var date = JSON.stringify(
                    {
                        mail:mail,
                        url:url,
                        file:file,
                        note:note,
                        ip:globals.ip,
                        nonce:globals.nonce,
                        userag:au,
                        os:ph,
                        app:ap
                    });
            $.ajax({
                type: "POST",
                url: "../wp-content/themes/matome/formajax.php",
                data: date,
                success: function(msg){
                    $("#issurl").val(""); 
                    $("#issfile").val(""); 
                    $("#issmail").val(""); 
                    $("#issnote").val(""); 
                    $("#submited").css("visibility","visible"); 
                }
            }); 
        }else{ 
            if(Boolean(ismail) === false){
                $("#ermail").css("visibility","visible"); 
            }
            if(Boolean(isurl) === false){
                $("#erurl").css("visibility","visible"); 
            }
            if(Boolean(isfile) === false){
                $("#erfile").css("visibility","visible"); 
            }
            if(Boolean(isnote) === false){
                $("#ernote").css("visibility","visible"); 
            }
        }
    });

    $("#reset").on("click",function(){
        $("#issurl").val(""); 
        $("#issfile").val(""); 
        $("#issmail").val(""); 
        $("#issnote").val(""); 
        $("#erurl").css("visibility","hidden"); 
        $("#ermail").css("visibility","hidden"); 
        $("#ernote").css("visibility","hidden"); 
        $("#erfile").css("visibility","hidden"); 
        $("#submited").css("visibility","hidden"); 
    });

    // var width = $(window).width();
    // if(width >= 800){
    //     $("#nend").remove();
    // }

        $(document).on("click",".loadlist",function(){
        if(globals.flag === "aru"){
            var data = JSON.stringify({aa:globals.aa, nonce:globals.nonce});
            $.ajax({
                type: "POST",
                url: "http://192.168.56.10/wp-content/themes/matome2/allarticleajax.php",
                data: data,
                success: function(responce){
                    var stResponce = JSON.stringify(responce);
                    var jsonResponce = JSON.parse(stResponce);
                    // console.log(responce);
                    globals.aa = Number(globals.aa) + 1;
                    console.log(jsonResponce.nocoli);
                    console.log(jsonResponce.flag);
                    // console.log(jsonResponce.html);
                    globals.flag = jsonResponce.flag;
                    $(".moreload").append(jsonResponce.html);
                    if(globals.flag === "aru"){
                        $(".aru").css("display","inline");
                        $(".nai").css("display","none");
                    }else if(globals.flag === "mounai"){
                        $(".aru").css("display","none");
                        $(".nai").css("display","inline");
                    }
                }
            });
            }else{}
        });
});

