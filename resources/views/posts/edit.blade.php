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
        <div class="max-w-4xl mx-auto">
            <x-testing class="mb-4" type="2xl">Edit Post</x-testing>
            <form class="flex flex-col gap-3" action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mt-4 flex flex-col gap-1">
                    <label for="title" class="text-lg text-neutral-900 font-medium">Judul</label>
                    <input type="text" name="title" id="title" value="{{ $post->title }}"
                        class="p-2 border rounded-md border-[#ebebeb] outline-none focus:ring-1 focus:border-indigo-500 focus:ring-indigo-500/40 transition-all">
                </div>
                <div class="mt-4 flex flex-col gap-1">
                    <label for="title" class="text-lg text-neutral-900 font-medium">Konten</label>
                    <textarea name="content" id="content"
                        class="p-2 border rounded-md border-[#ebebeb] outline-none focus:ring-1 focus:border-indigo-500 focus:ring-indigo-500/40 transition-all">{{ $post->content }}</textarea>
                </div>
                <div class="mt-3">
                    <button
                        class="cursor-pointer rounded-md bg-white px-3 py-1 border border-[#ebebeb] hover:bg-[#fafafa] transition-all"
                        type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
