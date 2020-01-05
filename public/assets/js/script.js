$(document).ready(function() {
    var balls = $(".ball");

    $(balls).hover(function(){
        var name = $(this).attr("name");

        $("<div class='hint' style='transition: .2s;'><div class='triangle'></div>" + name + "</div>").appendTo(this);
    }, function() {
        $(".hint").remove();
    });
});
