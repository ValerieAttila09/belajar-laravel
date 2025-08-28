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
    <x-navbar user="{{ $name }}"></x-navbar>

    <div class="p-6">
        <x-testing type="2xl">Daftar Post</x-testing>
        <a href="/{{ $name }}/posts/create" class="text-indigo-600 text-md hover:underline transition-all">+
            Tambah Post</a>

        <div class="w-full grid grid-cols-3 gap-4">
            @foreach ($posts as $post)
                <x-card name="{{ $name }}" id="{{ $post->id }}" title="{{ $post->title }}"
                    content="{{ $post->content }}"></x-card>
            @endforeach
        </div>
    </div>
</body>

</html>
