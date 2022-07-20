<nav class="navbar navbar-expand-lg sticky-top shadow-sm pt-3 pb-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">InstaWays</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/">ΑΡΧΙΚΗ</a>
                </li>
                @foreach($menuCategories as $menuCategory)
                <li class="nav-item">
                    <a class="nav-link" href="/category/{{$menuCategory->slug}}">{{$menuCategory->name}}</a>
                </li>
                @endforeach
                <li class="nav-item">
                    <a class="btn btn-proposal" href="dfsdfsd">ΠΡΟΤΕΙΝΕ GIVEAWAY</a>
                </li>
            </ul>          
        </div>
    </div>
</nav>