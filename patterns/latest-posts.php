<?php
/**
 * Title: Latest Posts
 * Slug: plainpost/latest-posts
 * Categories: plainpost-patterns
 * Keywords: Latest Posts
 * Block Types: core/posts
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"10px","left":"10px","top":"40px","bottom":"40px"}}},"className":"home-latest-article-area","layout":{"type":"constrained"}} -->
<div id="Latest-Article" class="wp-block-group home-latest-article-area"
    style="padding-top:40px;padding-right:10px;padding-bottom:40px;padding-left:10px">
    <!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"bottom":"30px"}}}} -->
    <h5 class="wp-block-heading" style="margin-bottom:30px">Latest Article</h5>
    <!-- /wp:heading -->

    <!-- wp:latest-posts {"postsToShow":2,"displayPostDate":true,"postLayout":"grid","columns":2,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":150,"featuredImageSizeHeight":150,"addLinkToFeaturedImage":true,"className":"home-latest-article","fontSize":"md-gx"} /-->
</div>
<!-- /wp:group -->