<?php

$value = htmlspecialchars($_GET['q']);
// var_dump($value);

// function find_hours($value){

    switch ($value) {
        case"Monday": 
            echo "<h5>Open 8-15</h5>";
            break;
        case "Tuesday":
        case "Wednesday":
        case "Thursday":
        case "Friday":
            echo "<h5>Open 8-18</h5>";
        break;
        case "Saturday":
            echo "<h5>Open 10-14</h5>";
        default:
            echo "";
    }
// }
// add_action('wp_ajax_myform', 'find_hours');
// add_action('wp_ajax_nopriv_myform', 'find_hours');


?>