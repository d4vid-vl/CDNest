<x-layout>
<div>
    @guest
    <a>You're not logged in</a>
    <a
        href="{{ route('login') }}"
        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
    >
            Log in
    </a>
	
    <a
        href="{{ route('register') }}"
        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
    >
        Register
    </a>
    
    @endguest
    
    @auth
    <a>Welcome {{ Auth::user()->name }}!</a>
    <a>Check your profile</a>
    <a 
	href="{{ route('profile.edit') }}"
    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
    >
	Edit your profile
    </a>
    @endauth 
</div>
</x-layout>
