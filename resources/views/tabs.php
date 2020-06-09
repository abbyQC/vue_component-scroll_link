<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Tabs</title>

</head>
<body>
    <div id="app" class="p-8">
        <h1 class="text-2xl font-bold mb-6">Tabs</h1>
        <tabs>
            <tab title="First">
                <p>Hello world.</p>
            </tab>
            <tab title="Second">
                <p>Hello again.</p>
            </tab>
            <tab title="Third">
                <p>Get out!</p>
            </tab>
            <tab title="Wew" active>
                <p>It works!</p>
            </tab>
        </tabs>
    </div>
    <script src="/js/app.js"></script>
</body>
<html>
