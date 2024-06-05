<div class="bg-white">
    <style>
        .team-member {
        opacity: 0;
        transform: translateY(80%);
        transition: opacity 0.7s, transform 0.7s;
    }

    .team-member.show {
        opacity: 1;
        transform: translateY(0);
    }

        #image {
            overflow: hidden;
        }

        #image::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-image: url(https://polnes.ac.id/images/advportfoliopro/upacara-hardiknas-polnes-2024-05-02_at_121231.jpeg);
            animation: slideFromRight 0.5s forwards;
            background-size: 99%;
            background-repeat: no-repeat;
            background-position: left;
            opacity: 0;
        }

        @keyframes slideFromRight {
            0% {
            transform: translateX(100vw);
            opacity: 0;
        }
        50% {
            opacity: 1; /* Fade in halfway through the animation */
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
        }
        #bg {
        background: white;
        animation: mymove 1.5s;
        }

        @keyframes mymove {
        from {background-color: black;}
        to {background-color: white;}
        }
    </style>

    {{-- bg --}}
    <div id="bg">
        <div id="image" class="relative h-64 w-screen flex items-end justify-start text-left bg-cover bg-center">
                        <div class="absolute top-0 right-0 bottom-0 left-0 bg-gradient-to-b">
                        </div>
                        <main class="p-5 z-10">
                                <p class="text-md tracking-tight font-medium leading-7 font-regular text-white">

                            </p>
                        </main>
                    </div>
                </div>
    {{-- kelas --}}
            <div class="relative flex flex-col items-center max-w-screen-xl px-4 mx-auto md:flex-row sm:px-6 p-8">
                <div class="flex items-center py-5 md:w-1/2 md:pb-20 md:pt-10 md:pr-10">
                    <div class="text-left">
                        <h2
                            class="text-4xl font-extrabold leading-10 tracking-tight text-gray-800 sm:text-5xl sm:leading-none md:text-6xl">
                            Daftar
                            <span class="font-bold text-blue-500">Kelas</span>
                        </h2>
                        <p class="max-w-md mx-auto mt-3 text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                            Cek dulu kelasmu dan pastikan semua data sudah benar
                        </p>
                        <div class="mt-5 sm:flex md:mt-8">
                            <div class="rounded-md shadow"><a href="/kelas"
                                    class="flex items-center justify-center w-full px-8 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-blue-500 border border-transparent rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue md:py-4 md:text-lg md:px-10">
                                    Cek Kelas
                                </a></div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center py-5 md:w-1/2 md:pb-20 md:pt-10 md:pl-10 ">
                    <div class="relative w-full p-3 rounded  md:p-8">
                        <div class=" rounded-lg bg-white text-black w-cover">
                            <img src="https://tsipil.ugm.ac.id/wp-content/uploads/sites/4/2022/01/Kelas_3.jpeg" />
                        </div>
                    </div>
                </div>
            </div>
    {{-- absen --}}
    <div class="px-6 py-12 text-center md:px-12 lg:text-left bg-gray-100">
        <div class="w-100 mx-auto sm:max-w-2xl md:max-w-3xl lg:max-w-5xl xl:max-w-7xl xl:px-32">
          <div class="grid items-center lg:grid-cols-2">
            <div class="mb-12 md:mt-12 lg:mt-0 lg:mb-0">
              <div
                class="block rounded-lg bg-[hsla(0,0%,100%,0.55)] px-6 py-12 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] md:px-12 lg:-mr-14 backdrop-blur-[30px]">
                <h1 class="mt-2 mb-16 text-4xl font-bold tracking-tight md:text-5xl xl:text-6xl">
                  Ayo <br /><span class="text-primary">Mulai Absen</span>
                </h1>
                <a class="inline-block px-4 py-2 bg-blue-500 text-white font-medium uppercase rounded transition duration-150 ease-in-out hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300" href="/absen" role="button">Mulai Absen</a>
              </div>
            </div>
            <div class="md:mb-12 lg:mb-0">
              <img src="https://media.istockphoto.com/id/964286150/id/foto/mahasiswa-mengangkat-tangan-di-kelas.jpg?s=1024x1024&w=is&k=20&c=nA8NBGwpCgdEJyZhUWfzLQgBYyDHnjGx1eBJBkASLIw="
                class="w-full rounded-lg shadow-lg" alt="" />
            </div>
          </div>
        </div>
      </div>
      {{-- jadwal --}}
      <div class="relative flex flex-col items-center max-w-screen-xl px-4 mx-auto md:flex-row sm:px-6 p-8">
        <div class="flex items-center py-5 ml-4 md:w-1/2 md:pb-20 md:pt-10 md:pr-10">
            <div class="text-left">
                <h2
                    class="text-4xl font-extrabold leading-10 tracking-tight text-gray-800 sm:text-5xl sm:leading-none md:text-6xl">
                    Jadwal Kampus
                </h2>
                <p class="max-w-md mx-auto mt-3 text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    yok cek jadwal kamu jangan sampai ketinggalan kelasmu
                </p>
                <div class="mt-5 sm:flex md:mt-8">
                    <div class="rounded-md shadow"><a href=""
                            class="flex items-center justify-center w-full px-8 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-blue-500 border border-transparent rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue md:py-4 md:text-lg md:px-10">
                            Cek Jadwal
                        </a></div>
                </div>
            </div>
        </div>
        <div class="flex items-center py-5 md:w-1/2 md:pb-20 md:pt-10 md:pl-10 ">
            <div class="relative w-full p-3 rounded  md:p-8">
                <div class=" rounded-lg bg-white text-black w-cover">
                    <img src="https://palpres.disway.id/upload/6319b563806a8ce4698ac7c3fae0dc66.jpg" />
                </div>
            </div>
        </div>
    </div>

    {{-- dosen --}}

    {{-- new --}}
    <section id="dosen" class="bg-gray-100 py-5">
        <div class="sm:flex  items-center justify-center">
            <div class="rounded-md shadow bg-white"><a href="/dosen "
                class="flex w-full px-8 py-3 text-3xl font-bold text-primary leading-6 transition duration-150 ease-in-out bg-whte border border-transparent rounded-md hover:bg-white focus:outline-none focus:shadow-outline-gray md:py-4 md:text-lg md:px-10">
                Dosen
            </a></div>
        </div>

        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Team Member 1 -->
                <div class="team-member bg-white rounded-lg shadow-md p-6 my-6 text-center">
                    <img src="https://lh3.googleusercontent.com/drive-viewer/AKGpihbI7fDiDxExRUlgtt9fx3g_id_5lowv0aBAczXeJ_gOC6ZuWVTcG3KWIsGctBtc1_Qlc9a76cYSlfITLMn-7i8TST61qIFuOA=s1600-rw-v1" alt="Team Member 1" class="w-full rounded-full mb-4">
                    <h3 class="text-xl font-semibold mb-2">John Doe</h3>
                    <p class="text-gray-700">Kaprodi TIM</p>
                </div>

                <!-- Team Member 2 -->
                <div class="team-member bg-white rounded-lg shadow-md p-6 my-6 text-center">
                    <img src="https://lh3.googleusercontent.com/drive-viewer/AKGpihZoWmwNG4pEVh9JL17nGpqcB6NrdZfiOdDFhNuUbKG9-2dXWYTi-TTgmvZQvKvCVh66AAYMTyhfwho1FGL2WiYALfPzpKujPQ=s1600-rw-v1" alt="Team Member 2" class="w-full rounded-full mb-4">
                    <h3 class="text-xl font-semibold mb-2">Jane Smith</h3>
                    <p class="text-gray-700">Kaprodi TRK </p>
                </div>

                <!-- Team Member 3 -->
                <div class="team-member bg-white rounded-lg shadow-md p-6 my-6 text-center">
                    <img src="https://lh3.googleusercontent.com/drive-viewer/AKGpihZqOeBT8buvkXE6PRssProeuxP5AL6CPdItDKq5FH3SVe7SGe-i_DC8CvqZjuZAVcVH3fsH6P5PtJwwLTKl8PFoTtyMO2EYyMI=s1600-rw-v1" alt="Team Member 3" class="w-full rounded-full mb-4">
                    <h3 class="text-xl font-semibold mb-2">Alex Johnson</h3>
                    <p class="text-gray-700">Kaprodi TI</p>
                </div>

                <!-- Team Member 4 -->
                <div class="team-member bg-white rounded-lg shadow-md p-6 my-6 text-center">
                    <img src="https://lh3.googleusercontent.com/drive-viewer/AKGpihbd4dATqsK0lMNXip6Wi_iWCtT8Pt15isrH91OiksVNJwFwaK21bwezaBA55TtEQiLQCC6TiPS67M8bOtOJFEewGkBftQDOfQ=s1600-rw-v1" alt="Team Member 4" class="w-full rounded-full mb-4">
                    <h3 class="text-xl font-semibold mb-2">Peter Johnson</h3>
                    <p class="text-gray-700">Kaprodi TK</p>
                </div>

            </div>
            <div class="sm:flex  items-center justify-center">
                <div class="rounded-md shadow bg-white"><a href="/dosen"
                    class="flex items-center justify-center w-full px-8 py-3 text-3xl font-bold text-primary leading-6 transition duration-150 ease-in-out bg-whte border border-transparent rounded-md hover:bg-white focus:outline-none focus:shadow-outline-gray md:py-4 md:text-lg md:px-10">
                    Dosen Lainnya
                </a></div>
            </div>
        </div>
    </section>

    {{-- visi misi --}}
    <div class="mb-8">
        <div id="visi" class="relative flex flex-col items-center justify-center">
            <h1 class="text-3xl font-bold mt-10 text-gray-800"> Visi & Misi </h1>
        </div>
        <div class="flex mt-3">
            <div class="w-1/2 mx-4 ">
                <h1 class="text-3xl flex flex-col items-center justify-center font-bold  text-gray-800"> Visi</h1>
                <p class="text-base text-gray-500" style="text-align: left; padding-left: 20px;">
                    Menjadi Perguruan Tinggi Vokasi yang Unggul di bidang Rekayasa dan Tata Niaga pada Tingkat Nasional
                </p>
            </div>

            <div class="w-1/2 mx-4 flex flex-col items-center justify-center">
                <h1 class="text-3xl font-bold  text-gray-800"> Misi</h1>
                <p class="text-base text-gray-500" style="text-align: left;">
                    1. <span class="text-base text-gray-500" style="margin-bttom: 0;">Meyelenggarakan pendidikan vokasi yang bertumpu pada peningkatan kualitas, perluasan akses dan lulusan berdaya saing tinggi.</span>
                </p>
                <p class="text-base text-gray-500 mt-2" style="text-align: left;">
                    2. <span class="text-base text-gray-500" style="margin-bttom: 0;">Meyelenggarakan sistem tata kelola yang sehat, transparans, berkualitas dan akuntabel sebagai wujud peyelenggaraan organisasi yang sehat.</span>
                </p>
                <p class="text-base text-gray-500 mt-2" style="text-align: left;">
                    3. <span class="text-base text-gray-500" style="margin-bttom: 0;">Meyelenggarakan perkembangan dan peningkatan kualitas hasil karya intelektual yang aplikatif melalui kegiatan penelitian dan pengabian pada masyarakat.</span>
                </p>
                <p class="text-base text-gray-500 mt-2" style="text-align: left; margin-right:30px">
                    4. <span class="text-base text-gray-500" style="margin-bttom: 0;">Meyelenggarakan jaringan kerja sama (networking) dan pencitraan publik.</span>
                </p>
            </div>
        </div>
