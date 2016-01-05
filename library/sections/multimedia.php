<?php
/**
 * Multimedia
 *
 * 1. Multimedia video
 * 2. Facebook Like box
 */

/**
 * Get the latest multimedia video
 */
function get_multimedia_video() {
    echo '<iframe width="100%" height="156" src="http://www.youtube.com/embed?max-results=1&controls=1&showinfo=0&rel=0&listType=user_uploads&list=asmsuexponent" frameborder="0" allowfullscreen="allowfullscreen"></iframe>';
}

/**
 * Display a Facebook Like box
 */
function get_facebook_like_box() {
    echo '<a href="https://www.facebook.com/MSUExponent" target="_blank"><img src="http://msuexponent.com/wp-content/images/fb-like.jpg" /></a>';
}

?>
