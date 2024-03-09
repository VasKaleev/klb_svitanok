const imgs = document.getElementById('imgs')
const leftBtn = document.getElementById('left')
const rightBtn = document.getElementById('right')

// const img = document.querySelectorAll('#imgs img')


let idx = 0

const images = [
    "img/image-1.png",
    "img/image-2.webp",
];

const webs = [
    "http://www.belsteel.com/",
    "http://www.msocservis.by/",
    "",
];
console.log(images[idx])
let interval =  setInterval(() => {
     if (idx >= images.length -1) {
         idx = 0;
         --idx;
         }
         ++idx;
     imgs.innerHTML=`<a target="_blank"  href="${webs[idx]}"><img  src="${images[idx]}" /></a>`
 }, 3000);

rightBtn.addEventListener('click', () => {
    if (idx >= images.length-1) {
        idx = -1;
    }
    ++idx;
    const imageUrl = images[idx];
    imgs.innerHTML=`<img src="${images[idx]}" />`
})

leftBtn.addEventListener('click', () => {
    if (idx < 1) {
        idx = images.length;
    }
    --idx;
    const imageUrl = images[idx];
    imgs.innerHTML=`<img src="${images[idx]}" />`
})
