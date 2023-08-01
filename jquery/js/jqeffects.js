$(() => {
    $("#hide").on("click", function(evt) {
        $("#circle").hide(300);
    })
    $("#show").on("click", function(evt) {
        $("#circle").show(1000);
    })
    $("#toggle").on("click", function(evt) {
        $("#circle").toggle(1500);
    })
    $("#fadeIn").on("click", function(evt) {
        $("#circle").fadeIn(5000);
    })
    $("#fadeOut").on("click", function(evt) {
        $("#circle").fadeOut(2000);
    })
    $("#animateOn").on("click", function(evt) {
        $("#circle").animate({width: "500px", height: "100px"}, 2000, () => {
            alert("finish animate on");
        });
    })
    $("#animateRev").on("click", function(evt) {
        $("#circle").animate({width: "250px", height: "250px"}, 2000, () => {
            alert("finish animate rev");
        });
    })
    // we can also use this
    // $("button").on("click", (evt) => {
    //     const timeFor = 1500;
    //     const objId = evt.target.id;
    //     const c1 = $("#circle");
    //     switch (objId) {
    //         case "show":
    //             c1.show(timeFor);
    //             break;
    //         case "hide":
    //             c1.hide(timeFor);
    //             break;  
    //         // ...  
    //     }
    // })
});

// this is too dangerous
// $('div button').on('click', function (evt) {
//     const c = $('#circle');
//     eval('c.' + this.id + '(800)');
// });