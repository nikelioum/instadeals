<section class="top-deals pt-4 pb-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    Πρόσφατα Giveaways
                </div>
            </div>
        </div>
        <div class="row mt-4">
            @foreach($latestDeals as $topDeal)
            <div class="col-md-3">
                <a class="deal-card-link" href="">
                    <div class="card mb-3 shadow-sm deal-card">
                        <img src="/storage/{{$topDeal->image}}" class="card-img-top" alt="...">
                        <span class="deal-card-category">{{$topDeal->category_id}}</span>
                        <div class="card-body">
                            <h5 class="card-title">{{$topDeal->name}}</h5>
                            <p class="card-text">{{$topDeal->description}}</p>
                            <p class="card-text"><small class="text-muted">{{$topDeal->created_at->format('d/m/Y')}}</small></p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>