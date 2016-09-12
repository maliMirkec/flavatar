var casper = require('casper').create();

var inputs = ["fc", "ft", "ht", "hc", "ey", "ea", "n", "m"];

casper.start('http://localhost:9000', function() {
    casper.viewport(600, 800, function() {
        //require("utils").dump(casper.cli.args);
        //console.log(1);

        //if(!casper.cli.has(7)) {
        //    return false;
        //}

        console.log(2);

        var fn = "";

        for (var i = 0; i < inputs.length; i++) {
            fn += this.getElementAttribute('[name="' + inputs[i] + '"]:checked', 'value');
        }

        this.capture('./assets/' + fn + '.png', {
            top: 165,
            left: 190,
            width: 220,
            height: 280
        });

        this.exit();
    });

});

casper.run();
