<section class="footer pt-4 pb-2">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-title pb-4">Top Giveaways</div>
                <ul class="footer-menu">
                    @foreach($topDeals as $topDeal)
                    <li class="pb-2"><a href="">{{$topDeal->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4">
                <div class="footer-title pb-4">Πρόσφατα Giveaways</div>
                <ul class="footer-menu">
                    @foreach($topDeals as $topDeal)
                    <li class="pb-2"><a href="">{{$topDeal->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-2">
                <div class="footer-title pb-4">Κατηγορίες</div>
                <ul class="footer-menu">
                @foreach($menuCategories as $menuCategory)
                    <li class="pb-2"><a href="/category/{{$menuCategory->slug}}">{{$menuCategory->name}}</a></li>
                @endforeach
                </ul>
            </div>
            <div class="col-md-2">
                <div class="footer-title pb-4">Σύνδεσμοι</div>
                <ul class="footer-menu">
                    <li class="pb-2"><a href="">Όροι χρήσης</a></li>
                    <li class="pb-2"><a href="">Προσωπικά δεδομένα</a></li>
                    <li class="pb-2"><a href="">Πως λειτουργεί</a></li>
                    <li class="pb-2"><a href="">Πρότεινε giveaway</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>