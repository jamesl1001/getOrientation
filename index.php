<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>getOrientation</title>
    <style>
    body {
        font-family: sans-serif;
        font-size: 2em;
    }
    </style>
</head>
<body>
    <?php
        require_once('getOrientation.php');

        $urls = array(
            'http://th00.deviantart.net/fs71/PRE/f/2013/086/0/b/0be1fdbdd20bc748c632ef363db32930-d5zh8ne.jpg',
            'http://th07.deviantart.net/fs71/PRE/f/2012/115/4/c/4c83ccdd8cf8143485a42902cc51fc94-d4xjrun.jpg',
            'http://th03.deviantart.net/fs51/PRE/i/2009/288/e/3/The_Hero_Rests_by_FU51ON.png'
        );

        for($i = 0, $l = count($urls); $i < $l; $i++):
            $src         = $urls[$i];
            $orientation = getOrientation($src);
        ?>
        <img src="<?= $src; ?>"/> <span><?= $orientation; ?></span>
        <?php endfor; ?>
</body>
</html>