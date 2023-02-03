
<?php
function lang($phrase){

    static $lang = array(
        'title' => 'Home',
        'direction' => 'left',
        'Home' => 'Home',
        'About' => 'About'

    );

    return $lang[$phrase];



}





?>