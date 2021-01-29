$(document).ready(function() {
    $("input, textarea").on({
        focus: function(){
        $(this).css("background-color", "#eee");
        $(this).css("border-radius", "10px")
        },
        blur : function(){
        $(this).css("background-color", "transparent");
        }
    })
    $(".closeNav").click(function(){
        $(".mNav").css("width", "0%")

    })
    $(".navBtn").click(function(){
        $(".mNav").css("width", "100%")
    })
    $(".mNav li").click(function(){
        $(".mNav").css("width", "0")
    })
)};

