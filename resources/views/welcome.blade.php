<!DOCTYPE html>
<html>
<head>
    <title>Blog</title>
</head>
<body>
    <div>
        @foreach ($posts as $post)
            <h2>{{ $post->title }}</h2>
            <p><strong>By:</strong> {{ $post->author->name }}</p>
            <p>{{ $post->content }}</p>

            <h4>Comments:</h4>
            @foreach ($post->comments as $comment)
                <p><strong>{{ $comment->commenter_name }}:</strong> {{ $comment->comment }}</p>
            @endforeach
            <hr>
        @endforeach
    </div>
</body>
</html>
