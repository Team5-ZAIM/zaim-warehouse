<?php
    // Log the user out.
    if ( isset($_COOKIE['zaim_user']) ) {
        unset($_COOKIE['zaim_user']);
        echo 'Logged out successfully.';
    } else {
        echo 'Error: User already logged out. You should not be seeing this message.';
    }
?>