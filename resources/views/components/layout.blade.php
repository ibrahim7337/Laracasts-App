<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <title>Pixel Positions</title>
</head>

<body class='bg-[#060606] text-white pb-20'>
    <div class='px-10'>
        <nav class='flex justify-between items-center py-4 border-b border-white/10'>
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>
            @auth
                <div class="space-x-6 font-bold flex">
                    <a href="/jobs/create">Post a Job</a>
                    <x-forms.form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')
                        <button>Log Out</button>
                    </x-forms.form>
                </div>
            @endauth
            @guest
                <div class="space-x-6 font-bold">
                    <a href='/register'>Sign Up</a>
                    <a href='/login'>Log In</a>
                </div>
            @endguest
        </nav>
        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
