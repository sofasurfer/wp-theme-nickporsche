<?php
// Set post
if( have_posts() ) the_post();

$page_id = get_queried_object_id();

get_template_part('templates/header');


?>

<div class="container-fluid">
    <div class="row">
        <img class="img-responsive img-full-width" srcset="<?= get_stylesheet_directory_uri(); ?>/assets/images/BigFish_Elemente_Mobile.png 1440w,<?= get_stylesheet_directory_uri(); ?>/assets/images/BigFish_Elemente.png 1640w" alt="" src="<?= get_stylesheet_directory_uri(); ?>/assets/images/BigFish_Elemente.png">
    </div>
</div>

<?php


// Get Site Elements
$site_elements = get_field('site_container',$page_id);

if( !empty($site_elements)){
    foreach( $site_elements as $site_element ){
        include( locate_template( 'templates/' . $site_element['acf_fc_layout'] . '.php', false, false ) );
    }
}

?>



<div id="booking" class="container-fluid">
    <div class="row n-booking">
        <img class="img-responsive img-full-width" srcset="<?= get_stylesheet_directory_uri(); ?>/assets/images/Hand_Elemente_Mobile.png 1440w,<?= get_stylesheet_directory_uri(); ?>/assets/images/Hand_Elemente.png 1640w" alt="" src="<?= get_stylesheet_directory_uri(); ?>/assets/images/Hand_Elemente.png">
        <div class="n-booking-text">
            <h2>BOOKING</h2>
            <a href="mailto:info@matthiasrutthishauser.ch">info@matthiasrutthishauser.ch</a>
        </div>
    </div>
</div>

<?php


get_template_part('templates/footer');

?>