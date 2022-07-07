const counters = document.querySelectorAll('.js-counter');
const speed = 400;

counters.forEach(counter => {
    const counterAnimate = () => {
        const value = +counter.getAttribute('data-counter');
        const data = +counter.innerText;

        const time = value / speed;
        
        if (data < value) {
            counter.innerText = Math.ceil(data + time);
            setTimeout(counterAnimate, 1);
        } else {
            counter.innerText = value;
        }

    }

    counterAnimate();
});

// Reveal elements on scroll
AOS.init({
    duration: 1000,
    once: true,
});