<footer class="site-footer w-full text-light bg-dark">
    @if ( $site_footer )
    
        {!! $site_footer !!}
        
    @else 
        <section class="credits mx-auto py-5 w-full flex items-center justify-around">
            <span class="credits-theme">Дизайн: Alvar</span>
            <span class="credits-software">Движок: Ghost</span>
        </section>
    @endif
</footer>

{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="{{ asset('/js/scripts.js') }}"></script>