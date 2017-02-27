window.addEventListener('load', function(event) {
    var $hamburger = document.getElementById('hamburger');
    var $nav       = document.getElementById('left');

    $hamburger.addEventListener('click', function(event) {
        $nav.classList.toggle('active');
    }, false);
});

