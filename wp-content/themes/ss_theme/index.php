<?php
get_header();
echo "apple";
?>

<main>
  <h1>Theme is working</h1>

  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
      the_title('<h2>', '</h2>');
      the_content();
    endwhile;
  else :
    echo '<p>No content found</p>';
  endif;
  ?>
</main>

<?php
get_footer();
