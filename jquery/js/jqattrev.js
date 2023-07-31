
$(
    () => {
        // i can use it when dom is ready
        // // on click on div add title property on this
        // $("div").on("click", function (evt) {
        //     $(this).attr("title", "this is a div");
        // })
        $("div").attr("title", "this is a div");
        $("div").attr("style", "border: 2px solid black");
        //$("div").attr("style", "background-color: pink");
        $("div").css("background-color", "pink");
        // i can use contat
        //$("div").attr("title", "this is a div").attr("style", "border: 2px solid black");
        $("div").last().css("width", "250px");
        $("div").first().css("height", "250px");
    }
)