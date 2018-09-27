
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
			<?php the_post_thumbnail('custom-size-blog', array('class' => 'img-responsive')); ?>
           <div class="right">
			<article>
				<h5><?php the_title() ?></h5>
				<div class="container">
			<div class="row">
				<div class="col-6">
				   <h5> <?php the_field('menu-1'); ?> </h5>

						<?php $image = get_field('imagen-1'); ?>
						<img class="detalle" src="<?php echo $image['sizes']['square'] ?>">

						<p><?php the_field('contenido-1'); ?></p>
                 </div>
                 <div class="col-6">
					<h5><?php the_field('menu-2'); ?>  </h5>
							<?php $image = get_field('imagen-2'); ?>
						<img class="detalle" src="<?php echo $image['sizes']['square'] ?>">
						<p><?php the_field('contenido-2'); ?></p>
                 </div>
			</div>
			<div class="row">
				<div class="col-6">
					<h5><?php the_field('menu-3'); ?>  </h5>
							<?php $image = get_field('imagen-3'); ?>
						<img class="detalle" src="<?php echo $image['sizes']['square'] ?>">
						<p><?php the_field('contenido-3'); ?></p>
                 </div>
				<div class="col-6">
					<h5><?php the_field('menu-4'); ?>  </h5>
							<?php $image = get_field('imagen-4'); ?>
						<img class="detalle" src="<?php echo $image['sizes']['square'] ?>">
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

			<?php the_post_thumbnail('custom-size-blog', array('class' => 'img-responsive')); ?>

<div class="left">
		<article>
				<h5><?php the_title() ?></h5>
				<div class="container">
			<div class="row">
				<div class="col-6">
				   <h5> <?php the_field('menu-1'); ?> </h5>

						<?php $image = get_field('imagen-1'); ?>
						<img class="detalle" src="<?php echo $image['sizes']['square'] ?>">

						<p><?php the_field('contenido-1'); ?></p>
                 </div>
                 <div class="col-6">
					<h5><?php the_field('menu-2'); ?>  </h5>
						<?php $image = get_field('imagen-2'); ?>
						<img class="detalle" src="<?php echo $image['sizes']['square'] ?>">
						<p><?php the_field('contenido-2'); ?></p>
                 </div>
			</div>
			<div class="row">
				<div class="col-6">
					<h5><?php the_field('menu-3'); ?>  </h5>
						<?php $image = get_field('imagen-3'); ?>
						<img class="detalle" src="<?php echo $image['sizes']['square'] ?>">
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
			<?php the_post_thumbnail('custom-size-blog', array('class' => 'img-responsive')); ?>
<div class="right">
				<article>
				<h5><?php the_title() ?></h5>
				<div class="container">
			<div class="row">
				<div class="col-6">
				   <h5> <?php the_field('menu-1'); ?> </h5>
							<?php $image = get_field('imagen-1'); ?>
						<img class="detalle" src="<?php echo $image['sizes']['square'] ?>">
						<p><?php the_field('contenido-1'); ?></p>
                 </div>
                 <div class="col-6">
					<h5><?php the_field('menu-2'); ?>  </h5>
							<?php $image = get_field('imagen-2'); ?>
						<img class="detalle" src="<?php echo $image['sizes']['square'] ?>">
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
			<?php the_post_thumbnail('custom-size-blog', array('class' => 'img-responsive')); ?>
<div class="left">
	<article>
		<h5><?php the_title() ?></h5>
			<div class="container">
			     <div class="row">
				<div class="col-6">
				   <h5> <?php the_field('menu-1'); ?> </h5>
						<?php $image = get_field('imagen-1'); ?>
						<img class="detalle" src="<?php echo $image['sizes']['square'] ?>">
						<p><?php the_field('contenido-1'); ?></p>
                 </div>
                 <div class="col-6">
					<h5><?php the_field('menu-2'); ?>  </h5>
						<?php $image = get_field('imagen-2'); ?>
						<img class="detalle" src="<?php echo $image['sizes']['square'] ?>">
						<p><?php the_field('contenido-2'); ?></p>
                 </div>
			</div>
			<div class="row">
				<div class="col-6">
					<h5><?php the_field('menu-3'); ?>  </h5>
						<?php $image = get_field('imagen-3'); ?>
						<img class="detalle" src="<?php echo $image['sizes']['square'] ?>">
						<p><?php the_field('contenido-3'); ?></p>
                 </div>
				<div class="col-6">
					<h5><?php the_field('menu-4'); ?>  </h5>
						<?php $image = get_field('imagen-4'); ?>
						<img class="detalle" src="<?php echo $image['sizes']['square'] ?>">
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
			<?php the_post_thumbnail('custom-size-blog', array('class' => 'img-responsive')); ?>
<div class="right">
	<article>
		<h5><?php the_title() ?></h5>
			<div class="container">
			     <div class="row">
				<div class="col-6">
				   <h5> <?php the_field('menu-1'); ?> </h5>
					<?php $image = get_field('imagen-1'); ?>
						<img class="detalle" src="<?php echo $image['sizes']['square'] ?>">
						<p><?php the_field('contenido-1'); ?></p>
                 </div>
                 <div class="col-6">
					<h5><?php the_field('menu-2'); ?>  </h5>
						<?php $image = get_field('imagen-2'); ?>
						<img class="detalle" src="<?php echo $image['sizes']['square'] ?>">
						<p><?php the_field('contenido-2'); ?></p>
                 </div>
			</div>
			<div class="row">
				<div class="col-6">
					<h5><?php the_field('menu-3'); ?>  </h5>
					<?php $image = get_field('imagen-3'); ?>
						<img class="detalle" src="<?php echo $image['sizes']['square'] ?>">
						<p><?php the_field('contenido-3'); ?></p>
                 </div>
				<div class="col-6">
					<h5><?php the_field('menu-4'); ?>  </h5>
						<?php $image = get_field('imagen-3'); ?>
						<img class="detalle" src="<?php echo $image['sizes']['square'] ?>">
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
			<?php the_post_thumbnail('custom-size-blog', array('class' => 'img-responsive')); ?>
<div class="left">
	<article>
		<h5><?php the_title() ?></h5>
			<div class="container">
			     <div class="row">
				<div class="col-6">
				   <h5> <?php the_field('menu-1'); ?> </h5>
						<?php $image = get_field('imagen-1'); ?>
						<img class="detalle" src="<?php echo $image['sizes']['square'] ?>">
						<p><?php the_field('contenido-1'); ?></p>
                 </div>
                 <div class="col-6">
					<h5><?php the_field('menu-2'); ?>  </h5>
						<?php $image = get_field('imagen-2'); ?>
						<img class="detalle" src="<?php echo $image['sizes']['square'] ?>">
						<p><?php the_field('contenido-2'); ?></p>
                 </div>
			</div>
			<div class="row">
				<div class="col-6">
					<h5><?php the_field('menu-3'); ?>  </h5>
						<?php $image = get_field('imagen-3'); ?>
						<img class="detalle" src="<?php echo $image['sizes']['square'] ?>">
						<p><?php the_field('contenido-3'); ?></p>
                 </div>
				<div class="col-6">
					<h5><?php the_field('menu-4'); ?>  </h5>
						<?php $image = get_field('imagen-4'); ?>
						<img class="detalle" src="<?php echo $image['sizes']['square'] ?>">
						<p><?php the_field('contenido-4'); ?></p>
                 </div>
			</div>
			</div>
		</article>				
</div>
</section>
<?php } wp_reset_postdata(); ?>


<?php get_footer(); ?>