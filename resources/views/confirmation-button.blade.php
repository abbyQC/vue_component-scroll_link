<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>confirmation Dialogs</title>

</head>
<body class="font-sans p-10">
<div id="app" class="text-center">
    <h1 class="text-2xl font-bold mb-8">Confirmation Dialog</h1>
    <confirm-dialog></confirm-dialog>
</div>
<script src="/js/app.js"></script>

</body>
</html>