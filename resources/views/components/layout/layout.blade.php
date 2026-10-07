<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-background text-foreground">
    <x-layout.nav />
    <main class="max-w-7xl mx-auto px-6 pb-10">
        {{ $slot }}
    </main>

    @session('success')
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 2000)" x-transition
            class="bg-primary px-4 py-3 absolute bottom-4 right-4 rounded-lg">
            You are logged in as {{ auth()->user()->name }} ({{ auth()->user()->email }})
        </div>
    @endsession
</body>

</html>