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
            <x-testing class="mb-4" type="2xl">Tambah Post</x-testing>
            <form class="flex flex-col gap-3" action="/posts" method="POST">
                @csrf
                <div class="flex flex-col gap-1">
                    <label for="title" class="text-lg text-neutral-900 font-medium">Judul</label>
                    <input type="text" name="title" id="title"
                        class="p-2 border rounded-md border-[#ebebeb] outline-none focus:ring-2 focus:border-indigo-200 focus:ring-indigo-500 transition-all">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="content" class="text-lg text-neutral-900 font-medium">Judul</label>
                    <textarea name="content" id="content"
                        class="p-2 border rounded-md border-[#ebebeb] outline-none focus:ring-2 focus:border-indigo-200 focus:ring-indigo-500 transition-all"></textarea>
                </div>
                <div class="">
                    <button
                        class="cursor-pointer rounded-md bg-white px-3 py-1 border border-[#ebebeb] hover:bg-[#fafafa] transition-all"
                        type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
