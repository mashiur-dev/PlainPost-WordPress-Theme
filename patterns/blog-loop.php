<?php
/**
 * Title: Blog Loop
 * Slug: plainpost/blog-loop
 * Categories: plainpost-patterns
 * Keywords: Blog Loop, Posts, Post List 
 * Block Types: core/posts, core/navigation
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"10px","left":"10px","top":"40px","bottom":"40px"}}},"className":"home-post post-loop","layout":{"type":"constrained"}} -->
<div id="Posts" class="wp-block-group home-post post-loop" style="padding-top:40px;padding-right:10px;padding-bottom:40px;padding-left:10px"><!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"bottom":"30px"}}}} -->
<h5 class="wp-block-heading" style="margin-bottom:30px">New Post</h5>
<!-- /wp:heading -->

<!-- wp:query {"queryId":18,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:columns {"verticalAlignment":"center","style":{"border":{"top":{"color":"#dfdfdf","width":"1px"}},"spacing":{"padding":{"top":"28px","bottom":"28px"},"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="border-top-color:#dfdfdf;border-top-width:1px;margin-top:0;margin-bottom:0;padding-top:28px;padding-bottom:28px"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"5px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontSize":"xxxl-gx"} /-->

<!-- wp:post-date {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"500"},"color":{"text":"#9e9e9e"}},"fontSize":"bs-gx"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"className":"pagination","layout":{"type":"flex","justifyContent":"space-between","orientation":"horizontal"},"fontSize":"lg-gx"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->