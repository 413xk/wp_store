<div class="advantages" style="background-image: url(<?= CFS()->get('bg_1') ?>)">
		<div class="container">
			<h2>
                <!-- строчка ниже подтягивает название категории автоматически через ID -->
                <?= get_category( 6, ARRAY_A )['name']; ?> 
            </h2>
		</div>
	</div>
	<div class="advantages-cards" style="background-image: url(<?= CFS()->get('bg_2') ?>)">
		<div class="container">
			<div class="row advantages-cards-inner">
                <?php 
                $posts = get_posts( [
                    'numberposts' => 6,
                    'category_name' => 'advantages',
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'post_type' => 'post',
                    'suppress_filter' => true
                ] );
                foreach($posts as $post){
                    setup_postdata( $post );
                    ?>
                    <div class="col-4 col-lg-6 col-sm-12 advantages-card">
                        <!-- <img src="img/icons/like.png" alt=""> вместо статики подключаем функцию ниже. Она берет название из фанкшинс.пхп-->
                        <?php the_post_thumbnail( 'adv_thumbnail' ); ?>
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>

                    </div>	
                <?php
                }
                wp_reset_postdata();
                ?>

			</div>
		</div>
	</div>