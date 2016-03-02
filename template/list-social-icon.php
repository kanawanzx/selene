<?php
/**
 * Monalisa the list social icon.
 *
 * Sets up the share social.
 *
 * @package WordPress
 * @subpackage Monalisa
 * @since Monalisa 1.0
 */
?>
<ul class="as-list-social-header-wrapper">
    <?php
    if (as_option('as_twitter_url')) {
        echo '<li><a href="' . esc_url(as_option('as_twitter_url')) . '" class = "as-twitter" title="Twitter"><span class="dslc-icon dslc-icon-twitter"></span></a></li>';
    }
    if (as_option('as_facebook_url')) {
        echo '<li><a href="' . esc_url(as_option('as_facebook_url')) . '" class = "as-facebook" title="Facebook"><span class="dslc-icon dslc-icon-facebook"></span></a></li>';
    }
    if (as_option('as_dribbble_url')) {
        echo '<li><a href="' . esc_url(as_option('as_dribbble_url')) . '" class = "as-dribbble" title="Dribbble"><span class="dslc-icon dslc-icon-dribbble"></span></a></li>';
    }
    if (as_option('as_google_url')) {
        echo '<li><a href="' . esc_url(as_option('as_google_url')) . '" class = "as-google-plus" title="Google Plus"><span class="dslc-icon dslc-icon-google-plus"></span></a></li>';
    }
    if (as_option('as_pinterest_url')) {
        echo '<li><a href="' . esc_url(as_option('as_pinterest_url')) . '" class = "as-pinterest" title="Pinterest"><span class="dslc-icon dslc-icon-pinterest"></span></a></li>';
    }
    if (as_option('as_youtube_url')) {
        echo '<li><a href="' . esc_url(as_option('as_youtube_url')) . '" class = "as-youtube" title="Youtube"><span class="dslc-icon dslc-icon-youtube"></span></a></li>';
    }
    if (as_option('as_vimeo_url')) {
        echo '<li><a href="' . esc_url(as_option('as_vimeo_url')) . '" class = "as-vimeo" title="Vimeo"><span class="dslc-icon dslc-icon-vimeo-square"></span></a></li>';
    }
    if (as_option('as_behance_url')) {
        echo '<li><a href="' . esc_url(as_option('as_behance_url')) . '" class = "as-behance" title="Behance"><span class="dslc-icon dslc-icon-behance"></span></a></li>';
    }
    if (as_option('as_flickr_url')) {
        echo '<li><a href="' . esc_url(as_option('as_flickr_url')) . '" class = "as-flickr" title="Flickr"><span class="dslc-icon dslc-icon-flickr"></span></a></li>';
    }
    if (as_option('as_tumblr_url')) {
        echo '<li><a href="' . esc_url(as_option('as_tumblr_url')) . '" class = "as-tumblr" title="Tumblr"><span class="dslc-icon dslc-icon-tumblr"></span></a></li>';
    }
    if (as_option('as_linkedin_url')) {
        echo '<li><a href="' . esc_url(as_option('as_linkedin_url')) . '" class = "as-linkedin" title="Linkedin"><span class="dslc-icon dslc-icon-linkedin"></span></a></li>';
    }
    if (as_option('as_instagram_url')) {
        echo '<li><a href="' . esc_url(as_option('as_instagram_url')) . '" class = "as-instagram" title="Instagram"><span class="dslc-icon dslc-icon-instagram"></span></a></li>';
    }
    if (as_option('as_github_url')) {
        echo '<li><a href="' . esc_url(as_option('as_github_url')) . '" class = "as-github" title="Github"><span class="dslc-icon dslc-icon-github"></span></a></li>';
    }
    if (as_option('as_dropbox_url')) {
        echo '<li><a href="' . esc_url(as_option('as_dropbox_url')) . '" class = "as-dropbox" title="Dropbox"><span class="dslc-icon dslc-icon-dropbox"></span></a></li>';
    }
    if (as_option('as_foursquare_url')) {
        echo '<li><a href="' . esc_url(as_option('as_foursquare_url')) . '" class = "as-foursquare" title="Foursquare"><span class="dslc-icon dslc-icon-foursquare"></span></a></li>';
    }
    ?>
</ul>