<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NIAC Shorts</title>
    
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
                <div class="label-text">NIAC Shorts</div> 
            </div>
            <div class="label-content">

                    <div class="label-content-pane-text">
                        <p>Over my three and a half years at a design firm, I did a handful of animations for the Nuclear Insurance Association of Canada (NIAC).</p>

                        <p>Below are a few samples of these animations, featuring their palette of red, white and black. These animations were from different projects and thus had different purposes, but most animations were built to explain a concept or service.</p>
                    </div>

                    <video class="galleryImage" width="300" height="300" autoplay muted loop playsinline>
                        <source src="..\img\Animaion_NIACshorts\EM_NIACSeRA_DocumentUpload.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                    <video class="galleryImage" width="300" height="300" autoplay muted loop playsinline>
                        <source src="..\img\Animaion_NIACshorts\EM_NIACAccomplishments_Short_NoSound.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                    <video class="galleryImage" width="300" height="300" autoplay muted loop playsinline>
                        <source src="..\img\Animaion_NIACshorts\EM_NIACSeRA_DocumentCheck.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                    <video class="galleryImage" width="300" height="300" autoplay muted loop playsinline>
                        <source src="..\img\Animaion_NIACshorts\EM_NIACSMRs_TruckCatch.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                    <video class="galleryImage" width="300" height="300" autoplay muted loop playsinline>
                        <source src="..\img\Animaion_NIACshorts\EM_NIACSeRA_MagGlassZoom.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                </div>
        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>