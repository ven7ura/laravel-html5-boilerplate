@if(config()->has('h5b.modernizr'))
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/{{ config('h5b.modernizr') }}/modernizr.min.js"></script>
@endif
@if(config()->has('h5b.jquery'))
    <script src="https://code.jquery.com/jquery-{{ config('h5b.jquery') }}.min.js" integrity="{{ config('h5b.jqueryhash')}}" crossorigin="anonymous"></script>
    {{-- <script>window.jQuery || document.write('<script src="js/vendor/jquery-{{ config('h5b.jquery') }}.min.js"><\/script>')</script> --}}
@endif
<script src="{{ asset('js/app.js') }}"></script>

@if(config()->has('h5b.ga'))
<script>
    window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
    ga('create','{{ config('h5b.ga') }}','auto');ga('send','pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
@endif
