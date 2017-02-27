class JEvents {
    constructor() {
        this.jlog = [];

        window.addEventListener('mousemove', function(event) {
            var _console = {};
            _console.target = event.target.nodeName;
            _console.pageX = event.pageX;
            _console.pageY = event.pageY;
            _console.targetX = event.pageX - event.target.offsetLeft;
            _console.targetY = event.pageY - event.target.offsetTop;
            
            console.log(event);
        });
    }

    _log(data) {

    }
}

const JEVENTS = new JEvents();