
<header class="flex z-50 sticky top-0 flex-wrap md:justify-start md:flex-nowrap w-full bg-white text-sm py-3 md:py-0 shadow-md" >
    <nav class="w-full mx-auto px-4 md:px-6 lg:px-8" aria-label="Global" class="w-full h-screen" style="background:rgb(48, 160, 252)">
      <div class="relative md:flex md:items-center md:justify-between">
        <div class="flex items-center justify-between">
            <img src="ti.png" width="50">
          <a class="flex-none ml-5 text-xl font-semibold" href="/" aria-label="Brand"> Teknologi Informasi</a>
          <div class="md:hidden">
            <button type="button" class="hs-collapse-toggle flex justify-center items-center w-9 h-9 text-sm font-semibold rounded-lg border-0 border-gray-200 text-gray-800  disabled:opacity-50 disabled:pointer-events-none" data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
              <svg class="hs-collapse-open:hidden flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="3" x2="21" y1="6" y2="6" />
                <line x1="3" x2="21" y1="12" y2="12" />
                <line x1="3" x2="21" y1="18" y2="18" />
              </svg>
              <svg class="hs-collapse-open:block hidden flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 6 6 18" />
                <path d="m6 6 12 12" />
              </svg>
            </button>
          </div>
        </div>

        <div id="navbar-collapse-with-animation" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block">
          <div class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
            <div class="flex flex-col gap-x-0 mt-5 divide-gray-200 md:flex-row md:items-center md:justify-end md:gap-x-7 md:mt-0 md:ps-7 md:divide-y-0 md:divide-solid">

              <a class="font-bold text-black hover:text-white py-3 md:py-6" href="/kelas">
                Kelas
              </a>
              <a class="font-bold text-black hover:text-white py-3 md:py-6" href="/admin">
                Absen
              </a>
              <a class="font-bold text-black hover:text-white py-3 md:py-6" href="/jadwal">
                Jadwal
              </a>
              <a class="font-bold text-black hover:text-white py-3 md:py-6" href="/dosen">
                Dosen
              </a>

              <a class="font-bold text-black hover:text-white py-3 md:py-6" href="/#" onclick="scrollToVisi()">
                Visi & Misi
              </a>


{{--
              <div class="pt-3 md:pt-0">
                <a class="py-2.5 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="/login">
                  <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                    <circle cx="11.5" cy="7" r="4" />
                  </svg>
                  Log in
                </a>
              </div> --}}


              {{-- <div class="hs-dropdown [--strategy:static] md:[--strategy:fixed] [--adaptive:none] md:[--trigger:hover] md:py-4">
                <button type="button" class="flex items-center w-full text-gray-500 hover:text-gray-400 font-medium">
                  User Name
              <svg class="ms-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m6 9 6 6 6-6" />
              </svg>
              </button>

              <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 md:w-48 hidden z-10 bg-white md:shadow-md rounded-lg p-2 md:dark:border before:absolute top-full md:border before:-top-5 before:start-0 before:w-full before:h-5">
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500" href="#">
                  My Orders
                </a>

                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500" href="#">
                  My Account
                </a>
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500" href="#">
                  Logout
                </a>
              </div>
            </div> --}}

            </div>
          </div>
        </div>
        <script>
            function scrollToDosen() {
                document.getElementById('dosen').scrollIntoView({ behavior: 'smooth' });
            }
            function scrollToVisi() {
                document.getElementById('visi').scrollIntoView({ behavior: 'smooth' });
            }
            </script>
      </div>
    </nav>
  </header>
