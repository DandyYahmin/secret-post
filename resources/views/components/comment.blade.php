@foreach ($threads as $thread)
<div class='target:w-auto target:h-auto grid grid-cols-1 gap-3 w-0 h-0 overflow-hidden fixed top-0 target:bottom-0 left-0 target:right-0 z-20' id='{{$thread->created_at}}' style='background: rgba(0,0,0,.5)'>
    <div class='bg-white col-span-3 my-40 mx-12 lg:mx-80 text-left h-fit p-3 pl-4 border-current border-2 rounded-3xl'>
        <div class='flex justify-between'>
            <p class='text-amber-500 underline underline-offset-2'>Posted on {{$thread->created_at}}</p>
            <a href="#">❌</a>
        </div>
        <p class='mt-1'>{{$thread->thread}}</p>
        <br><hr>
        <div class='h-56 overflow-x-auto whitespace-nowrap'>
            @if ($thread->comment->count())
                <p>Comments:</p>
                @foreach ($thread->comment as $comment)
                    <div class='flex gap-2 mt-1'>
                        <p class=''>💬{{$comment->comment}}</p>
                        <button class='text-gray-400' onclick='replyComment({{$thread->id}},{{$comment->id}},"{{$comment->comment}}")'>↪reply comment</button>
                    </div>
                    <div class='ml-5 mb-1'>
                        @if ($comment->comment_reply->count())
                            <button style='display: block;' id='show-reply{{$comment->id}}' class='text-gray-400' onclick="showReply({{$comment->id}})">🔼show reply</button>
                            <button style='display: none;' id='hide-reply{{$comment->id}}' class='text-gray-400' onclick="hideReply({{$comment->id}})">🔽hide reply</button>
                            @foreach ($comment->comment_reply as $reply)
                                <p style='display: none;' class='mt-1 reply{{$comment->id}}'>💬{{$reply->replies}}</p>
                            @endforeach
                        @endif
                    </div>
                @endforeach
            @else
                <br><p class='text-center'>No comments yet😣</p>
            @endif
        </div><hr>
        <div class='flex justify-between mt-2 overflow-x-auto whitespace-nowrap'>
            <p class='text-gray-700 w-[95%] overflow-hidden' id='reply-tag{{$thread->id}}' style='display: none;'></p>
            <button id='cancel-reply{{$thread->id}}' style='display: none;' onclick='cancelReply({{$thread->id}})'>✖</button>
        </div>
        <div class=''>
            <form action="/{{$thread->id}}/comment" method="post" class='p-1 sm:p-0' id="comment-form{{$thread->id}}">
                @csrf
                @error('comment')
                    <p class='text-red-700'>At least write 1 character lmao🤓</p>
                @enderror
                <input name="comment" type="text" placeholder="comment your thoughts🧠💭" class='outline-none w-full'>
            </form>
        </div>
    </div>
</div>
@endforeach
<script>
    function cancelReply(threadId) {
        var replyTag = document.getElementById('reply-tag'+threadId)
        replyTag.style.display = 'none'
        var cancelReply = document.getElementById('cancel-reply'+threadId)
        cancelReply.style.display = 'none'
        var replyForm = document.getElementById('comment-form'+threadId)
        replyForm.action = `/${threadId}/comment`
        return false;
    }
    function replyComment(threadId, commentId, commentText) {
        var replyTag = document.getElementById('reply-tag'+threadId)
        replyTag.innerHTML = 'reply: ' + commentText
        replyTag.style.display = 'block'
        var cancelReply = document.getElementById('cancel-reply'+threadId)
        cancelReply.style.display = 'block'
        var replyForm = document.getElementById('comment-form'+threadId)
        replyForm.action = `/${threadId}/${commentId}/reply`
        return false;
    }
    function showReply(commentId) {
        var reply = document.getElementsByClassName('reply'+commentId)
        for (var i = 0; i < reply.length; i++) {
            reply[i].style.display = 'block'
        }
        var show = document.getElementById('show-reply'+commentId)
        show.style.display = 'none'
        var hide = document.getElementById('hide-reply'+commentId)
        hide.style.display = 'block'
        return false
    }
    function hideReply(commentId) {
        var reply = document.getElementsByClassName('reply'+commentId)
        for (var i = 0; i < reply.length; i++) {
            reply[i].style.display = 'none'
        }
        var show = document.getElementById('show-reply'+commentId)
        show.style.display = 'block'
        var hide = document.getElementById('hide-reply'+commentId)
        hide.style.display = 'none'
        return false
    }
</script>