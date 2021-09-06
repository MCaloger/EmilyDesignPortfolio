<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JUST PEACHY</title>
    
    <?php 
        require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/headerIncludes.php"); 
    ?>

</head>

<body>
    <?php
        require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/3dbox.php");
        require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/navbar.php");
        
    ?>

    <div class="content">
        <div class="label-container">
            <div class="label-header">
                <div class="label-text">JUST PEACHY</div> 
            </div>
            <div class="label-content">

                    <div class="label-content-pane-text">
                        <p>This actually started as a farmer’s market logo but the combination of a barn silo and corn greenery proved a little unsavoury.</p>
                        <p>A pivot to green energy made sense, and this lightbulb corn combo was born!</p>
                        <p>Some process images included below. The sketch was from a short subway trip where I was pretty sure that the silo thing wasn’t worth salvaging.</p>
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Animation_JustPeachy\EM_JustPeachy_Light.png">
                    </div>

                    <div class="galleryImage">
                        <img class="image" src="..\img\Animation_JustPeachy\EM_JustPeachy_Dark.png">
                    </div>

                    <video class="galleryImage" width="300" height="300" autoplay muted loop playsinline>
                        <source src="..\img\Animation_JustPeachy\JustPeachy_LoopLight.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                    <video class="galleryImage" width="300" height="300" autoplay muted loop playsinline>
                        <source src="..\img\Animation_JustPeachy\JustPeachy_LoopDark.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>