<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> class="post" role="article">
  
  <header>
    <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
	<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'wpbs-featured' ); ?></a>
	<time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?=the_time('d')?><legend><?=the_time('M');?></legend></time>
	<div class="coms"><?=comments_number( "0", "1", "%" ); ?><legend><?=comments_number( "echo", "echo", "echos" ); ?></legend> </div>
	<div class="author" role="author"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="<?php the_author_meta( 'display_name' ); ?>"><?=get_avatar( get_the_author_meta('user_email'), 40 );?></a></div>
  </header> <!-- end article header -->

  <section class="post_content clearfix">
    <?php the_content( __("Read more &raquo;","bonestheme") ); ?>
  </section> <!-- end article section -->
  
  <footer>
    <p class="tags"><?php the_tags('<span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ' ', ''); ?></p>
    <p class="meta"><?php the_category(', '); ?>.</p>
  </footer> <!-- end article footer --> 

</article> <!-- end article -->
