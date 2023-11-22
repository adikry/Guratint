<div class="flex justify-center align-center flex-col gap-1">
    @if ($getRecord()->video)
        <video preload="metadata" width="80" height="80">
            <source src="{{ asset('storage/' . $getRecord()->video) }}" type="video/mp4">
        </video>
    @endif
    @if ($getRecord()->button)
        <span class="text-xs text-white dark:text-gray-500 bg-white text-center ">{{ $getRecord()->button }}</span>
    @endif
    @for ($i = 0; $i < count($getRecord()->content); $i++)
        @if ($getRecord()->content[$i]['content'])
            <img src="{{ asset('storage/' . $getRecord()->content[$i]['content']) }}" alt="Thumbnail Konten Image"
                width="80" height="80">
        @endif
    @endfor
</div>
