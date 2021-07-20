<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once(getcwd() . "/" . "components/headerIncludes.php"); ?>
</head>

<body>
    <div class="header">

        <div class="logo"><img src="EM Logo\EM_2020Logo_Black.svg" /></div>

        <a href="index">
            <svg class="boxed"  width="150" height="75">

                <line x1="1%" y1="25%" x2="1%" y2="99%" />
                <line x1="1%" y1="99%" x2="88.5%" y2="99%" />

                <line x1="1%" y1="25%" x2="12.5%" y2="1%" />
                <line x1="1%" y1="99%" x2="12.5%" y2="75%" />
                <line x1="88.5%" y1="99%" x2="99%" y2="75%" />

                <rect class="fore" x="12.5%" y="1%" width="86.5%" height="75%" fill="white" stroke="black" />

                <text x="56.25%" y="50%" text-anchor="middle" style="pointer-events: none;">HOME</text>

            </svg>
        </a>


        <a href="projects">
            <svg class="boxed" width="150" height="75">

                <line x1="1%" y1="25%" x2="1%" y2="99%" />
                <line x1="1%" y1="99%" x2="88.5%" y2="99%" />

                <line x1="1%" y1="25%" x2="12.5%" y2="1%" />
                <line x1="1%" y1="99%" x2="12.5%" y2="75%" />
                <line x1="88.5%" y1="99%" x2="99%" y2="75%" />

                <rect class="fore" x="12.5%" y="1%" width="86.5%" height="75%" fill="white" stroke="black" />

                <text x="56.25%" y="50%" text-anchor="middle" style="pointer-events: none;">Projects</text>

            </svg>
        </a>

        <a href="stats">
        <svg class="boxed" width="150" height="75">

            <line x1="1%" y1="25%" x2="1%" y2="99%" />
            <line x1="1%" y1="99%" x2="88.5%" y2="99%" />

            <line x1="1%" y1="25%" x2="12.5%" y2="1%" />
            <line x1="1%" y1="99%" x2="12.5%" y2="75%" />
            <line x1="88.5%" y1="99%" x2="99%" y2="75%" />

            <rect class="fore" x="12.5%" y="1%" width="86.5%" height="75%" fill="white" stroke="black" />

            <text x="56.25%" y="50%" text-anchor="middle" style="pointer-events: none;">STATS</text>

        </svg>
        </a>
    </div>

    <div class="content">
        <div class="label-container">
            <div class="label-header">
                NOSTALGIA-DISTRACTED
            </div>
            <div class="label-content">
                <div class="label-content-pane">
                    <!-- Carousel -->
                    <div class="carousel">
                        <div class="carouselCenter">
                            <img width="300" height="200" id="carousel1" class="carouselImage"></img>
                        </div>
                        <div class="carouselControls">
                            <div id="carouselBack1" class="carouselLeft">
                                <svg id="previous" class="boxed" width="100" height="100">

                                    <line x1="1%" y1="25%" x2="1%" y2="99%" />
                                    <line x1="1%" y1="99%" x2="88.5%" y2="99%" />

                                    <line x1="1%" y1="25%" x2="12.5%" y2="1%" />
                                    <line x1="1%" y1="99%" x2="12.5%" y2="75%" />
                                    <line x1="88.5%" y1="99%" x2="99%" y2="75%" />

                                    <rect class="fore" x="12.5%" y="1%" width="86.5%" height="75%" fill="white"
                                        stroke="black" />

                                    <text x="56.25%" y="50%" text-anchor="middle"
                                        style="pointer-events: none;">BACK</text>

                                </svg>
                            </div>
                            <div id="carouselNext1" class="carouselRight">
                                <svg id="next" class="boxed" width="100" height="100">

                                    <line x1="1%" y1="25%" x2="1%" y2="99%" />
                                    <line x1="1%" y1="99%" x2="88.5%" y2="99%" />

                                    <line x1="1%" y1="25%" x2="12.5%" y2="1%" />
                                    <line x1="1%" y1="99%" x2="12.5%" y2="75%" />
                                    <line x1="88.5%" y1="99%" x2="99%" y2="75%" />

                                    <rect class="fore" x="12.5%" y="1%" width="86.5%" height="75%" fill="white"
                                        stroke="black" />

                                    <text x="56.25%" y="50%" text-anchor="middle"
                                        style="pointer-events: none;">NEXT</text>

                                </svg>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="label-content-pane">
                    Inspired by a longtime love of video games, this ambigram reflects the dual nature of reliving the classics and putting off must-dos for five more minutes. 
                    <br>
                    <br>
                    Completed from sketch to framed piece in the fall of 2019 in time for Off Brand. The digital version was created in early 2020.

                </div>

            </div>
        </div>
    </div>

    <div class="footer">
        <div class="left">
            <a href="mailto:ekmccourt@gmail.com">
                <svg class="boxed" width="150" height="100">
    
                    <line x1="1%" y1="25%" x2="1%" y2="99%" />
                    <line x1="1%" y1="99%" x2="88.5%" y2="99%" />
                    
                    <line x1="1%" y1="25%" x2="12.5%" y2="1%" />
                    <line x1="1%" y1="99%" x2="12.5%" y2="75%"/>
                    <line x1="88.5%" y1="99%" x2="99%" y2="75%"/>
                    
                    <rect class="fore" x="12.5%" y="1%" width="86.5%" height="75%" fill="white" stroke= "black" />
                    
                    <text x="56.25%" y="50%" text-anchor="middle" style="pointer-events: none;">CONTACT</text>
                    
              </svg>
            </a>
        </div>
        <div class="right">
            <div class="row">EMILY@CALOGER.CA</div>
            <div class="row">@EMCALOGER</div>
        </div>
    </div>

    <script src="js/nostalgia-distracted-carousel.js"></script>
</body>

</html>