<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <form action="/1/2/reply" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="replies" id="">
        <button type="submit">submit</button>
    </form>
    <h3>data:</h3>
    <p>{{$threads}}</p>
    <hr>
    @foreach ($threads as $thread)
    <p>isi thread: {{$thread->thread}}</p>
    <p>tanggal dibuat thread: {{$thread->created_at}}</p>
    <p>comment:</p>
    @foreach ($thread->comment as $comment)
    <p>{{$comment->comment}}</p>
    @foreach ($comment->comment_reply as $reply)
    <p>{{$reply->replies}}</p>
    @endforeach
    @endforeach
    @endforeach
</table>
</body>
</html>