<?php get_header(); ?>

    <div class="container">
        <main class="Single">
            <h1 class="Single__Title">
                Single.php
            </h1>
            <?php
            $currentUrl = home_url( add_query_arg( null, null ));
    
            $test = checkIfUrlContainsString($currentUrl, 'sandhamn');
            
    
            if($test){
                $_SESSION['hamn'] = "Sandhamn";
            };
            echo var_dump($_SESSION['hamn']);

            while(have_posts()){
                the_post(); 
            ?>

            <div class="Single__FormWrapper"><?php the_content(); ?></div>

        <?php
      }


    ?>
        </main>
    </div>



<?php get_footer(); ?>