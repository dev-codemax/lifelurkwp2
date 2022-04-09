
<?php 
get_header('blog');
?>



<main class="posts">









    <section class="hero">
      <div class="hero__left">
        <h1><?php 
        
        
        $category = get_queried_object();
          //echo $category->term_id;
        
        echo get_cat_name( $category_id = $category->term_id );
        
        
        ?>
      
      </h1>
        <p>Read about all areas of life and unlock professional and personal growth.</p>
      </div>
      <div class="hero__right">
        <img
          src="<?php  echo get_template_directory_uri(); ?>/images/Blog.jpg"
          alt="">
      </div>
    </section>

 

    

    <div class="search">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-search"
        viewBox="0 0 16 16">
        <path
          d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
      </svg>
      <input type="text" placeholder="Search anything you want">
    </div>

    <section>

    <?php 
    
    while(have_posts()){

      the_post();
    ?>
      <div class="post">


        <div class="post__left">
          <div class="post__left__upper">
            <p> <?php echo get_the_date(); ?></p>
          </div>
          <div class="post__left__lower">
            <h2> <?php the_title(); ?> </h2>
            <div>
              <h3>Posted by</h3>
              <h3><?php the_author() ?></h3>
            </div>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>">Read More ➜
            </a>
          </div>
        </div>




        <div class="post__right">
          <?php 
          $imagepath = wp_get_attachment_image_src(
            get_post_thumbnail_id(),
            'large'
          );
          ?>
          <img
            src="<?php 
            echo $imagepath[0]?>"
            alt="">
        </div>

      </div>

      <?php  } ?>


    </section>


  </main>

  <?php 
  get_footer();
  ?>
