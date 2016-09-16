var f;

var z = function(event, that) {
    event.preventDefault();

    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.onload = y;
    s.src = 'node_modules/html2canvas/dist/html2canvas.js';
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);

    f = that;
};

var y = function() {
    html2canvas(document.getElementsByClassName('c'), {
        background: undefined,
        onrendered: function (canvas) {
            var i = document.getElementsByClassName('i');

            i = document.createElement("input");
            i.type = "hidden";
            i.className = "i";
            i.name = "i";

            i.value = canvas.toDataURL("image/png");
            f.appendChild(i);

            f.submit();
        }
    });
};
