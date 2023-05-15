let incrementAdults = document.querySelectorAll('.increment-btn-adults');
let decrementAdults = document.querySelectorAll('.decrement-btn-adults');

let incrementChildren = document.querySelectorAll('.increment-btn-children');
let decrementChildren = document.querySelectorAll('.decrement-btn-children');

let adultsNum = document.querySelector('#adultsNum');

// Adults Button Incrementation
incrementAdults[0].addEventListener('click', () => {
    let num = parseInt(adultsNum.innerText);

    num += 1;
    adultsNum.innerText = num;
});

incrementAdults[1].addEventListener('click', () => {
    let num = parseInt(adultsNum.innerText);

    num += 1;
    adultsNum.innerText = num;
});

// Adults Button decrementation
decrementAdults[0].addEventListener('click', () => {
    let num = parseInt(adultsNum.innerText);

    if(num <= 1) return;

    num -= 1;
    adultsNum.innerText = num;
});

// Children Button Incrementation
incrementChildren[0].addEventListener('click', () => {
    let num = parseInt(childrenNum.innerText);

    num += 1;
    childrenNum.innerText = num;
});

incrementChildren[1].addEventListener('click', () => {
    let num = parseInt(childrenNum.innerText);

    num += 1;
    childrenNum.innerText = num;
});

// Children Button decrementation
decrementChildren[0].addEventListener('click', () => {
    let num = parseInt(childrenNum.innerText);

    if(num <= 0) return;

    num -= 1;
    childrenNum.innerText = num;
});


// Carousal Movement

const track = document.querySelector('.shop__track');
const slides = Array.from(track.children);
const nextButton = document.querySelector('.shop__button--right');
const prevButton = document.querySelector('.shop__button--left');

const slideWidth = slides[0].getBoundingClientRect().width;

//arrange the slides next to one another
const setSlidePosition = (slide, index) =>  slide.style.left = slideWidth * index + 'px';
slides.forEach(setSlidePosition);

const moveToSlide = (track, currentSlide, targetSlide) => {
    //move to the target slide
    track.style.transform = 'translateX(-' + targetSlide.style.left + ')';
    currentSlide.classList.remove('current-slide');
    targetSlide.classList.add('current-slide');
} 

const hideShowArrows = (slides, prevButton, nextButton, targetIndex) => {
    if(targetIndex === 0) {
        prevButton.classList.add('is-hidden');
        nextButton.classList.remove('is-hidden');
    } else if(targetIndex === slides.length -1) {
        prevButton.classList.remove('is-hidden');
        nextButton.classList.add('is-hidden');
    } else {
        prevButton.classList.remove('is-hidden');
        nextButton.classList.remove('is-hidden');
    }
}

//move to left when clicked on left arrow

prevButton.addEventListener('click', e => {
    const currentSlide = track.querySelector('.current-slide');
    const prevSlide = currentSlide.previousElementSibling; 
    const prevIndex = slides.findIndex(slide => slide === prevSlide);

    moveToSlide(track, currentSlide, prevSlide);
    hideShowArrows(slides, prevButton, nextButton, prevIndex);
})

//move to right when clicked on right arrow

nextButton.addEventListener('click', e => {
    const currentSlide = track.querySelector('.current-slide');
    const nextSlide = currentSlide.nextElementSibling; 
    const nextIndex = slides.findIndex(slide => slide === nextSlide);

    moveToSlide(track, currentSlide, nextSlide);
    hideShowArrows(slides, prevButton, nextButton, nextIndex +3);
});
