
<?php get_header(); ?>

<?php
	$arg = array(
		'post_type'		 => 'Derecha',
		'paged'			 => $paged
	);
	
	$get_arg = new WP_Query( $arg );
	
	while ( $get_arg->have_posts() ) {
		$get_arg->the_post();
	?>
		<section class="derecha">
			<img class="img-responsive" src="<?php echo get_theme_file_uri() ?>/img/sitio/pizza.jpg">
           <div class="right">
			<article>
				<h5><?php the_title() ?></h5>
				<div class="container">
			<div class="row">
				<div class="col-6">
				   <h5> <?php the_field('menu-1'); ?> </h5>
						<img class="detalle" src="<?php echo get_theme_file_uri() ?>/img/platos/polenta_frita.jpg">
						<p><?php the_field('contenido-1'); ?></p>
                 </div>
                 <div class="col-6">
					<h5><?php the_field('menu-2'); ?>  </h5>
						<img class="detalle" src="<?php echo get_theme_file_uri() ?>/img/platos/peperonata.jpg">
						<p><?php the_field('contenido-2'); ?></p>
                 </div>
			</div>
			<div class="row">
				<div class="col-6">
					<h5><?php the_field('menu-3'); ?>  </h5>
						<img class="detalle" src="<?php echo get_theme_file_uri() ?>/img/platos/provoleta_oregano.jpg">
						<p><?php the_field('contenido-3'); ?></p>
                 </div>
				<div class="col-6">
					<h5><?php the_field('menu-4'); ?>  </h5>
						<img class="detalle" src="<?php echo get_theme_file_uri() ?>/img/platos/melazane_e_prosciuto.jpg">
						<p><?php the_field('contenido-4'); ?></p>
                 </div>
			</div>
			</div>
		</article>
	</div>
</section>
<?php } wp_reset_postdata(); ?>


<?php
	$arg = array(
		'post_type'		 => 'Ensaladas',
		'paged'			 => $paged
	);
	
	$get_arg = new WP_Query( $arg );
	
	while ( $get_arg->have_posts() ) {
		$get_arg->the_post();
	?>
<section class="izquierda">
			<img class="img-responsive" src="<?php echo get_theme_file_uri() ?>/img/sitio/il_fonti_di_modena.jpg">
<div class="left">
		<article>
				<h5><?php the_title() ?></h5>
				<div class="container">
			<div class="row">
				<div class="col-6">
				   <h5> <?php the_field('menu-1'); ?> </h5>
						<img class="detalle" src="<?php echo get_theme_file_uri() ?>/img/platos/insalatta_danubio.jpg">
						<p><?php the_field('contenido-1'); ?></p>
                 </div>
                 <div class="col-6">
					<h5><?php the_field('menu-2'); ?>  </h5>
						<img class="detalle" src="<?php echo get_theme_file_uri() ?>/img/platos/insalatta_pilarre.jpg">
						<p><?php the_field('contenido-2'); ?></p>
                 </div>
			</div>
			<div class="row">
				<div class="col-6">
					<h5><?php the_field('menu-3'); ?>  </h5>
						<img class="detalle" src="<?php echo get_theme_file_uri() ?>/img/platos/insalatta_andree.jpg">
						<p><?php the_field('contenido-3'); ?></p>
                 </div>
				<div class="col-6">
					
                 </div>
			</div>
			</div>
		</article>				
	</div>
</section>
<?php } wp_reset_postdata(); ?>


<?php
	$arg = array(
		'post_type'		 => 'Sopas',
		'paged'			 => $paged
	);
	
	$get_arg = new WP_Query( $arg );
	
	while ( $get_arg->have_posts() ) {
		$get_arg->the_post();
	?>
<section class="derecha">
			<img class="img-responsive" src="<?php echo get_theme_file_uri() ?>/img/sitio/mesas.jpg">
<div class="right">
				<article>
				<h5><?php the_title() ?></h5>
				<div class="container">
			<div class="row">
				<div class="col-6">
				   <h5> <?php the_field('menu-1'); ?> </h5>
						<img class="detalle" src="<?php echo get_theme_file_uri() ?>/img/platos/zuppa_di_chef.jpg">
						<p><?php the_field('contenido-1'); ?></p>
                 </div>
                 <div class="col-6">
					<h5><?php the_field('menu-2'); ?>  </h5>
						<img class="detalle" src="<?php echo get_theme_file_uri() ?>/img/platos/ministrone_genovese.jpg">
						<p><?php the_field('contenido-2'); ?></p>
                 </div>
                 </div>
                 </div>
                 </article>		
	</div>
</section>
<?php } wp_reset_postdata(); ?>

