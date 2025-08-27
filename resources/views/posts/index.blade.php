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
    <x-navbar user="Valerie"></x-navbar>
    <div class="p-6">
        <x-testing type="2xl">Daftar Post</x-testing>
        <a href="/posts/create" class="text-indigo-600 text-md hover:underline transition-all">+ Tambah Post</a>

        <ul class="w-full grid grid-cols-3 gap-4">
            @foreach ($posts as $post)
                <li
                    class="w-full rounded-lg flex flex-col items-between space-y-[2.4rem] border border-[#ebebeb] p-4 hover:shadow-lg transition-all mt-2">
                    <div class="">
                        <h1 class="text-xl font-semibold text-neutral-900">{{ $post->title }}</h1>
                        <p class="text-sm text-neutral-600">{{ $post->content }}</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <a class="" href="/posts/{{ $post->id }}/edit">
                            <button
                                class="cursor-pointer rounded-md bg-white px-3 py-1 border border-[#ebebeb] hover:bg-[#fafafa] transition-all">Edit</button>
                        </a>
                        <form action="/posts/{{ $post->id }}" method="POST" class="">
                            @csrf
                            @method('DELETE')
                            <button
                                class="cursor-pointer rounded-md bg-white px-3 py-1 border border-[#ebebeb] hover:bg-[#fafafa] transition-all"
                                type="submit">Hapus</button>
                        </form>
                    </div>

                </li>
            @endforeach
        </ul>
    </div>
</body>

</html>
