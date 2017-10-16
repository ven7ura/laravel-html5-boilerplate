@if(config('h5b.modernizr'))
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/{{ config('h5b.modernizr_version') }}/modernizr.min.js"></script>
@endif
@if(config('h5b.jquery'))
    <script src="https://code.jquery.com/jquery-{{ config('h5b.jquery_version') }}.min.js" integrity="{{ config('h5b.jquery_integrity')}}" crossorigin="anonymous"></script>
    {{-- <script>window.jQuery || document.write('<script src="js/vendor/jquery-{{ config('h5b.jquery') }}.min.js"><\/script>')</script> --}}
@endif

@section('scripts')
<script src="{{ asset('js/app.js') }}"></script>
@show

@if(config('h5b.ga'))
    <script>
        window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
        ga('create','{{ config('h5b.ga_id') }}','auto');ga('send','pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>
@endif
