<div class='grid grid-cols-1 sm:grid-cols-12 gap-3'>
    @foreach ($threads as $thread)
    <div class='col-span-3 place-self-center text-left w-full h-fit p-3 pl-4 border rounded-3xl'>
        <p class='text-slate-300'>{{$thread->created_at}}</p>
        <p>{{$thread->thread}}</p>
        <br><br>
        <p>💬</p>
    </div>
    @endforeach
</div>