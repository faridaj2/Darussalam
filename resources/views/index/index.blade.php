<x-landing-layout>
  

   <x-slot name="content">
    {{-- Hero Slide --}}
    <div class="owl-carousel">
      <div><img class="w-full" src="https://picsum.photos/600/300?random=1"></div>
      <div><img class="w-full" src="https://picsum.photos/600/300?random=2"></div>
      <div><img class="w-full" src="https://picsum.photos/600/300?random=3"></div>
      <div><img class="w-full" src="https://picsum.photos/600/300?random=4"></div>
      <div><img class="w-full" src="https://picsum.photos/600/300?random=5"></div>
      <div><img class="w-full" src="https://picsum.photos/600/300?random=6"></div>
      <div><img class="w-full" src="https://picsum.photos/600/300?random=7"></div>
    </div>
    {{-- End Hero SLide --}}

    {{-- Informasi Pendaftaran --}}
    <div class="bg-gradient p-10 flex justify-center">
      <div class="text-left">
        <h1 class="text-white font-Lato text-2xl font-bold mb-4">Informasi & Pendaftaran Peserta Didik Baru</h1>
        
          <a href="" class="inline-flex gap-2 text-white bg-white/20 p-3 hover:bg-white/30 transition rounded-lg">
            <div class="text-5xl "><i class="fa-brands fa-whatsapp "></i></div>
            <div>
              <div class="font-Montserrat font-semibold">081237469396</div>
              <div class="font-Montserrat font-normal">Informasi Pendaftaran</div>
            </div>
          </a>
        
        
      </div>
    </div>
    {{-- End Informasi Pendaftaran --}}

    {{-- Pendidikan --}}
    <div class="pattern p-8">
      <h1 class="text-center bg-transparent font-Lato font-bold text-2xl">
        <span class="text-[#60A547]">Program</span>
        <span class="text-[#648459]">Pendidikan</span>
      </h1>
      
      <div class="border-b-2 my-6g mx-auto md:w-1/2 border-[#60A547] border-dashed"></div>

      <div class="flex justify-center w-full p-5">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-7 md:w-2/3 md:p-2">

          <div class="col-span-4 bg-white shadow-lg rounded-[20px] p-2 text-[#60A547] p-10 hover:scale-105 transition">
            <div class="flex flex-col justify-center">
              <div class="font-Lato font-bold text-2xl basis-1/12 text-center">
                SMK DARUSSALAM BLOKAGUNG 2
              </div>
              <div class="border-b-2 w-3/4 my-4 border-[#60A547] mx-auto">
                
              </div>
            </div>
            <div class="text-center font-Montserrat p-2">
              Menjadi Sekolah Menengah Kejuruan yang berkarakter, berbudaya, berwawasan lingkungan, menghasilkan insan yang bertaqwa, profesional, mampu berwirausaha dan berdaya saing global
            </div>
          </div>

          <div class="col-span-4 bg-gradient shadow-lg rounded-[20px] p-2 text-white p-10 hover:scale-105 transition">
            <div class="flex flex-col justify-center">
              <div class="font-Lato font-bold text-2xl basis-1/12 text-center">
                SMP DARUSSALAM BLOKAGUNG 2
              </div>
              <div class="border-b-2 w-3/4 my-4 border-white mx-auto">
                
              </div>
            </div>
            <div class="text-center font-Montserrat p-2">
              Menjadi Sekolah Menengah Kejuruan yang berkarakter, berbudaya, berwawasan lingkungan, menghasilkan insan yang bertaqwa, profesional, mampu berwirausaha dan berdaya saing global
            </div>
          </div>

          <div class="col-span-4 bg-white shadow-lg rounded-[20px] p-2 text-[#60A547] p-10 hover:scale-105 transition">
            <div class="flex flex-col justify-center">
              <div class="font-Lato font-bold text-2xl basis-1/12 text-center">
                Madrasah Diniyah Darul Adzkiya
              </div>
              <div class="border-b-2 w-3/4 my-4 border-[#60A547] mx-auto">
                
              </div>
            </div>
            <div class="text-center font-Montserrat p-2">
              Menjadi Sekolah Menengah Kejuruan yang berkarakter, berbudaya, berwawasan lingkungan, menghasilkan insan yang bertaqwa, profesional, mampu berwirausaha dan berdaya saing global
            </div>
          </div>
          
        </div>
      </div>
    </div>
    {{-- End Pendidikan --}}



   </x-slot>

   <x-slot name="script">
    <script src="{{ asset('dist/owl.carousel.min.js') }}"></script> 
    <script>
      
$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
        number:1,
        loop:true,
        mouseDrag:false,
        touchDrag:false,
        pullDrag:false,
        freeDrag:false,
        dots:false,
        autoplay:true,
        autoplaySpeed:5000,
        autoplayTimeout:5000,
        slideTransition: 'ease-in-out',
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        margin:10,
        items:1,
        nav: true
    });
  
});
    </script> 
   </x-slot>
</x-app-layout>
