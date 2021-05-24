<?php

    $logoPath = $_SERVER['DOCUMENT_ROOT'] . "" . "/img\SiteLogo\EM_PencilBird_Original-02.svg"
?>

<div class="header">

    <div class="logo"></div>

    <a href="/">
        <?= generate3dbox(120, 60, "HOME") ?>
    </a>


    <a href="/projects.php">
        <?= generate3dbox(120, 60, "PROJECTS") ?>
    </a>

    <a href="/stats.php">
        <?= generate3dbox(120, 60, "STATS") ?>
    </a>
</div>