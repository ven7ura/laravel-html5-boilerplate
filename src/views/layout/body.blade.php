@section('body')
    <div id="app">
        @section('navigation')
            {{-- Comment this include to remove navigation --}}
            @include('common.navigation')

        @show
        @section('header')
            {{-- Comment this include to remove header section --}}
            @include('common.header')
        @show

        {{-- CONTENT --}}
            <div class="container">
                @yield('content')
            </div>
        {{-- /CONTENT --}}

        @section('footer')
            {{-- Comment this include to remove footer section --}}
            @include('common.footer')
        @show
    </div>
@show
