<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once(getcwd() . "/" . "components/headerIncludes.php"); ?>

</head>

<body>
<?php
        require_once("components/3dbox.php");
        require_once("components/navbar.php");
        
    ?>

    <div class="content">
        <div class="label-container">
            <div class="label-header">
                <img
                    class="left-black-red-button"
                    src="img\WebsiteButton_LeftArrow_blk.svg"
                    alt="Right"
                    height="25"
                    width="25" />
                <div class="label-text">CARDS GALLERY</div> 
                <img
                    class="right-black-red-button"
                    src="img\WebsiteButton_RightArrow_blk.svg"
                    alt="Right"
                    height="25"
                    width="25" />
            </div>
            <div class="label-content">
                <div class="label-content-pane-carousel">
                    <!-- Carousel -->
                    <div class="carousel">
                        <div class="carouselControls">
                            <div id="carouselBack1" class="carouselLeft">
                                <img
                                    class="left-black-red-button"
                                    src="img\WebsiteButton_LeftArrow_blk.svg"
                                    alt="Left"
                                    height="25"
                                    width="25" />
                            </div>
                            <div class="carouselCenter">
                                <img id="carousel1" class="carouselImage"></img>
                            </div>
                            <div id="carouselNext1" class="carouselRight">
                                <img
                                    class="right-black-red-button"
                                    src="img\WebsiteButton_RightArrow_blk.svg"
                                    alt="Right"
                                    height="25"
                                    width="25" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="label-content-pane-text">
                    A 2020 goal of mine is to create 25 logos based on a theme. This year’s theme is birds.
                </div>

            </div>
        </div>
    </div>

    <?php require_once(getcwd() . "/" . "components/footer.php"); ?>

    <script src="js/card-carousel.js"></script>
</body>

</html>