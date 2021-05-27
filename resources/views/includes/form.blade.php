<div x-show.transition.in.opacity.duration.500ms.out.duration.200ms="modalShow" class="fixed left-0 top-0 h-full w-full z-50 bg-dark bg-opacity-80" x-cloak>
    <div @click.away="modalShow = false" class="absolute sm:w-3/12 w-11/12 bg-white" style="left: 50%; top: 50%; transform: translate(-50%, -50%);">
    
        <span @click="modalShow = false" class="absolute right-2.5 text-2xl top-0 text-light hover:text-gray cursor-pointer">×</span>
        
        <div class="p-2.5 bg-primary text-light text-lg rounded-t-lg">{{ __('Login') }}</div>
        <div class="py-2.5 px-8 bg-light-gray text-black rounded-b-lg">

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="flex flex-col">
                    <label for="username">{{ __('Username') }}</label>

                    <div class="w-full">
                        <input id="username" type="username" class="w-full px-3 py-1 text-gray-700 bg-gray-200 rounded @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mt-3">
                    <label for="password">{{ __('Password') }}</label>

                    <div class="w-full">
                        <input id="password" type="password" class="w-full px-3 py-1 text-gray-700 bg-gray-200 rounded @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <div class="mt-3">
                        <div class="form-check">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="px-4 py-1 text-light tracking-wider bg-primary rounded">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="ml-5 text-sm hover:text-black dark:hover:text-black" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>