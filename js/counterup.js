let valueDisplays = document.querySelectorAll(".counter");
let counterElement = document.querySelector('.counter-area');
let started = false;
let sections = document.querySelectorAll('section');

function getOffsetTop (element) {
    let offsetTop = 0;
    while (element) {
        offsetTop += element.offsetTop;
        element = element.offsetParent;
    }
    return offsetTop;
}

function startCount(el) {
    let goal = el.dataset.goal;
    let count = setInterval(() => {
        el.textContent++;
        if (el.textContent == goal) {
            clearInterval(count);
        }
    }, 10000 / goal);
}

//========================================================== Animations ==================================================

window.onscroll = () => {
    if (window.scrollY >= getOffsetTop(counterElement) - 300) { //counter
        if (!started) {
            valueDisplays.forEach((valueDisplay) => startCount(valueDisplay));
        }
        started = true;
    }

    sections.forEach(sec => { //animations
        let top = window.scrollY;
        let offset = sec.offsetTop - 300;
        let height = sec.offsetHeight;

        if (top >= offset && top < offset + height) {
            sec.classList.add('show-animate');
        }
    });
}