<?php include 'inc/_header.php' ?>


<div class="flex items-center my-16">
	<div class="max-w-xs relative -top-5"><img src="img/collage-clouds-Lina-Avila.jpg" alt=""></div>
	<h2 class="grow section-title mx-5">Proyectos</h2>
	<div class="max-w-xs relative top-5"><img src="img/collage-poetico-Lina-Avila.jpg" alt=""></div>
</div>


<div class="max-w-5xl mx-auto text-center px-5">
	<ul class="list-none flex flex-wrap justify-center gap-8 text-3xl" id="proyectos">
		<?php foreach ($proyectos as $key => $value): ?>
			<li>
				<a href="<?php echo route($key) ?>" class="">
					<?php echo $value[0] ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>

</div>


<?php include 'inc/_footer.php' ?>
