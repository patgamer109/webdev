
$(
    () => {
        $("#circle").on("click", () => {
            alert("click on circle");            
        })
        $("#myp").on("click", () => {
            alert("click on paragraph");            
        })
        // in questo modo avendo una arrow function non posso accedere a this
        // $(".square").on("click", (evt) => {
        //     alert("click on square: " + evt.target.id); // trova l'id in base alla classe
        // })
        $(".square").on("click", function (evt) {
            alert("click on square: " + this);
            $(this).toggleClass("rounded"); // aggiunge o rimuove una classe
        })
        $(".square2").first().on("click", function (params) {
            $(this).html("<strong>I'm the first square2</strong>");
        })
    }
)