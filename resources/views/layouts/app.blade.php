@include('layouts.header')

<div class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{route('welcome')}}">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('blog')}}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('customers')}}">Customers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact_us')}}">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about_us')}}">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('profile','ahmed')}}">Profile</a>
                </li>

            </ul>

        </div>
    </nav>
    @yield('content')
</div>

@include('layouts.footer')
