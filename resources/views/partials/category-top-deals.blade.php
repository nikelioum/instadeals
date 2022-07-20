<section class="top-deals pt-4 pb-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    Δείτε ακόμα
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <!-- Swiper -->
            <div class="swiper mySwiper1">
                <div class="swiper-wrapper">
                    @foreach($topDeals as $deal)
                    <div class="swiper-slide">
                        <a class="deal-card-link" href="">
                            <div class="card mb-3 shadow-sm deal-card">
                                <img src="/storage/{{$deal->image}}" class="card-img-top" alt="...">
                                <span class="deal-card-category">{{$deal->category_id}}</span>
                                <div class="card-body">
                                    <h5 class="card-title">{{$deal->name}}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination mt-4"></div>
            </div>
        </div>
    </div>
</section>

<style>
.mySwiper1 {
    width: 100%;
    height: 100%;
}

.swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;

    /* Center slide text vertically */
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
}

.swiper-slide1 img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

a.deal-card-link {
    text-decoration: none;
    background-color: #fefefd;
}
</style>



<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
var swiper = new Swiper(".mySwiper1", {
    slidesPerView: 5,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
          100: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 5,
            spaceBetween: 50,
          },
        },
});
</script>