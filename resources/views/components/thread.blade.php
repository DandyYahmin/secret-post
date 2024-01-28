<div class='grid grid-cols-1 gap-3'>
    @foreach ($threads as $thread)
    <div class='col-span-3 place-self-center text-left w-full h-fit p-3 pl-4 border border-current rounded-3xl'>
        <p class='text-amber-500 underline underline-offset-2'>Posted on {{$thread->created_at}}</p>
        <p>{{$thread->thread}}</p>
        <br><br>
        <p class='border border-current w-fit rounded-full p-1 text-sm bg-teal-500'>💬</p>
    </div>
    @endforeach
</div>