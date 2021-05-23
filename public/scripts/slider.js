const slider = document.getElementById('slider');
const sliderItems = document.getElementById('slides');
const prev = document.getElementById('prev');
const next = document.getElementById('next');

/**
 * @see https://medium.com/@claudiaconceic/infinite-plain-javascript-slider-click-and-touch-events-540c8bd174f2
 * @param {HTMLElement} wrapper
 * @param {HTMLElement} items
 * @param {HTMLElement} prev
 * @param {HTMLElement} next
 */
function slide(wrapper, items, prev, next) {
    let posInitial,
        slides = items.getElementsByClassName('slide'),
        slidesLength = slides.length,
        slideSize = items.getElementsByClassName('slide')[0].offsetWidth,
        firstSlide = slides[0],
        lastSlide = slides[slidesLength - 1],
        cloneFirst = firstSlide.cloneNode(true),
        cloneLast = lastSlide.cloneNode(true),
        index = 0,
        allowShift = true;

    // Clone first and last slide
    items.appendChild(cloneFirst);
    items.insertBefore(cloneLast, firstSlide);
    wrapper.classList.add('loaded');

    // Click events
    prev.addEventListener('click', function () {
        shiftSlide(-1)
    });
    next.addEventListener('click', function () {
        shiftSlide(1)
    });

    // Transition events
    items.addEventListener('transitionend', checkIndex);

    function shiftSlide(dir, action) {
        items.classList.add('shifting');

        if (allowShift) {
            if (!action) {
                posInitial = items.offsetLeft;
            }

            if (dir === 1) {
                items.style.left = (posInitial - slideSize) + "px";
                index++;
            } else if (dir === -1) {
                items.style.left = (posInitial + slideSize) + "px";
                index--;
            }
        }


        allowShift = false;
    }

    function checkIndex() {
        items.classList.remove('shifting');

        if (index === -1) {
            items.style.left = -(slidesLength * slideSize) + "px";
            index = slidesLength - 1;
        }

        if (index === slidesLength) {
            items.style.left = -(slideSize) + "px";
            index = 0;
        }

        allowShift = true;
    }
}

slide(slider, sliderItems, prev, next);