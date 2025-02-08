<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDNBooru</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body>
    <div class="container mx-auto py-10 text-center">
           <!--  <h1 class="text-xl font-bold text-blue-600" >Welcome to CDNBooru!</h1> -->
	<img src="{{ asset('images/temp-logo.jpg') }}" style="max-width: 800px; max-height: 500px; display: block; margin-left: auto; margin-right: auto;">

	<!--
	@if (Route::has('login'))
            <nav class="-mx-3 flex flex-1 justify-center">
                @auth
                <a
                    href="{{ url('/dashboard') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    Profile 
                </a>
                @else
                <a
                    href="{{ route('login') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    Log in
                </a>
		
                @if (Route::has('register'))
                    <a
                        href="{{ route('register') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Register
                    </a>
                @endif
             @endauth
            </nav>
        @endif

	-->
	
	<nav>
	    <a class="px-3 py-2">Browse</a>
	    <a class="px-3 py-2" href="{{ url('/user') }}">My Account</a>
	</nav>

	<form>
	    <div class="flex items-center mb-4 justify-center">
		<input type="text" name="query" id="search-input" class="px-4 py-2 rounded-l-md focus:outline-none border border-gray-300" placeholder="Put some tags here...">
		<button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-r-md hover:bg-blue-700">Search</button>
	    </div>
	</form>
    </div>
</body>
</html>
