/*by fb.com/hoangnm89 */
var arrKeyCode = {
    BACKSPACE: 8,
    TAB: 9,
    ENTER: 13,
    SHIFT: 16,
    CTRL: 17,
    ESCAPE: 27,
    SPACE: 32,
    PAGE_UP: 33,
    PAGE_DOWN: 34,
    END: 35,
    HOME: 36,
    LEFT: 37,
    UP: 38,
    RIGHT: 39,
    DOWN: 40,
    DELETE: 46,
    NUMPAD_MULTIPLY: 106,
    NUMPAD_ADD: 107,
    NUMPAD_ENTER: 108,
    NUMPAD_SUBTRACT: 109,
    NUMPAD_DECIMAL: 110,
    NUMPAD_DIVIDE: 111,
    PERIOD: 190,
    COMMA: 188
};
$(function () {
    $.popupCommon = function (objSetting) {
        var settings = $.extend({
            wrapHtml:   '' +
                        '<div class="popup-common">' +
                            '<div class="overlay-bl-bg"></div>' +
                            '<div class="pop-content">' +
                                '<div class="opacity-border"></div>' +
                                '<div class="wrap-content sys_wrap_popup_content">' +
                                    '<div class="main-content">' +
                                        'html <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> content' +
                                    '</div>' +
                                '</div>' +
                                '<img class="closePopup" src="images/close.png?v=1" alt="CLOSE">' +
                            '</div>' +
                        '</div>',
            htmlContent:'<div style="padding: 10px;color: red;text-align: center;font-size: 14px;">Có lỗi xảy ra trong quá trình xử lý, vui lòng thử lại!</div>',
            attrId:'sys_popup_common',
            widthPop:'500px',
            toParent:null,//ex: #user_deposit_wrapper, #id, .class
            mediaType:false,
            successOpen:function(){},
            preClose:function(){}
        },objSetting || {});

        var _$this = null;
        function initPopup() {
            if(settings.toParent){
                _$this = $(settings.wrapHtml).appendTo($(settings.toParent));
            }else{
                _$this = $(settings.wrapHtml).appendTo("body");
            }
            _$this.attr("id", settings.attrId);
            if(settings.mediaType) {
                _$this.find(".main-content").first().addClass("view-media");
            }
            _$this.find(".main-content").first().html(settings.htmlContent);
            _$this.css({
                "display":"block",
                "visibility":"hidden"
            });
            $("body").css("overflow","hidden");

            /*set width and position for popup*/
            var popContent = _$this.find(".pop-content").css("width", settings.widthPop);
            var setTopCSS, setLeftCSS;
            setTopCSS = Math.abs(($(window).height() - popContent.height()) / 2 - $(window).height() / 10);
            console.log($(window).height());
            console.log(popContent.height());
            setLeftCSS = Math.abs(($(window).width() - popContent.width()) / 2);
            popContent.css({
                "top":setTopCSS,
                "left":setLeftCSS
            });
            _$this.css({
                "display":"none",
                "visibility":"visible"
            });
            _$this.fadeIn();
            onEvents();
            if($.isFunction(settings.successOpen)) {
                settings.successOpen.call(this);
            }
        }
        function onEvents(){
            $("#" + settings.attrId).on("click.closePopup",".closePopup,.overlay-bl-bg",function(){
                if($.isFunction(settings.preClose)) {
                    settings.preClose.call(this);
                }
                $("#" + settings.attrId).fadeOut(function(){
                    $(this).remove();
                    $("body").off("keydown.closePopup").css("overflow","");
                });
            });
            $("#" + settings.attrId).on("click",".main-content",function(e){
                e.stopPropagation();
            });
            $("body").on("keydown.closePopup",function(e){
                var getCode = e.keyCode ? e.keyCode : e.which;
                if(getCode == arrKeyCode.ESCAPE) {
                    $("#" + settings.attrId).find(".closePopup").trigger("click");
                }
            });
        }
        initPopup();
    };
});
