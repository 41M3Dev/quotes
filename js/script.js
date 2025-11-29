const btn = document.querySelector('.btn_top');

btn.addEventListener('click', () => {

    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth"
    })

})


//--------------Header--------------//
let toggle = document.querySelector('.toggle');
let body = document.querySelector('body');

toggle.addEventListener('click', function () {
    body.classList.toggle('open');
})