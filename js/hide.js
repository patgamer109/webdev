document.addEventListener('DOMContentLoaded', () => {
    let divs = document.querySelectorAll('div');
    console.log('this is divs:');
    console.log(divs);
    // divs[0].style.display = "none";
    let div1 = divs[0];
    let div2 = divs[1];
    let div3 = divs[2];
    // div1.classList.add('circle');
    // div1.addEventListener('click', (ele) => {
    //     console.log(ele);
    //     ele.target.style.width = "500px";
    //     div1.classList.toggle('circle');
    // })
    div1.addEventListener('mouseout', (ele) => {
        div1.classList.toggle('circle');
    })
    div1.addEventListener('mouseover', (ele) => {
        div1.classList.add('circle');
    })
})