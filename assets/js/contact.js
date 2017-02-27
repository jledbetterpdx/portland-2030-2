
window.addEventListener('load', function(event) {
    var $selects  = document.getElementById('contact').getElementsByTagName('select');
    var $expandos = document.querySelectorAll('input.expando');

    var expando = function(event)
    {
        // Get min and max data attributes
        var min = this.dataset.expandoMin * 1;
        var max = this.dataset.expandoMax * 1;
        // Get length of target element text
        var len = this.value.length + 1;
        // Over- and underflow protection
        if (len < min) len = min;
        if (len > max) len = max;
        // Apply expando effect to text box
        this.style.width = len + 'ch';
    };

    var fixSelectColors = function(event)
    {
        // Only run if the default option isn't selected
        if (this.options[this.selectedIndex].value !== '')
        {
            console.log('run fixSelectColors');
            // Remove the "optional" class to mimic the behavior of the required dropdown
            if (this.classList.contains('optional')) this.classList.remove('optional');
            // Since this option is no longer selectable, we SHOULD be able to remove the event
            this.removeEventListener(fixSelectColors);
        }
    };

    for (var i = 0; i < $expandos.length; ++i) {
        $expandos[i].addEventListener('keydown', expando, false);
        $expandos[i].addEventListener('keypress', expando, false);
        $expandos[i].addEventListener('keyup', expando, false);
    }

    for (var i = 0; i < $selects.length; ++i) {
        $selects[i].addEventListener('change', fixSelectColors, false);
    }

});