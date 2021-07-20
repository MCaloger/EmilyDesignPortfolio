<?php

    $logoPath = $_SERVER['DOCUMENT_ROOT'] . "" . "/img\SiteLogo\EM_PencilBird_Original-02.svg"
?>

<div class="header">

    <a href="/">
        <div class="logo"></div>
    </a>
    <a href="/">
        <?= generate3dbox(120, 60, "HOME") ?>
    </a>


    <a href="/projects">
        <?= generate3dbox(120, 60, "PROJECTS") ?>
    </a>

    <a href="/stats">
        <?= generate3dbox(120, 60, "STATS") ?>
    </a>
</div>