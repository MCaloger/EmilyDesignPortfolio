<?php 

    function generate3dbox($width, $height, $text) {
        echo ('
            <svg class="boxed" width="' . $width . '" height="' . $height . '">

            <line x1="1%" y1="25%" x2="1%" y2="99%" />
            <line x1="1%" y1="99%" x2="88.5%" y2="99%" />

            <line x1="1%" y1="25%" x2="12.5%" y2="1%" />
            <line x1="1%" y1="99%" x2="12.5%" y2="75%" />
            <line x1="88.5%" y1="99%" x2="99%" y2="75%" />

            <rect class="fore" x="12.5%" y="1%" width="86.5%" height="75%" fill="white" stroke="black" />

            <text x="56.25%" y="50%" text-anchor="middle" style="pointer-events: none;">' . $text . '</text>

        </svg>
        ');
    }

?>