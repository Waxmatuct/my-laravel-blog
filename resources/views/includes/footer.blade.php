<footer class="site-footer w-full text-black dark:text-gray">

        <section class="credits mx-auto py-8 w-full flex flex-col items-center justify-center">
            <span class="credit text-sm">© {{ date('Y') }}. {{ env('APP_NAME')}}.</span>
            <span class="text-sm">Все права защищены.</span>
            {{-- <span class="credit">
                <div class="social-links flex my-2.5">
                    <a class="block border-0 w-5 h-5 mr-2.5" href="#" title="Telegram" target="_blank" rel="noopener">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 32 32">
                            <path d="M16 0c-8.838 0-16 7.162-16 16s7.162 16 16 16 16-7.163 16-16-7.163-16-16-16zM23.863 10.969l-2.625 12.369c-0.181 0.881-0.712 1.087-1.45 0.681l-4-2.956-1.919 1.869c-0.225 0.219-0.4 0.4-0.8 0.4-0.519 0-0.431-0.194-0.606-0.688l-1.363-4.475-3.956-1.231c-0.856-0.262-0.862-0.85 0.194-1.269l15.412-5.95c0.7-0.319 1.381 0.169 1.113 1.25z"></path>
                        </svg>            
                    </a> 
                    <a class="block border-0 w-5 h-5 mr-2.5" href="#" title="Twitter" target="_blank" rel="noopener">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                        </svg>                
                    </a>
                    <a class="block border-0 w-5 h-5 mr-2.5" href="#" title="Facebook" target="_blank" rel="noopener">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="block border-0 w-5 h-5" href="#" title="Instagram" target="_blank" rel="noopener">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>            
                    </a>
                </div>
            </span> --}}

            {{-- @auth
            <div class="flex flex-row">
                <span class="text-sm inline-flex text-black dark:text-light">
                    Выйти
                </span>
                <a href="{{ route('logout') }}" class="block border-0 ml-1 text-black dark:text-light hover:text-primary dark:hover:text-primary-darker" title="Выйти"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>    
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
            @else

            <div x-data="{modalShow: false}">    
                <button class="block text-black dark:text-light hover:text-primary dark:hover:text-primary-darker" @click="modalShow = true">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </button>

                @include('includes.form')
                
            </div>

            @endauth --}}
        </section>
</footer>