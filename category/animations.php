<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANIMATIONS</title>
    <link rel="icon" 
      type="image/png" 
      href="..\img\SiteLogo\EM_PencilBird_Original-02.svg" />
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
                
                <div class="label-text">ANIMATIONS</div> 
                
            </div>
            <div class="label-content">
            
                <a class="centered-video" href="../project/newyearlemon">
                    <video class="galleryImage" width="300" height="300" autoplay muted loop playsinline>
                        <source src="..\img\January 2021\EM_January2021_Lemon_WhiteBG.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </a>

                <video class="galleryImage" width="300" height="300" autoplay muted loop playsinline>
                    <source src="..\img\February 2021\EM_February2021_BorealisAnimation.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>

                <a class="centered-video" href="../project/skycycle">
                    <video class="galleryImage" width="300" height="300" autoplay muted loop playsinline>
                        <source src="..\img\February 2021\EM_NightSkyAnimation_Feb20.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </a>

                <video class="galleryImage" width="300" height="300" autoplay muted loop playsinline>
                    <source src="..\img\April 2021\EM_ThankYouAnimation_Apr18 (2).mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                
                <a class="centered-video" href="../project/stokelyholidaycard">
                    <div class="galleryImage">
                        <img class="image" src="..\img\Animation_HolidayCard\JJ_Holiday2020_RedGrey_540px.gif">
                    </div>
                </a>

                <a class="centered-video" href="../project/newnormal">
                    <video class="galleryImage" width="300" height="300" autoplay muted loop playsinline>
                        <source src="..\img\Animation_NewNormal\HRM_NN_Work5c_WebsiteCut_AME\newnormalsnippet.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </a>

                <a class="centered-video" href="../project/elaborate">
                    <video class="galleryImage" width="300" height="300" autoplay muted loop playsinline>
                        <source src="..\img\Animation_Elaborate\EM_ElaborateAnimation_Mar21.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </a>

                <a class="centered-video" href="../project/pencilbird">
                    <video class="galleryImage" width="300" height="300" autoplay muted loop playsinline>
                        <source src="..\img\Animation_PencilBird\EM_PencilBird1_JuneRun.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </a>

                <a class="centered-video" href="../project/stayhydrated">
                    <video class="galleryImage" width="300" height="300" autoplay muted loop playsinline>
                        <source src="..\img\Animation_StayHydrated\EM_StayHydrated_3Colour.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </a>

                <a class="centered-video" href="../project/rechargebattery">
                    <video class="galleryImage" width="300" height="300" autoplay muted loop playsinline>
                        <source src="..\img\BatteryAnimation_MissingText\Animation_RechargeBattery\EM_BatteryAnimation.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </a>
            </div>
        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>