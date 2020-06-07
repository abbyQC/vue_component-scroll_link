<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Conditional Visibility</title>
</head>

<body>
    <div id="app" class="relative flex flex-col items-center p-8">
        <h1 class="text-2xl font-bold mb-8">Conditional Visibility</h1>
        <div class="container w-3/4 bg-gray-200 p-4" style="height:2000px">
            <a id="new-post-link" href="#" class="text-blue-500">New Post</a>
            <visible when-hidden="#new-post-link">
                <button class="bg-blue-400 hover:bg-blue-500 rounded-full w-24 h-24 text-white text-4xl fixed z-10 right-0 bottom-0 mr-4 mb-4">+</button>
            </visible>
        </div>
    </div>
    <script src="/js/app.js"></script>
</body>

</html>

