<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">


        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <div class="logo_laravel">
                        <svg fill="#000000" height="80px" width="80px" version="1.1" id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 55.325 55.325" xml:space="preserve">
                            <g>
                                <path
                                    d="M40.825,5.502c-5.39,0-10.412,6.47-12.956,16.561c-3.972-1.007-8.27-1.561-12.425-1.561c-4.756,0-8.76,1.603-11.579,4.634
		C1.373,27.817,0,31.411,0,35.254c0,6.847,4.536,14.215,14.497,14.215c0.143,0,0.285,0.008,0.426,0.016
		c0.175,0.009,0.349,0.018,0.521,0.018c5.61,0,11.482-1.006,16.456-2.782c2.61,2.031,5.888,3.102,9.198,3.102
		c2.152,0,4.314-0.448,6.306-1.367c5.013-2.314,7.888-7.099,7.888-13.125c0-0.143,0.008-0.285,0.016-0.426
		c0.009-0.175,0.018-0.349,0.018-0.521C55.325,20.723,49.37,5.502,40.825,5.502z M15.028,47.488
		c-0.176-0.01-0.354-0.019-0.531-0.019C5.911,47.469,2,41.137,2,35.254c0-3.337,1.183-6.447,3.33-8.756
		c2.431-2.614,5.928-3.996,10.114-3.996c4.278,0,8.482,0.583,12.25,1.578l0.629,0.175c1.014,0.282,1.982,0.593,2.906,0.925
		c0.166,0.06,0.329,0.122,0.492,0.184c0.212,0.08,0.421,0.161,0.628,0.243c0.252,0.101,0.504,0.201,0.75,0.306
		c0.016,0.007,0.032,0.014,0.049,0.021c3.157,1.351,5.705,3.014,7.309,4.829c0.057,0.065,0.117,0.13,0.172,0.196
		c0.107,0.127,0.207,0.255,0.305,0.384c0.083,0.11,0.162,0.221,0.238,0.332c0.072,0.104,0.146,0.209,0.211,0.314
		c0.133,0.215,0.256,0.431,0.362,0.648c0.027,0.055,0.046,0.11,0.071,0.165c0.082,0.181,0.156,0.362,0.218,0.544
		c0.026,0.076,0.048,0.153,0.071,0.229c0.05,0.169,0.091,0.338,0.123,0.508c0.014,0.071,0.029,0.141,0.04,0.212
		c0.035,0.236,0.058,0.472,0.058,0.708c0,0.211-0.016,0.422-0.044,0.634c-0.01,0.077-0.029,0.153-0.043,0.23
		c-0.024,0.132-0.048,0.264-0.082,0.397c-0.026,0.101-0.061,0.201-0.093,0.301c-0.034,0.104-0.067,0.208-0.107,0.313
		c-0.047,0.12-0.1,0.24-0.155,0.359c-0.036,0.079-0.073,0.157-0.112,0.236c-0.072,0.141-0.149,0.281-0.232,0.421
		c-0.029,0.048-0.058,0.096-0.088,0.144c-0.105,0.167-0.214,0.333-0.335,0.498c-0.005,0.006-0.01,0.012-0.014,0.019
		c-1.525,2.073-4.296,3.98-7.826,5.497c-0.034,0.015-0.067,0.03-0.101,0.044c-0.185,0.079-0.377,0.154-0.566,0.231
		c-0.215,0.087-0.43,0.174-0.652,0.258c-4.685,1.793-10.487,2.919-16.431,2.919C15.307,47.502,15.168,47.495,15.028,47.488z
		 M53.311,34.799c-0.01,0.176-0.019,0.354-0.019,0.531c0,5.214-2.451,9.336-6.727,11.31c-4.009,1.849-8.807,1.502-12.45-0.788
		c5.988-2.572,10.209-6.351,10.209-10.85c0-0.305-0.025-0.605-0.063-0.903c-0.004-0.033-0.012-0.066-0.017-0.099
		c-0.716-5.054-6.779-9.105-14.458-11.406c2.276-9.067,6.654-15.092,11.037-15.092c6.425,0,12.5,13.063,12.5,26.881
		C53.325,34.521,53.317,34.66,53.311,34.799z" />
                                <path
                                    d="M8.749,26.189c-2.639,1.861-4.246,4.874-4.41,8.267c-0.026,0.552,0.399,1.021,0.951,1.047
		c0.016,0.001,0.032,0.001,0.049,0.001c0.53,0,0.972-0.417,0.998-0.952c0.134-2.772,1.433-5.225,3.564-6.728
		c0.451-0.318,0.56-0.942,0.241-1.394C9.823,25.979,9.2,25.872,8.749,26.189z" />
                                <path
                                    d="M15.675,24.158c-1.28,0-2.498,0.16-3.62,0.476c-0.532,0.149-0.842,0.702-0.692,1.233c0.124,0.441,0.525,0.729,0.962,0.729
		c0.09,0,0.182-0.012,0.271-0.037c0.946-0.267,1.982-0.401,3.079-0.401c0.553,0,1-0.447,1-1S16.228,24.158,15.675,24.158z" />
                                <path
                                    d="M45.196,16.051c0.919,1.387,1.649,2.98,2.17,4.735c0.129,0.435,0.527,0.716,0.959,0.716c0.094,0,0.189-0.013,0.284-0.041
		c0.529-0.157,0.832-0.714,0.675-1.243c-0.577-1.946-1.393-3.72-2.422-5.272c-0.306-0.46-0.925-0.588-1.386-0.28
		C45.017,14.97,44.891,15.59,45.196,16.051z" />
                                <path
                                    d="M40.66,9.56c-0.518-0.183-1.087,0.087-1.273,0.604c-0.187,0.519,0.082,1.091,0.6,1.279
		c0.012,0.005,1.216,0.454,2.686,1.721c0.189,0.163,0.422,0.243,0.653,0.243c0.28,0,0.56-0.117,0.757-0.347
		c0.361-0.419,0.314-1.05-0.104-1.41C42.203,10.119,40.723,9.583,40.66,9.56z" />
                            </g>
                        </svg>
                        {{-- <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg"
                            style="width: 150px">
                            <g clip-path="url(#clip0)" fill="#EF3B2D">
                                <path
                                    d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z" />
                            </g>
                        </svg> --}}
                    </div>
                    {{-- config('app.name', 'Laravel') --}}
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">{{ __('Home') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('dashboard') }}">{{ __('Dashboard') }}</a>
                                    <a class="dropdown-item" href="{{ url('profile') }}">{{ __('Profile') }}</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
</body>

</html>
