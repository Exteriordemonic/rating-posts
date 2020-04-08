<?php
/**
* Plugin Name: Rating Posts
* Plugin URI: 
* Description: Custom post type with rating + ACF.
* Version: 0.1
* Author: Kamil Mirosz
* Author URI: kmirosz6@gmail.com
**/

define( 'RP_PATH', plugin_dir_path( __FILE__ ) );

require_once RP_PATH . '/vendor/autoload.php';

include RP_PATH.'functions/anbieter.php';
include RP_PATH.'functions/anbieter-type.php';
include RP_PATH.'functions/templates.php';
include RP_PATH.'functions/include-dists.php';
include RP_PATH.'functions/anbieter-rates.php';

include RP_PATH.'fields/setup.php';

?>

<script>
    function testinput(re, str) {
        const myReg = new RegExp(re, "g");
        if (myReg.test(str)) {
        midstring = " zawiera ";
        return true;
        } else {
        midstring = " nie zawiera ";
        return false;
        }
        console.log(str + midstring + myReg.source);
    };
</script>