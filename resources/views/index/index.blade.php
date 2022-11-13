<x-landing-layout>
  

   <x-slot name="content">
    <div class="owl-carousel">
      <div><img class="w-full" src="https://picsum.photos/600/300?random=1"></div>
      <div><img class="w-full" src="https://picsum.photos/600/300?random=2"></div>
      <div><img class="w-full" src="https://picsum.photos/600/300?random=3"></div>
      <div><img class="w-full" src="https://picsum.photos/600/300?random=4"></div>
      <div><img class="w-full" src="https://picsum.photos/600/300?random=5"></div>
      <div><img class="w-full" src="https://picsum.photos/600/300?random=6"></div>
      <div><img class="w-full" src="https://picsum.photos/600/300?random=7"></div>
    </div>
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
