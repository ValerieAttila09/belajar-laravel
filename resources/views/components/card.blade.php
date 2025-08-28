<div
    class="w-full rounded-lg flex flex-col items-between space-y-[2.4rem] border border-[#ebebeb] p-4 hover:shadow-lg transition-all mt-2">
    <div class="">
        <h1 class="text-xl font-semibold text-neutral-900">{{ $title }}</h1>
        <p class="text-sm text-neutral-600">{{ $content }}</p>
    </div>
    <div class="flex items-center gap-2">
        <a class="" href="/posts/{{ $id }}/edit">
            <button
                class="cursor-pointer rounded-md bg-white px-3 py-1 border border-[#ebebeb] hover:bg-[#fafafa] transition-all">Edit</button>
        </a>
        <form action="/posts/{{ $id }}" method="POST" class="">
            @csrf
            @method('DELETE')
            <button
                class="cursor-pointer rounded-md bg-white px-3 py-1 border border-[#ebebeb] hover:bg-[#fafafa] transition-all"
                type="submit">Hapus</button>
        </form>
    </div>
</div>
