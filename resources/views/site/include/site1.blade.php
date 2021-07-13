<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        @isset($image)
        <img class="masthead-avatar mb-5" src="{{asset($image)}}" alt="..." />
        @endisset
        {{-- <img class="masthead-avatar mb-5" src="" alt="..." /> --}}
        <!-- Masthead Heading-->
        @isset($title)
        <h1 class="masthead-heading text-uppercase mb-0">{{$title}}</h1>
        @endisset

        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">Graphic Artist - Web Designer - Illustrator</p>
    </div>
</header>
