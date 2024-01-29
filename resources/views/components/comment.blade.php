@foreach ($threads as $thread)
<div class='target:w-auto target:h-auto grid grid-cols-1 gap-3 w-0 h-0 overflow-hidden fixed top-0 target:bottom-0 left-0 target:right-0 z-20' id='{{$thread->created_at}}' style='background: rgba(0,0,0,.5)'>
    <div class='bg-white col-span-3 my-40 mx-12 lg:mx-80 text-left h-fit p-3 pl-4 border-current border-2 rounded-3xl'>
        <div class='flex justify-between'>
            <p class='text-amber-500 underline underline-offset-2'>Posted on {{$thread->created_at}}</p>
            <a href="#">❌</a>
        </div>
        <p class='mt-1'>{{$thread->thread}}</p>
        <br><hr>
        <div class='h-56 overflow-y-auto break-words'>
            @if ($thread->comment->count())
                <p>Comments:</p>
                @foreach ($thread->comment as $comment)
                    <p class='mt-1'>💬{{$comment->comment}}</p>
                @endforeach
            @else
                <br><p class='text-center'>No comments yet😣</p>
            @endif
        </div><hr>
        <div class=''>
            <form action="/{{$thread->id}}/comment" method="post" class='p-1 sm:p-0'>
                @csrf
                <input name="comment" type="text" placeholder="comment your thoughts🧠💭" class='outline-none w-full h-10'>
            </form>
        </div>
    </div>
</div>
@endforeach