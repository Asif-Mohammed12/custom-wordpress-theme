<?php
get_header();
?>

<article class="content px-3 py-5 p-md-5">

<?php

while (have_posts()) : the_post();
get_template_part( 'template-parts/content', 'news' );
endwhile; // End of the loop.
?>


</article>

<?php

get_footer();
?>