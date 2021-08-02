<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCOR: 40th Anniversary in Canada</title>
    
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
                <div class="label-text">SCOR: 40th Anniversary in Canada</div> 
            </div>
            <div class="label-content">

                    <div class="label-content-pane-text">
                        <p>
                            To celebrate their 40th Anniversary of Canadian presence, our client requested a video showcasing their achievements during this time. This video was to have an animated line creating physical symbols repressing the discussed milestones. 
                        </p>

                        <p>
                            I designed and animated the line and symbols, supers, subtitles and text transitions in accordance with the client’s existing brand guidelines. All other materials were provided.
                        </p>

                        <p>
                            Shown below is a small part of the English version.  
                        </p>         
                    </div>

                    <video class="galleryImage" width="300" height="300" autoplay muted loop playsinline>
                        <source src="..\img\Animation_SCOR\SCOR_EN_Music_neg25_v3.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                </div>
        </div>
    </div>

     <?php require_once($_SERVER['DOCUMENT_ROOT'] . "" . "/components/footer.php"); ?> 
</body>

</html>