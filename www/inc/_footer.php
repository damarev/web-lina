</main>


<footer class="flex flex-wrap w-full border-t border-neutral-800 text-center py-8">
  <div class="w-full md:w-1/2 md:order-2 mb-10 md:mb-0 px-4">
    <h3 class="tracking-widest font-bold text-sm uppercase font-['Montserrat'] mb-4">Menú</h3>
    <ul class="flex flex-wrap gap-3 justify-center divide-x divide-gray-400">
      <?php foreach ($routes as $key => $value): ?>
        <li class="pl-3">
          <a href="<?php echo route($key) ?>" class="whitespace-nowrap no-underline hover:underline"><?php echo $value[0] ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
  <div class="w-1/2 md:w-1/4 md:order-1">
    <h3 class="tracking-widest font-bold text-sm uppercase font-['Montserrat'] mb-4">Contacto</h3>
    <p class="flex gap-3 justify-center">
      <a href="javascript:window.location.href=atob('<?= base64_encode("mailto:hola@lina-avila.com") ?>')" class="transition duration-300"><?php echo svg('email', 'w-10 h-10'); ?></a>
    </p>
  </div>
  <div class="w-1/2 md:w-1/4 md:order-3">
    <h3 class="tracking-widest font-bold text-sm uppercase font-['Montserrat'] mb-4">Sígueme</h3>
    <p class="flex gap-3 justify-center my-4">
      <a href="https://www.instagram.com/collagerepublic/" class="transition duration-300"><?php echo svg('instagram', 'w-8 h-8'); ?></a>
      <a href="https://es.linkedin.com/in/lina-%C3%A1vila-serrano-944b83159" class="transition duration-300"><?php echo svg('linkedin', 'w-8 h-8'); ?></a>
      <a href="https://vimeo.com/user86699386" class="transition duration-300"><?php echo svg('vimeo', 'w-8 h-8'); ?></a>
    </p>
    <button class="btn-subscribe my-4" data-toggle="modal" data-target="#subscribe">NEWSLETTER</button>
  </div>
</footer>

<!--Modal-->
<div id="subscribe" class="modal opacity-0 pointer-events-none fixed z-10 w-full h-full top-0 left-0 flex items-center justify-center">
  <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

  <div class="modal-container bg-white max-w-[35rem] w-full mx-auto rounded shadow-lg z-50 overflow-y-auto">

    <!-- Add margin if you want to see some of the overlay behind the modal-->
    <div class="modal-content relative bg-white">

      <div class="modal-close cursor-pointer z-50 absolute right-4 top-4">
        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
          <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
        </svg>
      </div>

      <!--Body-->

      <div class="px-16 pt-8 flex flex-col gap-4 text-center">
        <p class="quote text-3xl uppercase">Newsletter</p>
        <p class="">Si quieres recibir en tu correo novedades, exposiciones, talleres, recomendaciones y algunas reflexiones, apúntate a mi newsletter y no dejes que el algoritmo decida por ti.</p>
        <p>¿Te vienes?</p>
      </div>



      <iframe src="https://a19070b2.sibforms.com/serve/MUIFAIUtvNavBC24fVcO9I-Q79OHMZQ30TpM_sQU2BIS8yFTxgyPeATEGH6D4kKe5sXk6JDdICxMohjmpO2LbheQfjYprF2d2bB3QNjeZgHKCdQsgW1ihqfnUA8jcm3YwwUkYrNO_IqLPNqqA88awgRCiH8OgMeRkBHGFqyLZpc2hDLp0JDZbIaC2BGu7glzFSJnGRFW9MnM0OcX" frameborder="0" scrolling="auto" allowfullscreen style="margin-top: -40px; width:100%; height:450px; display: block;margin-left: auto;margin-right: auto;max-width: 100%;"></iframe>

      <!--Footer-->
      <!-- <div class="flex justify-end pt-2">
          <button class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Action</button>
          <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button>
        </div> -->

    </div>
  </div>
</div>



<!-- Javascript Code -->
<script>
  var btnMenu = document.getElementById('btn-toggle-nav');
  btnMenu.addEventListener("click", function() {
    var hasVScroll = $('body').height() > $(window).height();
    $('body').toggleClass('menu-open')
    $('body').toggleClass('has-scroll', hasVScroll)

    // console.log("menu-open = ", $('body').hasClass('menu-open'),"has scroll = ", hasVScroll )
  });



  var modals = document.querySelectorAll('[data-toggle="modal"]')
  for (var i = 0; i < modals.length; i++) {
    modals[i].addEventListener('click', function(event) {
      event.preventDefault()
      toggleModal()
    })
  }

  const overlay = document.querySelector('.modal-overlay')
  overlay.addEventListener('click', toggleModal)

  var closemodal = document.querySelectorAll('.modal-close')
  for (var i = 0; i < closemodal.length; i++) {
    closemodal[i].addEventListener('click', toggleModal)
  }

  document.onkeydown = function(evt) {
    evt = evt || window.event
    var isEscape = false
    if ("key" in evt) {
      isEscape = (evt.key === "Escape" || evt.key === "Esc")
    } else {
      isEscape = (evt.keyCode === 27)
    }
    if (isEscape && document.body.classList.contains('modal-active')) {
      toggleModal()
    }
  };


  function toggleModal() {
    const body = document.querySelector('body')
    const modal = document.querySelector('.modal')
    modal.classList.toggle('opacity-0')
    modal.classList.toggle('pointer-events-none')
    body.classList.toggle('modal-active')
  }
</script>
</body>

</html>
