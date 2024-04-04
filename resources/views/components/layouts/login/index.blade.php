{{-- @php
    $welcome = 'Welcome!';
    $time = date('H');

    if ($time >= 07 && $time <= 12) {
        $welcome = 'Hy, Good morning 🌄';
    } elseif ($time >= 12 && $time <= 17) {
        $welcome = 'Hy, Good afternoon ☀';
    } elseif ($time >= 17 && $time <= 23) {
        $welcome = 'Hy, Good evening 🌃';
    } elseif ($time >= 23 && $time <= 07) {
        $welcome = 'Goodnight babe 🌙';
    }
    $default = $welcome;
@endphp

<div class="flex items-center justify-center h-screen px-8 ">
    <div class="relative w-[34rem] overflow-hidden bg-secondary rounded-t-lg pt-12">
        <div class="text-white text-center">
            <p class="absolute top-0 left-0 p-3 ml-3 text-sm">{{ $welcome }}</p>
            <p class="absolute top-0 right-0 p-4 mr-3 text-xs">{{ date('H:i | M, D Y') }}</p>
        </div>
        <div class="flex flex-col items-center gap-y-8 mx-auto border py-14 shadow-xl bg-white">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-secondary -translate-y-4 uppercase">Login</h1>
            </div>

            <form action="#" method="POST" class="w-full"> @csrf
                <div class="flex flex-col gap-8 px-8">
                    <div class="grid">
                        <label class="mb-2 text-secondary text-sm" for="email">Email</label>
                        <input
                            class="text-sm border-b border-secondary outline-none py-2 px-4 placeholder:text-secondary/50 duration-300"
                            type="email" name="email" id="email" placeholder="email@email.com" autofocus
                            required>
                    </div>

                    <div class="grid relative">
                        <label class="mb-2 text-secondary text-sm" for="password">Password</label>
                        <input
                            class="text-sm border-b border-secondary outline-none py-2 px-4 placeholder:text-secondary/50 duration-300"
                            type="password" name="password" id="password" placeholder="********" autocomplete="off"
                            required>
                        <button type="button" class="absolute end-0 bottom-0 -translate-y-12 -translate-x-3"
                            data-hs-toggle-password = '{
                            "target": "#password"
                        }'>
                            <svg class="text-secondary/80 size-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path class="hs-password-active:hidden"
                                    d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z" />
                                <path class="hs-password-active:hidden"
                                    d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z" />
                                <path class="hs-password-active:hidden"
                                    d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z" />
                                <path class="hidden hs-password-active:block"
                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                <path class="hidden hs-password-active:block"
                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                            </svg>
                        </button>
                        <div class="flex justify-between pt-4 text-sm">
                            <button>
                                <input type="checkbox" name="remember-me" id="remember-me" checked>
                                <label for="remember-me">Remember me</label>
                            </button>
                            <a href="#" class="text-primary hover:underline">Forgot password?</a>
                        </div>
                    </div>



                    <button class="btn-login" type="submit">
                        Login
                    </button>

                    <div class="text-sm">
                        <p>Don't have an account? <a href="/register" class="text-primary hover:underline">Register
                                here</a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> --}}
