<div class="max-w-6xl mx-auto px-5 grid grid-cols-1 md:grid-cols-2 gap-6 mt-12">
	<div class="text-center">
		<h1 class="h1 mb-12">
			Menciones
		</h1>
		<p>«Lina Ávila sintetiza emociones colectivas en <em>collages</em>, poemas y fotografías intervenidas. Presenta el mundo privado y la intimidad personal en relación, en consonancia o en contraste con los hechos que conmueven y afectan a la comunidad de manera precisa y sin artificios.»</p>
		<p class="quote-by mt-6">
			<span class="font-bold">Andrea Perissinotto</span>, <br> YANMAG
		</p>
		<p class="max-w-xs mt-12 mx-auto hidden md:block">
			<img src="/img/menciones/publicaciones-lina-avila.jpg" alt="">
		</p>
	</div>
	<div class="flex flex-col justify-center">
		<p class="max-w-md mx-auto">
			<img src="/img/menciones/trabajos-lina-avila.jpg" alt="">
		</p>
	</div>
</div>

<div class="max-w-[52rem] mx-auto mt-20 px-5">
	<ul class="list-circle [&_a]:italic [&_a]:font-bold">
		<?php foreach (getMenciones() as $item) : ?>
			<li><?php echo $item[0] ?>: <a target="_blank" href="<?php echo $item[3] ?>"><?php echo $item[2] ?></a>, <?php echo $item[1] ?></li>
		<?php endforeach; ?>
	</ul>
</div>
