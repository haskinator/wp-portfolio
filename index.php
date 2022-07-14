<?php get_header() ?>

    <main>
        <h1 class="section-header" id="work-section">Selected work</h1>
        <section class='posts'>
            <?php if ( have_posts () ) : ?>
        
                <?php while ( have_posts () ) : the_post() ?>
                <div <?php post_class()?>>
                    <article class="article">
                        <h3 class="header-post"><?php the_title()?></h3>
                        <p class="article-content"><?php the_content()?></p>
                        <div class="attachment-post-thumbnail">
                            <?php the_post_thumbnail()?>
                        </div>
                    </article>
                </div>
              
                                   
                <?php endwhile ?>

            <?php else : ?>

                <p>no post </p>

            <?php endif ?>
        </section>
        <h1 class="section-header">Values</h1>
        <section class="values">
            <div class="tk-blob main-blob" style="--time: 15s;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 317.5 353.7">
                    <path d="M291.8 55.3c30.4 39.9 30.7 102 17 160.4-13.8 58.3-41.6 112.9-84 130.9s-99.3-.6-137-30C50.2 287.1 32 246.9 17 200.5 2.1 154.1-9.6 101.4 11.5 63.6 32.6 25.8 86.6 2.8 143.8.2c57.2-2.6 117.6 15.2 148 55.1z"></path>
                </svg>
            </div>
            <div class="value-item">
                <p>01</p>
                <h3 class="value-header">Minimalism</h3>
                <p>I am focusing on minimalistic intuitive design and pinpoint execution. The website should not be a challenge for users, but rather a pleasant experience. </p>
            </div>
            <div class="value-item">
                <p>02</p>
                <h3 class="value-header">Communication</h3>
                <p>Great website can't be created without understanding clients needs. I find important to define clear purpose and visual beforehand.</p>
            </div>
            <div class="value-item">
                <p>03</p>
                <h3 class="value-header">Functionality</h3>
                <p>Well functioning web application is an essential. When a website does what it is expected to do and does it well - that is a win for everybody.</p>
            </div>
        </section>
        
    </main>

<?php get_footer() ?>



