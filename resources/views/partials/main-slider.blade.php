<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<!-- Swiper -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        @foreach($sliders as $slider)
        <div class="swiper-slide" style="background-image: url('/storage/{{$slider->image}}'); ">
          <div class="slider-title">{{$slider->title}}</div>
          <div class="slider-description">{!!$slider->description!!}</div>
          <div class="slider-button"><a href="/{{$slider->url}}" class="btn btn-slider">ΔΕΙΤΕ ΤΩΡΑ</a></div>
        </div>
        @endforeach
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
var swiper = new Swiper(".mySwiper", {
    pagination: {
        el: ".swiper-pagination",
        type: "progressbar",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
</script>