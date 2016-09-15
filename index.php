<?php
if(isset($_POST['i'])) {
    $file = $_POST['fc'] . $_POST['ft'] . $_POST['ht'] . $_POST['hc'] . $_POST['ey'] . $_POST['ea'] . $_POST['n'] . $_POST['m'] . '.png';
    $path = __DIR__ . '/gfx/';
    $filepath = $path . $file;

    if(!file_exists($filepath)) {
        list(, $data) = explode(',', $_POST['i']);
        $data = base64_decode($data);
        file_put_contents($filepath, $data);
    }

    header('Content-type: octet/stream');
    header('Content-disposition: attachment; filename=flavatar.png;');
    header('Content-Length: '.filesize($filepath));
    readfile($filepath);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="10k.css">
    <title>CSS logo builder</title>
</head>
<body>
    <form class="w" method="post" onsubmit="z(event, this)">
        <input class="tr" type="radio" id="fc" name="t" value="fc"<?php echo (isset($_POST['t']) && $_POST['t'] === "fc") || !isset($_POST['t']) ? " checked" : "
        "; ?>>
        <label class="tl" for="fc">Face ten</label>
        <input class="tr" type="radio" id="ft" name="t" value="ft"<?php echo isset($_POST['t']) && $_POST['t'] === "ft" ? " checked" : "
        "; ?>>
        <label class="tl" for="ft">Face type</label>
        <input class="tr" type="radio" id="ht" name="t" value="ht"<?php echo isset($_POST['t']) && $_POST['t'] === "ht" ? " checked" : "
        "; ?>>
        <label class="tl" for="ht">Hair type</label>
        <input class="tr" type="radio" id="hc" name="t" value="hc"<?php echo isset($_POST['t']) && $_POST['t'] === "hc" ? " checked" : "
        "; ?>>
        <label class="tl" for="hc">Hair color</label>
        <input class="tr" type="radio" id="ey" name="t" value="ey"<?php echo isset($_POST['t']) && $_POST['t'] === "ey" ? " checked" : "
        "; ?>>
        <label class="tl" for="ey">Eyes</label>
        <input class="tr" type="radio" id="ea" name="t" value="ea"<?php echo isset($_POST['t']) && $_POST['t'] === "ea" ? " checked" : "
        "; ?>>
        <label class="tl" for="ea">Ears</label>
        <input class="tr" type="radio" id="n" name="t" value="n"<?php echo isset($_POST['t']) && $_POST['t'] === "n" ? " checked" : "
        "; ?>>
        <label class="tl" for="n">Nose</label>
        <input class="tr" type="radio" id="m" name="t" value="m"<?php echo isset($_POST['t']) && $_POST['t'] === "m" ? " checked" : "
        "; ?>>
        <label class="tl" for="m">Mouth</label>

        <input class="cr" type="radio" id="fl" name="fc" value="fl"<?php echo (isset($_POST['fc']) && $_POST['fc'] === "fl") ? " checked" : "
        "; ?>>
        <input class="cr" type="radio" id="fm" name="fc" value="fm"<?php echo (isset($_POST['fc']) && $_POST['fc'] === "fm") || !isset($_POST['fc']) ? " checked" : "
        "; ?>>
        <input class="cr" type="radio" id="fd" name="fc" value="fd"<?php echo (isset($_POST['fc']) && $_POST['fc'] === "fd") ? " checked" : "
        "; ?>>

        <input class="cr" type="radio" id="fs" name="ft" value="fs"<?php echo (isset($_POST['ft']) && $_POST['ft'] === "fs") ? " checked" : "
        "; ?>>
        <input class="cr" type="radio" id="fr" name="ft" value="fr"<?php echo (isset($_POST['ft']) && $_POST['ft'] === "fr") || !isset($_POST['ft']) ? " checked" : "
        "; ?>>
        <input class="cr" type="radio" id="fo" name="ft" value="fo"<?php echo (isset($_POST['ft']) && $_POST['ft'] === "fo") ? " checked" : "
        "; ?>>

        <input class="cr" type="radio" id="hb" name="ht" value="hb"<?php echo (isset($_POST['ht']) && $_POST['ht'] === "hb") ? " checked" : "
        "; ?>>
        <input class="cr" type="radio" id="hs" name="ht" value="hs"<?php echo (isset($_POST['ht']) && $_POST['ht'] === "hs") ? " checked" : "
        "; ?>>
        <input class="cr" type="radio" id="hm" name="ht" value="hm"<?php echo (isset($_POST['ht']) && $_POST['ht'] === "hm") || !isset($_POST['ht']) ? " checked" : "
        "; ?>>
        <input class="cr" type="radio" id="hl" name="ht" value="hl"<?php echo (isset($_POST['ht']) && $_POST['ht'] === "hl") ? " checked" : "
        "; ?>>

        <input class="cr" type="radio" id="hbl" name="hc" value="hbl"<?php echo (isset($_POST['hc']) && $_POST['hc'] === "hbl") ? " checked" : "
        "; ?>>
        <input class="cr" type="radio" id="hbr" name="hc" value="hbr"<?php echo (isset($_POST['hc']) && $_POST['hc'] === "hbr") || !isset($_POST['hc']) ? " checked" : "
        "; ?>>
        <input class="cr" type="radio" id="hd" name="hc" value="hd"<?php echo (isset($_POST['hc']) && $_POST['hc'] === "hd") ? " checked" : "
        "; ?>>

        <input class="cr" type="radio" id="eg" name="ey" value="eg"<?php echo (isset($_POST['ey']) && $_POST['ey'] === "eg") ? " checked" : "
        "; ?>>
        <input class="cr" type="radio" id="ebl" name="ey" value="ebl"<?php echo (isset($_POST['ey']) && $_POST['ey'] === "ebl") || !isset($_POST['ey']) ? " checked" : "
        "; ?>>
        <input class="cr" type="radio" id="eb" name="ey" value="eb"<?php echo (isset($_POST['ey']) && $_POST['ey'] === "eb") ? " checked" : "
        "; ?>>

        <input class="cr" type="radio" id="en" name="ea" value="en"<?php echo (isset($_POST['ea']) && $_POST['ea'] === "en") ? " checked" : "
        "; ?>>
        <input class="cr" type="radio" id="er" name="ea" value="er"<?php echo (isset($_POST['ea']) && $_POST['ea'] === "er") || !isset($_POST['ea']) ? " checked" : "
        "; ?>>
        <input class="cr" type="radio" id="ew" name="ea" value="ew"<?php echo (isset($_POST['ea']) && $_POST['ea'] === "ew") ? " checked" : "
        "; ?>>

        <input class="cr" type="radio" id="nn" name="n" value="nn"<?php echo (isset($_POST['n']) && $_POST['n'] === "nn") ? " checked" : "
        "; ?>>
        <input class="cr" type="radio" id="nr" name="n" value="nr"<?php echo (isset($_POST['n']) && $_POST['n'] === "nr") || !isset($_POST['n']) ? " checked" : "
        "; ?>>
        <input class="cr" type="radio" id="nw" name="n" value="nw"<?php echo (isset($_POST['n']) && $_POST['n'] === "nw") ? " checked" : "
        "; ?>>

        <input class="cr" type="radio" id="mt" name="m" value="mt"<?php echo (isset($_POST['m']) && $_POST['m'] === "mt") ? " checked" : "
        "; ?>>
        <input class="cr" type="radio" id="mr" name="m" value="mr"<?php echo (isset($_POST['m']) && $_POST['m'] === "mr") || !isset($_POST['m']) ? " checked" : "
        "; ?>>
        <input class="cr" type="radio" id="mf" name="m" value="mf"<?php echo (isset($_POST['m']) && $_POST['m'] === "mf") ? " checked" : "
        "; ?>>

        <div class="tc" data-target="fc">
            <label class="cl" for="fl">Light</label>
            <label class="cl" for="fm">Medium</label>
            <label class="cl" for="fd">Dark</label>
        </div>
        <div class="tc" data-target="ft">
            <label class="cl" for="fs">Square</label>
            <label class="cl" for="fr">Regular</label>
            <label class="cl" for="fo">Oval</label>
        </div>
        <div class="tc" data-target="ht">
            <label class="cl" for="hb">No hair</label>
            <label class="cl" for="hs">Short</label>
            <label class="cl" for="hm">Medium</label>
            <label class="cl" for="hl">Long</label>
        </div>
        <div class="tc" data-target="hc">
            <label class="cl" for="hbl">Blonde</label>
            <label class="cl" for="hbr">Brunette</label>
            <label class="cl" for="hd">Dark</label>
        </div>
        <div class="tc" data-target="ey">
            <label class="cl" for="eg">Green</label>
            <label class="cl" for="ebl">Blue</label>
            <label class="cl" for="eb">Brown</label>
        </div>
        <div class="tc" data-target="ea">
            <label class="cl" for="en">Narrow</label>
            <label class="cl" for="er">Regular</label>
            <label class="cl" for="ew">Wide</label>
        </div>
        <div class="tc" data-target="n">
            <label class="cl" for="nn">Narrow</label>
            <label class="cl" for="nr">Regular</label>
            <label class="cl" for="nw">Wide</label>
        </div>
        <div class="tc" data-target="m">
            <label class="cl" for="mt">Thin</label>
            <label class="cl" for="mr">Regular</label>
            <label class="cl" for="mf">Full</label>
        </div>
        <div class="c">
            <div class="h"></div>
            <div class="f">
                <div class="ey eyl"></div>
                <div class="ey eyr"></div>
                <div class="ea eal"></div>
                <div class="ea ear"></div>
                <div class="n"></div>
                <div class="m"></div>
            </div>
        </div>
        <button type="submit" class="b">Download</button>
        <script type="text/javascript" src="node_modules\html2canvas\dist\html2canvas.js"></script>
        <script type="text/javascript">
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = 'node_modules/html2canvas/dist/html2canvas.js';
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
        </script>
        <script type="text/javascript">
        var z = function(event, that) {
            event.preventDefault();

            html2canvas(document.getElementsByClassName('c'), {
                background: undefined,
                onrendered: function (canvas) {
                    var i = document.getElementsByClassName('i');

                    i = document.createElement("input");
                    i.type = "hidden";
                    i.className = "i";
                    i.name = "i";

                    i.value = canvas.toDataURL("image/png");
                    that.appendChild(i);

                    that.submit();
                }
            });
        };
        </script>
    </form>
</body>
</html>
