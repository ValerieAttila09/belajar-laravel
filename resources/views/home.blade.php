<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="w-full bg-white shadow p-3">
        <div class="mx-auto max-w-5xl flex items-center justify-between">
            <div class="">
                <h1 class="text-lg text-neutral-900 font-medium">Laravel</h1>
            </div>
            <div class="flex items-center gap-2">
                <button
                    class="text-md text-neutral-600 font-medium py-1 px-3 hover:text-neutral-900 transition-all cursor-pointer">Home</button>
                <button
                    class="text-md text-neutral-600 font-medium py-1 px-3 hover:text-neutral-900 transition-all cursor-pointer">About</button>
                <button
                    class="text-md text-neutral-600 font-medium py-1 px-3 hover:text-neutral-900 transition-all cursor-pointer">Blog</button>
                <button
                    class="text-md text-neutral-600 font-medium py-1 px-3 hover:text-neutral-900 transition-all cursor-pointer">Contact</button>
                <div class="ms-4 flex items-center gap-3">
                    <span class="text-sm text-neutral-800">Welcome, <span
                            class="text-neutral-900 font-semibold text-md">{{ $name }}</span></span>
                    <div
                        class="size-8 rounded-full bg-neutral-100 flex items-center justify-center text-md text-neutral-400">
                        VA
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="p-6">
        <x-testing type="2xl">Daftar Post</x-testing>
        <a href="/posts/create" class="text-indigo-600 text-md hover:underline transition-all">+ Tambah Post</a>

        <div class="w-full grid grid-cols-3 gap-4">
            @foreach ($posts as $post)
                <x-card id="{{ $post->id }}" title="{{ $post->title }}" content="{{ $post->content }}"></x-card>
            @endforeach
        </div>
    </div>
</body>

</html>
