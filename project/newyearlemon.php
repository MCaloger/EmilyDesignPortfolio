<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEW YEAR LEMON</title>

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
                <div class="label-text">New Year Lemon</div> 
            </div>
            <div class="label-content">

                    <div class="label-content-pane-text">
                        2021 was a new year unlike any other. Coming out of a global pandemic and rolling into an uncertain future brought up a common phrase regarding life, lemons, and what you can do with them.
                    </div>

                    <video class="galleryImage" width="300" height="300" autoplay muted loop playsinline>
                        <source src="..\img\Animation_NewYearLemon\EM_January2021_Lemon_WhiteBG.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                </div>
                

        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>