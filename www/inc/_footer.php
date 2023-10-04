
  <!--Modal-->
  <div id="subscribe" class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

    <div class="modal-container bg-white  max-w-xl w-full  mx-auto rounded shadow-lg z-50 overflow-y-auto">

      <!-- Add margin if you want to see some of the overlay behind the modal-->
      <div class="modal-content relative bg-white">

          <div class="modal-close cursor-pointer z-50 absolute right-4 top-4">
            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
          </div>

        <!--Body-->
        <iframe src="https://a19070b2.sibforms.com/serve/MUIEAJKIVx1pzPhR12t8BX7YtOAaB1Nz-oO0UbExpXswN6z1Ks2sbd5mVdVwE4eX8DQHvue9i5aAbRNcqEeSg5mZ9MmC95tMCr3rjTop3KYcJh2Qy9KYshTbEkfPoKX_pVRsiNT4GINTFuLrg3CvFqGmZQW2mE6UKcJOD2UF68kAsXBG0L0oTP1UCfhzQCuz3A2LjIMbRYghudki" frameborder="0" scrolling="auto" allowfullscreen style="width:100%;height:600px;display: block;margin-left: auto;margin-right: auto;max-width: 100%;"></iframe>

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
    var menu = document.getElementById('menu');
    function toggleMenu() {
        menu.classList.toggle('hidden');
    }

    var btnMenu = document.getElementById('btn-menu');
    btnMenu.addEventListener("click", function() {
        btnMenu.classList.toggle('open');
    });



    var modals = document.querySelectorAll('[data-toggle="modal"]')
    for (var i = 0; i < modals.length; i++) {
      modals[i].addEventListener('click', function(event){
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


    function toggleModal () {
      const body = document.querySelector('body')
      const modal = document.querySelector('.modal')
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }


    </script>
</body>
</html>
