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
        dots:true,
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
