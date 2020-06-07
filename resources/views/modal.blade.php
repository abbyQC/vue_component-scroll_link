<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Modal</title>

    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>
<body>
<div class="p-10">
    <div id="app" class="text-center">
        <h1 class="text-2xl font-bold mb-8">Modal</h1>
    </div>
    <p>
        <a href="#cancel-modal">Open Modal</a>
    </p>
    <modal name="cancel-modal">
        <h1>Leaving?</h1>
        <p>this is a paragraph Lorem....</p>
    </modal>
</div>
<script src="/js/app.js"></script>
</body>

</html>
