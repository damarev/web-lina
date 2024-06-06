<div class="flex items-center my-16">
	<div class="max-w-xs hidden sm:block relative">
		<p class="relative -top-5"><img src="/img/exposiciones/oyeme-con-los-ojos-lina-avila.jpg" alt=""></p>
		<p class="absolute -right-5" style="max-width:58%; top:65%;"><img src="/img/exposiciones/home-lina-avila.jpg" alt=""></p>
	</div>
	<div class="grow mx-8 text-center">
		<h1 class="h1">Exposiciones</h1>
	</div>
	<div class="max-w-xs hidden sm:block">
		<span class="relative top-10"><img src="/img/exposiciones/stellar-couple-lina-avila.jpg" alt=""></span>
	</div>
</div>


<div class="max-w-3xl mx-auto px-5 py-4">

	<h2 class="section-title my-16">Exposiciones Individuales</h2>

	<dl class="years">
		<?php foreach (getIndividuales() as $year => $expos) : ?>
			<dt><?php echo $year; ?></dt>
			<dd>
				<ul>
					<?php foreach ($expos as $expo) : ?>
						<li><?php echo $expo; ?></li>
					<?php endforeach; ?>
				</ul>
			</dd>
		<?php endforeach; ?>
	</dl>

	<hr class="my-16" />

	<h2 class="section-title my-16">Exposiciones colectivas</h2>

	<dl class="years">
		<?php foreach (getColectivas() as $year => $expos) : ?>
			<dt><?php echo $year; ?></dt>
			<dd>
				<ul>
					<?php foreach ($expos as $expo) : ?>
						<li><?php echo $expo; ?></li>
					<?php endforeach; ?>
				</ul>
			</dd>
		<?php endforeach; ?>
	</dl>

</div>
