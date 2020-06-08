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
    <div class="mb-6">
        <form method="POST">
            <confirm-button
                meaasge="Are you sure you want to cancel you account"
                class="bg-blue-500 hover:bg-blue-600 py-2 px-4 text-white rounded-lg"
            >Option 1
            </confirm-button>
        </form>
    </div>
    <div class="mb-6">
        <form method="POST">
            <confirm-button
                meaasge="Are you sure you want to cancel you account"
                class="bg-blue-500 hover:bg-blue-600 py-2 px-4 text-white rounded-lg"
            >Option 2
            </confirm-button>
        </form>
    </div>
    <div class="mb-6">
        <form method="POST" @submit.prevent="confirm('Are you really sure?')">
            <button
                meaasge="Are you sure you want to cancel you account"
            >Option 3
            </button>
        </form>
    </div>
    <confirm-dialog></confirm-dialog>
</div>
<script src="/js/app.js"></script>

</body>
</html>
