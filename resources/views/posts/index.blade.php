<!DOCTYPE html>
<html>
<head>
    <title>All Posts</title>
</head>
<body>
    <div>
        @foreach($posts as $post)
            <h2>
                <a href="{{ route('posts.show', $post->id) }}">
                    {{ $post->title }}
                </a>
            </h2>
            <p><strong>By:</strong> {{ $post->author->name }}</p>
            <hr>
        @endforeach
    </div>
</body>
</html>
