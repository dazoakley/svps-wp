      <div id="sidebar" class="grid_4">
        <?php include (TEMPLATEPATH . '/searchform.php'); ?>
        
        <ul class="navigation">
          <li><a href="/">Home</a></li>
          <li><a href="/news">News</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/about/committee">The Pre-School Committee</a></li>
          <li><a href="/photos">Photos</a></li>
          <li><a href="/contact">Get In Touch</a></li>
          <li><a href="/register">Register Your Child</a></li>
        </ul>
        
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
        <?php endif; ?>
      </div>