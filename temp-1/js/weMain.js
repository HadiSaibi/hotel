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
