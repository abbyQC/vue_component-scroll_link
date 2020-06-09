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

<body class="p-10">
<div id="app" class="text-center">
    <h1 class="text-2xl font-bold mb-8">Modal</h1>
    <p>
        <a href="#cancel-modal">Open Modal</a>
    </p>
    <modal name="cancel-modal">
        <h1 class="font-bold test-xl mb-2">Leaving?</h1>
        <p>th is is a paragraph Lorem....</p>
        <template v-slot:footer>
            <a href="#" class="bg-gray-400 py-2 px-4 rounded-lg text-white hover:bg-gray-500 mr-2">Cancel</a>
            <a href="#confirm-cancel-modal" class="bg-blue-400 py-2 px-4 rounded-lg text-white hover:bg-blue-500">Continue</a>
        </template>
    </modal>

    <modal name="confirm-cancel-modal">
        <h1 class="font-bold test-xl mb-2">Are you sure?</h1>
        <p>th is is a paragraph Lorem....</p>
        <template v-slot:footer>
{{--            <a href="#"></a>--}}
            <button @click="$modal.hide('cancel-modal')" class="bg-gray-400 py-2 px-4 rounded-lg text-white hover:bg-gray-500 mr-2">Cancel</button>
            <button @click="$modal.hide('cancel-modal')" class="bg-blue-400 py-2 px-4 rounded-lg text-white hover:bg-blue-500">Yes</button>
        </template>
    </modal>
</div>
<script src="/js/app.js"></script>
</body>

</html>
