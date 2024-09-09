<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @vite('resources/js/app.js')
    {{-- @vite('resources/js/scrape.js') --}}
</head>

<body>
    <header>
        <nav class="w-full h-[70px] bg-blue-900">
            <ul class="flex items-center justify-center">
                <li>
                    <form method="POST" action="/logout">
                        @csrf
                        <button class="w-full p-3 font-bold text-white bg-red-500">Logout</button>
                    </form>
                </li>
            </ul>
        </nav>
    </header>
    
    <main class="flex items-center justify-center w-full h-screen bg-slate-50">
        {{$slot}}
    </main>
</body>

</html>