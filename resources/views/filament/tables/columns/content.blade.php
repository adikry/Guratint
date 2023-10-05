<div class="flex justify-center align-center flex-col gap-1">
    @for ($i = 0; $i < count($getRecord()->content); $i++)
        @if ($getRecord()->content[$i]['content'])
            <img src="{{ asset('storage/' . $getRecord()->content[$i]['content']) }}" alt="Thumbnail Konten Image"
                width="80" height="80">
        @endif
        @if ($getRecord()->content[$i]['video'])
            <video preload="metadata" width="80" height="80">
                <source src="{{ asset('storage/' . $getRecord()->content[$i]['video']) }}" type="video/mp4">
            </video>
        @endif
        @if ($getRecord()->content[$i]['button'])
            <span class="text-xs text-white dark:text-gray-500 bg-white text-center ">Button
                {{ $i + 1 }}</span>
        @endif
    @endfor
</div>
