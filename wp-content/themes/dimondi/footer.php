  <?php wp_footer() ?>

		<footer>
			<div class="row">
              <div class="col-sm-6">
                    <div class="direccion">
                      <h5> Dirección: Av. Colón 161, Providencia | Teléfono: +56 2 2345 4653
                    </h5> </div>

              	<div class="redes">
                  <ul>
                        <li><i class="fab fa-twitter"></i></li>
                        <li><i class="fab fa-facebook-square"></i></li>
                        <li><i class="fab fa-instagram"></i></li>
                      </ul> 
                </div>
                   </div>


                   <?php
  $arg = array(
    'post_type'    => 'Calendario',
    'paged'      => $paged
  );
  
  $get_arg = new WP_Query( $arg );
  
  while ( $get_arg->have_posts() ) {
    $get_arg->the_post();
  ?>
                <div class="col-sm-6">
        <div class="Calendario"> 
          <h5><?php the_title() ?></h5>
            <?php the_content(); ?> 
          </div> 
                 </div>
                 <?php } wp_reset_postdata(); ?>

             </div>
             
			
		</footer>
</body>
</html>