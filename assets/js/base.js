window.addEventListener('load', function(event) {
    var $hamburger = document.getElementById('hamburger');
    var $nav       = document.getElementsByTagName('nav')[0];

    $hamburger.addEventListener('click', function(event) {
        $nav.classList.toggle('active');
    }, false);
});

