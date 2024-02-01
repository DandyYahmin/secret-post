<div class='grid grid-cols-1 gap-3'>
    @if ($threads->count())
        @foreach ($threads as $thread)
        <div class='col-span-3 place-self-center text-left w-full h-fit p-3 pl-4 border border-current rounded-3xl'>
            <p class='text-amber-500 underline underline-offset-2'>Posted on {{$thread->created_at}}</p>
            <p class='mt-1'>{{$thread->thread}}</p>
            <br><br>
            <a href="#{{$thread->created_at}}" class='border border-current w-fit rounded-full p-1 text-sm bg-teal-500'>💬</a>
        </div>
        @endforeach
    @else
        <p class='text-center mt-10 text-red-600 text-2xl underline underline-offset-2'>No threads found❓</p>
    @endif
</div>