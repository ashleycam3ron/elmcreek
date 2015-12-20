<?php
/**
 * Add custom fields to Yoast SEO analysis
 */

/*
add_filter( 'wpseo_pre_analysis_post_content', function () use ($content, $post) {
    $fields = get_field('col1', $post->ID);
    return $content . $fields;
}, 10, 2);
*/