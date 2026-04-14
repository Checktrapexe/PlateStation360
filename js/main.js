window.addEventListener('load', function () {
    // Only fade header
    const header = document.querySelector('header');

    if (header) {
        header.style.opacity = '0';
        header.style.transition = 'opacity 0.4s ease-in';

        // Trigger the animation
        setTimeout(function () {
            header.style.opacity = '1';
        }, 10);
    }
});

