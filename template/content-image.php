<?php
/**
 * Monalisa the format content post for index.
 *
 * Sets up the content.
 *
 * @package WordPress
 * @subpackage Monalisa
 * @since Monalisa 1.0
 */
$post_per_row_input = 3;
if (is_singular('dslc_projects')) {
    $post_per_row_input = 1;
}
$post_per_row      = (12 / $post_per_row_input) . '-col';
$gallery_post_type = '';
if (is_singular('dslc_projects')) {
    $gallery_post_type = 'dslc_project_images';
}
else {
    $gallery_post_type = 'dslc_gallery_images';
}

$gallery_images = get_post_meta(get_the_ID(), $gallery_post_type, true);
$gallery_images = explode(' ', trim($gallery_images));
?>
<div class="as-featured-img">
    <div class="as-image-wrapper dslc-col dslc-12-col dslc-last-col">
        <div class="list-image">
            <?php
            if (!empty($gallery_images)) {
                $as_count_col = 1;
                $max_count    = count($gallery_images);
                $as_col       = $post_per_row;
                foreach ($gallery_images as
                        $image) {
                    if ($as_count_col === 1 && $post_per_row_input != 1) {
                        $as_col .= ' dslc-first-col';
                    }
                    elseif ((($as_count_col % $post_per_row_input) == 0) || ($as_count_col == $max_count)) {
                        $as_col .= ' dslc-last-col';
                    }
                    $gallery_image_src = wp_get_attachment_image_src($image, 'full');
                    $gallery_image_src = $gallery_image_src[0];
                    ?>
                    <div class="lis-image-item dslc-col dslc-<?php echo $as_col; ?>">
                        <img src="<?php echo esc_attr($gallery_image_src); ?>" />
                    </div>
                    <?php
                    $as_col            = $post_per_row;
                    $as_count_col +=1;
                }
            }
            ?>
        </div>
    </div>
</div>