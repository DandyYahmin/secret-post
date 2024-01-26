<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <form action="/post" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="thread" id="">
        <button type="submit">submit</button>
    </form>
    <thead>
        <tr>
            <th>threads</th>
            <th>timestamps</th>
            <th>comments</th>
            <th>replys</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($thread as $threads)
        <td>{{$threads->thread}}</td>
        <td>{{$threads->created_at}}</td>
        <td>{{$threads->comment}}</td>
        <td>{{$threads->comment_reply}}</td>
        @endforeach
    </tbody>
    <h3>data:</h3>
    <p>{{$thread}}</p>
</table>
</body>
</html>