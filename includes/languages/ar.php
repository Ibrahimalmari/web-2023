
<?php
function lang($phrase){

    static $lang = array(
        'title' => 'الرئسية',
        'direction' => 'right',
        'Home' => 'الرئسية',
        'About' => 'حول الموقع'

    );

    return $lang[$phrase];



}





?>