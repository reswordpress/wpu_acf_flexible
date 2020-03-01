<?php
$_image = get_wpu_acf_image_src(get_sub_field('image'),'thumbnail');
if (!$_image) {
    return;
}
$_author = get_sub_field('author');
$_author_details = get_sub_field('author_details');
$_quote = apply_filters('the_content', get_sub_field('quote'));
if (!$_quote) {
    return;
}

?><div class="<?php echo get_wpu_acf_wrapper_classname('team-quote'); ?>">
    <div class="block--team-quote">
        <?php echo get_wpu_acf_title_content(); ?>
        <blockquote>
            <div class="quote-image">
                <img src="<?php echo $_image; ?>" alt="<?php echo esc_attr($_author); ?>" />
            </div>
            <div class="quote-inner">
                <div class="field-quote"><?php echo $_quote; ?></div>
                <?php if ($_author): ?>
                <footer> <?php echo $_author . ($_author_details ? ', ' . $_author_details : ''); ?></footer>
                <?php endif;?>
            </div>
        </blockquote>
    </div>
</div>
