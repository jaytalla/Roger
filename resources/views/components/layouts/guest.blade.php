<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>

<body >
    <main class="flex items-center justify-center w-full h-screen bg-blue-900">
        {{$slot}}
    </main>
</body>

</html>