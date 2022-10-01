/*var delaySomethings = (function () {
    var timeDelay = 0;
    return function (callback, ms) {
        clearTimeout(timeDelay);
        timeDelay = setTimeout(callback, ms);
    }
})();*/
$(function () {
    "use strict";
    var ww = $(window).width();
    $(window).on("resize",function(){
        ww = $(window).width();
        if(ww < 980) {
            $("#sys_mod_filter").removeClass("fix-top");
            $("#sys_tmp_height_filter").remove();
        }
    });
	
	/*IF IE 8*/
	var rex8 = new RegExp("MSIE 8.0"),
        rex9 = new RegExp("MSIE 9.0");
	var trueIE8 = rex8.test(navigator.userAgent),
        trueIE9 = rex9.test(navigator.userAgent);
	
	if(trueIE8 || trueIE9) {

		/*Hide menu*/
		jQuery('.mp-level, .btn-toogle-res-menu').hide();
		
		/*Set z-index*/
		jQuery(".sub-menu").css('z-index', '999');
		
		/*Menu float right*/
		jQuery(".nav.nav-horizontal").css({
			'float': 'right',
			'margin-top': '5px',
            'display': 'block'
		});
		
		/*Padding*/
		jQuery(".header-content").css({
			padding: '15px 0'
		});
		
		jQuery("#sys_head_login").css({
            'float': 'right',
            'display': 'block'
        });
		/*
		jQuery(".pop-login").css({
			position: "relative"
		});*/
		
	}
	/*END IE 8*/
	
	
    /* FlexSlider */
    $(window).load(function(){
        if($("#sys_head_slide").length> 0) {
            $("#sys_head_slide").flexslider({
                animation: "slide",
                slideshow: false,
                start: function (slider) {
                    $(slider).siblings("p").remove();
                    $("#sys_btn_prev_slide").on("click",function(){
                        $(slider).find(".flex-prev").trigger("click");
                        return false;
                    });
                    $("#sys_btn_next_slide").on("click",function(){
                        $(slider).find(".flex-next").trigger("click");
                        return false;
                    });
                }
            });
        }
    });
    $("#sys_filter_days_left").noUiSlider({
        range:[1,160],
        start:[1, 80],
        step:1,
        connect:true,
        serialization:{
            to: [
                [$("#sys_min_day"),'html'],
                [$("#sys_max_day"),'html']
            ],
            resolution:1
        }
    }).change(function(){
        console.log($("#sys_filter_days_left").val());
    });

    /*tabbale*/
    $(".tabbable").on("click",".lbl-tab",function(){
        var getIdx = $(this).index();
        $(this).addClass("active").siblings().removeClass("active").parents(".tabbable").find(".tab-content-item").removeClass("active").eq(getIdx).addClass("active");
    });

    /*bind event to: Button login on header*/
    $("#sys_head_login").on("click",function(){
        $("#sys_pop_login").fadeToggle(300);
    });
    $("#sys_link_reg_panel").on("click",function(){
        $("#sys_pop_login").find(".transport-viewer").animate({"margin-left": "-720px"},500);
        $("#sys_paging_state").children().removeClass("active").eq(1).addClass("active");
        return false;
    });
    $("#sys_link_login_panel").on("click",function(){
        $("#sys_pop_login").find(".transport-viewer").animate({"margin-left": "0"},500);
        $("#sys_paging_state").children().removeClass("active").eq(0).addClass("active");
        return false;
    });
    $("#sys_paging_state").on("click","i",function(){
        switch ($(this).index()) {
            case 0:
                $("#sys_link_login_panel").trigger("click");
                break;
            case 1:
                $("#sys_link_reg_panel").trigger("click");
                break;
        }
    });
    $("#sys_close_login_popup").on("click",function(){
        $("#sys_head_login").trigger("click");
    });
    $("#sys_selected_val").on("click",function(e){
        $("#sys_list_dd_cate").fadeToggle(300);
        $("body").on("click.hideDropCate",function(){
            $("#sys_list_dd_cate").fadeOut(300);
            $("body").off("click.hideDropCate");
        });
        e.stopPropagation();
    });
    $("#sys_list_dd_cate").on("click","a",function(e) {
        $("#sys_selected_val").children("span").html($(this).html()).attr("data-cate-id", $(this).attr("data-cate-id"));
        $("#sys_list_dd_cate").fadeOut(300);
        $("body").off("click.hideDropCate");
        e.stopPropagation();
        return false;
    });
    $("#sys_apply_filter").on("click",function(){
        var paramAjax = {
            keyword: $("#sys_txt_search").val(),
            cateId: $("#sys_selected_val").children("span").attr("data-cate-id"),
            minDayLeft: $("#sys_filter_days_left").val()[0],
            maxDayLeft: $("#sys_filter_days_left").val()[1]
        };
        console.log(paramAjax);
    });

    var sys_mod_filter = $("#sys_mod_filter");
    if(sys_mod_filter.length>0) {
        var filterOffTop = $("#sys_mod_filter").offset().top;
        $(window).on("scroll",function(){
            if (ww > 980) {
                var getOffTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
                if(getOffTop>filterOffTop) {
                    sys_mod_filter.addClass("fix-top");
                    if($("#sys_tmp_height_filter").length<=0) {
                        $("<div id='sys_tmp_height_filter'></div>").height($("#sys_mod_filter").outerHeight(true)).insertAfter("#sys_mod_filter");
                    }
                }else{
                    sys_mod_filter.removeClass("fix-top");
                    $("#sys_tmp_height_filter").remove();
                }
            }
        });
    }
    var sys_warning_sms = $("#sys_warning_sms");
    if(sys_warning_sms.length>0) {
        var arr_sms = sys_warning_sms.attr("data-warning-txt").split(",");
        var idx = 0;
        sys_warning_sms.html(arr_sms[idx]);
        setInterval(function () {
            if(idx==(arr_sms.length-1)) {
                idx =0;
            }else{
                idx++;
            }
            sys_warning_sms.fadeOut(300,function(){
                $(this).html(arr_sms[idx]);
                $(this).fadeIn(300);
            })
        }, 3000);
    }

    /*for Responsive menu: in all page*/
    if($("#mp-menu").length > 0)
        new mlPushMenu(document.getElementById( 'mp-menu' ), document.getElementById( 'sys_btn_toogle_menu' ),{dockSide: "right"} );

    var container_list_link = $("#container_list_link");
    if(container_list_link.length > 0) {
        container_list_link.masonry({
            itemSelector: '.grp-by-alpha'
        });
    }

    var sys_list_related_post = $("#sys_list_related_post");
    if(sys_list_related_post.length>0) {
        $("#sys_prev_replated_page").on("click",function(){
            var getIdx = sys_list_related_post.attr("data-paging");
            var getTotal = sys_list_related_post.attr("data-total-page");
            if (getIdx == 1)
                getIdx = getTotal;
            else
                getIdx--;
            sys_list_related_post.attr("data-paging", getIdx);
            showPost(getIdx);
            return false;
        });
        $("#sys_next_replated_page").on("click",function(){
            var getIdx = sys_list_related_post.attr("data-paging");
            var getTotal = sys_list_related_post.attr("data-total-page");
            if (getIdx == getTotal)
                getIdx = 1;
            else
                getIdx++;
            sys_list_related_post.attr("data-paging", getIdx);
            showPost(getIdx);
            return false;
        });
    }
    function showPost(idx) {
        var sys_list_related_post = $("#sys_list_related_post");
        sys_list_related_post.find(".post-item").removeClass("active");
        sys_list_related_post.find(".sys_p_"+idx).fadeIn(function(){
            $(this).addClass("active").attr("style", "");
        });
    }

    // $("#sys_overlay_video").on("click", function () {
    //     var frame_video = $("#sys_video_data").html();
    //     $("#sys_video_data").html("");
    //     console.log(frame_video);
    //     $.popupCommon({
    //         htmlContent:frame_video,
    //         widthPop: "535px",
    //         mediaType: true,
    //         toParent:"#sys_wrap_video",
    //         successOpen:function(){
    //             $("#sys_intro_video")[0].play();
    //         },
    //         preClose:function(){
    //             var clone=$("#sys_intro_video").clone();
    //             $("#sys_intro_video").remove();
    //             $("#sys_video_data").html(clone);
    //         }
    //     });
    // });

});

