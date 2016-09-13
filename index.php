<?php
function c($a = false) {
    if(!$a) {
        return false;
    }

    return isset($a) && !empty($a);
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
    <form class="w" method="post">
        <input class="tr" type="radio" id="fc" name="t" value="fc"<?php echo (c($_POST['t']) && $_POST['t'] === "fc") || !c($_POST['t'])  ? " checked" : "fc" ?>>
        <label class="tl" for="fc">Face ten</label>
        <input class="tr" type="radio" id="ft" name="t" value="ft"<?php echo c($_POST['t']) && $_POST['t'] === "ft" ? " checked" : "ft" ?>>
        <label class="tl" for="ft">Face type</label>
        <input class="tr" type="radio" id="ht" name="t" value="ht"<?php echo c($_POST['t']) && $_POST['t'] === "ht" ? " checked" : "ht" ?>>
        <label class="tl" for="ht">Hair type</label>
        <input class="tr" type="radio" id="hc" name="t" value="hc"<?php echo c($_POST['t']) && $_POST['t'] === "hc" ? " checked" : "hc" ?>>
        <label class="tl" for="hc">Hair color</label>
        <input class="tr" type="radio" id="ey" name="t" value="ey"<?php echo c($_POST['t']) && $_POST['t'] === "ey" ? " checked" : "ey" ?>>
        <label class="tl" for="ey">Eyes</label>
        <input class="tr" type="radio" id="ea" name="t" value="ea"<?php echo c($_POST['t']) && $_POST['t'] === "ea" ? " checked" : "ea" ?>>
        <label class="tl" for="ea">Ears</label>
        <input class="tr" type="radio" id="n" name="t" value="n"<?php echo c($_POST['t']) && $_POST['t'] === "n" ? " checked" : "n" ?>>
        <label class="tl" for="n">Nose</label>
        <input class="tr" type="radio" id="m" name="t" value="m"<?php echo c($_POST['t']) && $_POST['t'] === "m" ? " checked" : "m" ?>>
        <label class="tl" for="m">Mouth</label>

        <input class="cr" type="radio" id="fl" name="fc" value="fl"<?php echo (c($_POST['fc']) && $_POST['fc'] === "fl") || !c($_POST['fc'])  ? " checked" : "fc" ?>>
        <input class="cr" type="radio" id="fm" name="fc" value="fm"<?php echo (c($_POST['fc']) && $_POST['fc'] === "fm") || !c($_POST['fc'])  ? " checked" : "fc" ?>>
        <input class="cr" type="radio" id="fd" name="fc" value="fd"<?php echo (c($_POST['fc']) && $_POST['fc'] === "fd") || !c($_POST['fc'])  ? " checked" : "fc" ?>>

        <input class="cr" type="radio" id="fs" name="ft" value="fs"<?php echo (c($_POST['ft']) && $_POST['ft'] === "fs") || !c($_POST['ft'])  ? " checked" : "fc" ?>>
        <input class="cr" type="radio" id="fr" name="ft" value="fr"<?php echo (c($_POST['ft']) && $_POST['ft'] === "fr") || !c($_POST['ft'])  ? " checked" : "fc" ?>>
        <input class="cr" type="radio" id="fo" name="ft" value="fo"<?php echo (c($_POST['ft']) && $_POST['ft'] === "fo") || !c($_POST['ft'])  ? " checked" : "fc" ?>>

        <input class="cr" type="radio" id="hb" name="ht" value="hb"<?php echo (c($_POST['ht']) && $_POST['ht'] === "hb") || !c($_POST['ht'])  ? " checked" : "fc" ?>>
        <input class="cr" type="radio" id="hs" name="ht" value="hs"<?php echo (c($_POST['ht']) && $_POST['ht'] === "hs") || !c($_POST['ht'])  ? " checked" : "fc" ?>>
        <input class="cr" type="radio" id="hm" name="ht" value="hm"<?php echo (c($_POST['ht']) && $_POST['ht'] === "hm") || !c($_POST['ht'])  ? " checked" : "fc" ?>>
        <input class="cr" type="radio" id="hl" name="ht" value="hl"<?php echo (c($_POST['ht']) && $_POST['ht'] === "hl") || !c($_POST['ht'])  ? " checked" : "fc" ?>>

        <input class="cr" type="radio" id="hbl" name="hc" value="hbl"<?php echo (c($_POST['hc']) && $_POST['hc'] === "hbl") || !c($_POST['hc'])  ? " checked" : "fc" ?>>
        <input class="cr" type="radio" id="hbr" name="hc" value="hbr"<?php echo (c($_POST['hc']) && $_POST['hc'] === "hbr") || !c($_POST['hc'])  ? " checked" : "fc" ?>>
        <input class="cr" type="radio" id="hd" name="hc" value="hd"<?php echo (c($_POST['hc']) && $_POST['hc'] === "hd") || !c($_POST['hc'])  ? " checked" : "fc" ?>>

        <input class="cr" type="radio" id="eg" name="ey" value="eg"<?php echo (c($_POST['ey']) && $_POST['ey'] === "eg") || !c($_POST['ey'])  ? " checked" : "fc" ?>>
        <input class="cr" type="radio" id="ebl" name="ey" value="ebl"<?php echo (c($_POST['ey']) && $_POST['ey'] === "ebl") || !c($_POST['ey'])  ? " checked" : "fc" ?>>
        <input class="cr" type="radio" id="eb" name="ey" value="eb"<?php echo (c($_POST['ey']) && $_POST['ey'] === "eb") || !c($_POST['ey'])  ? " checked" : "fc" ?>>

        <input class="cr" type="radio" id="en" name="ea" value="en"<?php echo (c($_POST['ea']) && $_POST['ea'] === "en") || !c($_POST['ea'])  ? " checked" : "fc" ?>>
        <input class="cr" type="radio" id="er" name="ea" value="er"<?php echo (c($_POST['ea']) && $_POST['ea'] === "er") || !c($_POST['ea'])  ? " checked" : "fc" ?>>
        <input class="cr" type="radio" id="ew" name="ea" value="ew"<?php echo (c($_POST['ea']) && $_POST['ea'] === "ew") || !c($_POST['ea'])  ? " checked" : "fc" ?>>

        <input class="cr" type="radio" id="nn" name="n" value="nn"<?php echo (c($_POST['n']) && $_POST['n'] === "nn") || !c($_POST['n'])  ? " checked" : "fc" ?>>
        <input class="cr" type="radio" id="nr" name="n" value="nr"<?php echo (c($_POST['n']) && $_POST['n'] === "nr") || !c($_POST['n'])  ? " checked" : "fc" ?>>
        <input class="cr" type="radio" id="nw" name="n" value="nw"<?php echo (c($_POST['n']) && $_POST['n'] === "nw") || !c($_POST['n'])  ? " checked" : "fc" ?>>

        <input class="cr" type="radio" id="mt" name="m" value="mt"<?php echo (c($_POST['m']) && $_POST['m'] === "mt") || !c($_POST['m'])  ? " checked" : "fc" ?>>
        <input class="cr" type="radio" id="mr" name="m" value="mr"<?php echo (c($_POST['m']) && $_POST['m'] === "mr") || !c($_POST['m'])  ? " checked" : "fc" ?>>
        <input class="cr" type="radio" id="mf" name="m" value="mf"<?php echo (c($_POST['m']) && $_POST['m'] === "mf") || !c($_POST['m'])  ? " checked" : "fc" ?>>

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
        <?php if(c($_POST)) { ?>
            <script src="node_modules\html2canvas\dist\html2canvas.js" charset="utf-8"></script>
            <script>
            (function s() {
                html2canvas(document.getElementsByClassName('c'), {
                    background: undefined,
                    onrendered: function (canvas) {
                        var a = document.createElement('a');
                        a.href = canvas.toDataURL("image/jpeg").replace("image/jpeg", "image/octet-stream");
                        a.download = 'MyFlatLogo.jpg';
                        document.body.appendChild(a);
                        a.click();
                    }
                });
            })();
            </script>
        <?php } ?>
    </form>
</body>
</html>
