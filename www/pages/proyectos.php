<div class="flex items-center my-10">
	<div class="max-w-xs relative -top-5 pr-5"><img src="/img/proyectos/abrazar_lina_avila.jpg" alt=""></div>
	<h2 class="grow mx-5">
		<p class="quote text-center text-4xl md:text-6xl uppercase">Proyectos</p>
	</h2>
	<div class="max-w-xs relative top-5 pl-5"><img src="/img/proyectos/balada-otono-lina-avila.jpg" alt=""></div>
</div>

<div class="max-w-7xl mx-auto text-center px-8 mt-32">
	<ul class="list-none flex flex-col md:flex-row flex-wrap justify-center gap-6 sm:gap-8" id="proyectos">
		<?php foreach ($proyectos as $key => $value): ?>
			<li class=" text-2xl md:text-3xl">
				<a href="<?php echo route($key) ?>" class="font-serif block uppercase no-underline tracking-widest hover:text-[color:var(--secondary)] transition-all">
					<?php echo $value[0] ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</div>

<div class="flex justify-center mt-16 aspect-[15/5]" id="proyects-img">
	<?php foreach ($proyectos as $key => $value): ?>
		<img class="absolute opacity-0 transition-opacity duration-700 ease-in-out" src="<?php echo $value[1] ?>" alt="<?php echo $value[0] ?>">
	<?php endforeach; ?>
</div>

<script>
	$(function(){
		$('#proyectos a').on('mouseover', function(e){
			let index = $(e.target).parent().index();
			let img = $('#proyects-img > img').eq(index);
			img.siblings().addClass('opacity-0').end().removeClass('opacity-0')
		});
	});
</script>