<?php
	$arg = array(
		'post_type'		 => 'Pizza-tra',
		'paged'			 => $paged
	);
	
	$get_arg = new WP_Query( $arg );
	
	while ( $get_arg->have_posts() ) {
		$get_arg->the_post();
	?>

<section class="izquierda">
			<img class="img-responsive" src="<?php echo get_theme_file_uri() ?>/img/sitio/pasta.jpg">
<div class="left">
	<article>
		<h5><?php the_title() ?></h5>
			<div class="container">
			     <div class="row">
				<div class="col-6">
				   <h5> <?php the_field('menu-1'); ?> </h5>
						<img class="detalle" src="<?php echo get_theme_file_uri() ?>/img/platos/marguerita.jpg">
						<p><?php the_field('contenido-1'); ?></p>
                 </div>
                 <div class="col-6">
					<h5><?php the_field('menu-2'); ?>  </h5>
						<img class="detalle" src="<?php echo get_theme_file_uri() ?>/img/platos/marinara.jpg">
						<p><?php the_field('contenido-2'); ?></p>
                 </div>
			</div>
			<div class="row">
				<div class="col-6">
					<h5><?php the_field('menu-3'); ?>  </h5>
						<img class="detalle" src="<?php echo get_theme_file_uri() ?>/img/platos/caprissiosa.jpg">
						<p><?php the_field('contenido-3'); ?></p>
                 </div>
				<div class="col-6">
					<h5><?php the_field('menu-4'); ?>  </h5>
						<img class="detalle" src="<?php echo get_theme_file_uri() ?>/img/platos/cinque_formaggi.jpg">
						<p><?php the_field('contenido-4'); ?></p>
                 </div>
			</div>
			</div>
		</article>					
	</div>
</section>
<?php } wp_reset_postdata(); ?>

<?php
	$arg = array(
		'post_type'		 => 'Pizza',
		'paged'			 => $paged
	);
	
	$get_arg = new WP_Query( $arg );
	
	while ( $get_arg->have_posts() ) {
		$get_arg->the_post();
	?>

<section class="derecha">
			<img class="img-responsive" src="<?php echo get_theme_file_uri() ?>/img/platos/mediterranea.jpg">
<div class="right">
	<article>
		<h5><?php the_title() ?></h5>
			<div class="container">
			     <div class="row">
				<div class="col-6">
				   <h5> <?php the_field('menu-1'); ?> </h5>
						<img class="detalle" src="<?php echo get_theme_file_uri() ?>/img/platos/putannesca.jpg">
						<p><?php the_field('contenido-1'); ?></p>
                 </div>
                 <div class="col-6">
					<h5><?php the_field('menu-2'); ?>  </h5>
						<img class="detalle" src="<?php echo get_theme_file_uri() ?>/img/platos/caprissiosa.jpg">
						<p><?php the_field('contenido-2'); ?></p>
                 </div>
			</div>
			<div class="row">
				<div class="col-6">
					<h5><?php the_field('menu-3'); ?>  </h5>
						<img class="detalle" src="<?php echo get_theme_file_uri() ?>/img/platos/torino.jpg">
						<p><?php the_field('contenido-3'); ?></p>
                 </div>
				<div class="col-6">
					<h5><?php the_field('menu-4'); ?>  </h5>
						<img class="detalle" src="<?php echo get_theme_file_uri() ?>/img/platos/griega.jpg">
						<p><?php the_field('contenido-4'); ?></p>
                 </div>
			</div>
			</div>
		</article>				
	</div>
</section>
<?php } wp_reset_postdata(); ?>

<?php
	$arg = array(
		'post_type'		 => 'Postre',
		'paged'			 => $paged
	);
	
	$get_arg = new WP_Query( $arg );
	
	while ( $get_arg->have_posts() ) {
		$get_arg->the_post();
	?>
<section class="izquierda">
			<img class="img-responsive" src="<?php echo get_theme_file_uri() ?>/img/platos/tiramisu.jpg">
<div class="left">
	<article>
		<h5><?php the_title() ?></h5>
			<div class="container">
			     <div class="row">
				<div class="col-6">
				   <h5> <?php the_field('menu-1'); ?> </h5>
						<img class="detalle" src="<?php echo get_theme_file_uri() ?>/img/platos/gelato.jpg">
						<p><?php the_field('contenido-1'); ?></p>
                 </div>
                 <div class="col-6">
					<h5><?php the_field('menu-2'); ?>  </h5>
						<img class="detalle" src="<?php echo get_theme_file_uri() ?>/img/platos/gelato_di_ciocolatto.jpg">
						<p><?php the_field('contenido-2'); ?></p>
                 </div>
			</div>
			<div class="row">
				<div class="col-6">
					<h5><?php the_field('menu-3'); ?>  </h5>
						<img class="detalle" src="<?php echo get_theme_file_uri() ?>/img/platos/panna_cotta.jpg">
						<p><?php the_field('contenido-3'); ?></p>
                 </div>
				<div class="col-6">
					<h5><?php the_field('menu-4'); ?>  </h5>
						<img class="detalle" src="<?php echo get_theme_file_uri() ?>/img/platos/moccaccino.jpg">
						<p><?php the_field('contenido-4'); ?></p>
                 </div>
			</div>
			</div>
		</article>				
</div>
</section>
<?php } wp_reset_postdata(); ?>


<?php get_footer(); ?>