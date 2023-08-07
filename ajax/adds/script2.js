$(() => {
    // let urlFakeapi = "adds/data.json";
    let urlFakeapi = "https://fakestoreapi.com/products";
    // alternative method
    // fetch(urlFakeapi).then(resp => resp.json()).then(res => {
    //     console.log(res);
    // })
    $.ajax({
        url: urlFakeapi,
        method: "GET",
        async: true,
        dataType: "json",
        headers: {
            accept: "application/json",
            "Accept-Control-Allow-Origin": "*"
        }
    }).done((resp) => {
        const row = $("<div>");
        row.addClass("row");
        resp.forEach((element) => {
            let card = $("<div>").addClass(["card", "col-md-3"]);
            let img = $("<img>").addClass(["card-img-top"]);
            img.attr("src", element.image);
            card.append(img);
            let body = $("<div>").addClass(["card-body"]);
            body.append($("<h5>").addClass("card-title").text(element.title));
            card.append(body);
            row.append(card);
        });        
        $("main").append(row);
    });
})