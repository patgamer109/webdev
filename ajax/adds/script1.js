$(() => {
    $("#myButton").on("click", () => {
        alert("before get");
        // let dataUrl = "https://fakestoreapi.com/products";
        let dataUrl = "adds/data.json";
        console.log("url: " + dataUrl);
        $.ajax({
            url: dataUrl,
            method: "GET"
        }).done((resp) => {
            console.log("resp", resp);
        });
        alert("after get, look on console fore results");
    })
})