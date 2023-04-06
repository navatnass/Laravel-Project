//CONST POPUPS FOR LAPTOP MOBILE


const popupLaptop = document.querySelector('.popup-laptop');
const exitLaptop = document.querySelector('.popup-laptop .top-bar .exit');
const laptopFirst = document.querySelectorAll('.portfolio-box-laptop-version .first-portfolio-example');
const popupLargeImageLaptop = document.querySelector('.popup-laptop img');
const imagesDOM = document.querySelectorAll('img.image-popup-toggle');

//POPUP LAPTOP VERSION FIRST 

imagesDOM.forEach((imgEl) => {
    // const src = imgEl.src;

    imgEl.addEventListener('click', (e) => {
        imgEl.closest('div.images-wrapper').querySelector('div.popup-laptop').classList.remove('d-none');
        // console.log(popupImgEl);
        // popupImgEl.classList.remove("d-none");
        // popupImgEl.classList.add('active');
    });
});

const popupImagesDOM = document.querySelectorAll('img.image-popup');

popupImagesDOM.forEach((imgEl) => {
    // const src = imgEl.src;

    imgEl.addEventListener('click', (e) => {
        imgEl.closest('div.popup-laptop').classList.add('d-none');
        // popupImgEl.classList.remove('active');
    });
});

exitLaptop.onclick = () => {
    popupLaptop.style.display = 'none';
}