</div>
    {{-- kelas --}}


    {{-- kelas
    <div class="bg-white">
        <ul style="border: 0px solid rgba(128, 128, 128, 0.5);" class="border border-gray-400 rounded-md divide-y divide-gray-400">
            <li>
                <button class="flex items-center justify-between w-full p-4 focus:outline-none" type="button"
                    onclick="toggleAccordion(event)">
                    <span class="text-lg font-bold">D3-Teknik Informatika</span>
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                        <path d="M10 13.535l4.95-4.95 1.414 1.414-6.364 6.364-6.364-6.364 1.414-1.414z" />
                    </svg>
                </button>
                <ul style="border: 0px solid rgba(128, 128, 128, 0.5);" class="border border-gray-400 rounded-md divide-y divide-gray-400; ml-10 ">
                    <li>
                        <button class="flex items-center justify-between w-full p-4 focus:outline-none" type="button"
                            onclick="toggleAccordion(event)">
                            <span class="text-lg font-bold">kelas</span>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                <path d="M10 13.535l4.95-4.95 1.414 1.414-6.364 6.364-6.364-6.364 1.414-1.414z" />
                            </svg>
                        </button>
                        <ul>
                            <li style="padding-bottom: 8px">
                                <a href="#" class="text-md font-regular p-6 text-black hover:underline">• Kelas 2</a>
                            </li>
                            <li style="padding-bottom: 8px">
                                <a href="#" class="text-md font-regular p-6 text-black hover:underline">• Kelas 2</a>
                            </li>
                            <li style="padding-bottom: 8px">
                                <a href="#" class="text-md font-regular p-6 text-black hover:underline">• Kelas 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button class="flex items-center justify-between w-full p-4 focus:outline-none" type="button"
                            onclick="toggleAccordion(event)">
                            <span class="text-lg font-bold">jadwal</span>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                <path d="M10 13.535l4.95-4.95 1.414 1.414-6.364 6.364-6.364-6.364 1.414-1.414z" />
                            </svg>
                        </button>
                        <div class="accordion-content hidden p-4">
                            <p>Integer bibendum augue vel urna blandit tristique.</p>
                        </div>
                    </li>
                    <li>
                        <button class="flex items-center justify-between w-full p-4 focus:outline-none" type="button"
                            onclick="toggleAccordion(event)">
                            <span class="text-lg font-bold">absen</span>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                <path d="M10 13.535l4.95-4.95 1.414 1.414-6.364 6.364-6.364-6.364 1.414-1.414z" />
                            </svg>
                        </button>
                        <div class="accordion-content hidden p-4">
                            <p>Integer bibendum augue vel urna blandit tristique.</p>
                        </div>
                    </li>
                </ul>
            </li>
            <li>
                <button class="flex items-center justify-between w-full p-4 focus:outline-none" type="button"
                    onclick="toggleAccordion(event)">
                    <span class="text-lg font-bold">Section 2</span>
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                        <path d="M10 13.535l4.95-4.95 1.414 1.414-6.364 6.364-6.364-6.364 1.414-1.414z" />
                    </svg>
                </button>
                <div class="accordion-content hidden p-4">
                    <p>Integer bibendum augue vel urna blandit tristique.</p>
                </div>
            </li>
            <li>
                <button class="flex items-center justify-between w-full p-4 focus:outline-none" type="button"
                    onclick="toggleAccordion(event)">
                    <span class="text-lg font-bold">Section 3</span>
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                        <path d="M10 13.535l4.95-4.95 1.414 1.414-6.364 6.364-6.364-6.364 1.414-1.414z" />
                    </svg>
                </button>
                <div class="accordion-content hidden p-4">
                    <p>Nullam ut augue auctor, tristique neque quis, euismod velit.</p>
                </div>
            </li>
        </ul>
    </div>  --}}
    <script>
        const teamMembers = document.querySelectorAll('.team-member');

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                    observer.unobserve(entry.target);
                }
            });
        });

        teamMembers.forEach(member => {
            observer.observe(member);
        });
        function toggleAccordion(event) {
            const button = event.target;
            const content = button.nextElementSibling;
            button.classList.toggle('active');
            content.classList.toggle('hidden');
            content.classList.toggle('flex');
        }
    </script>



    {{--<div class="relative flex flex-col items-center justify-center">
                <h1 class="text-5xl font-bold" > Customer <span class="text-blue-500"> Reviews
                  </span> </h1>
                <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                  <div class="flex-1 h-2 bg-blue-400">
                  </div>
                  <div class="flex-1 h-3 bg-blue-600">
                  </div>
                  <div class="flex-1 h-4 bg-blue-800">
                  </div>
                </div> --}}
</div>
