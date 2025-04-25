<!DOCTYPE html>
<html>
<head>
    <title>{{ $post->title }}</title>
</head>
<body>
    <div>
        @if(session('success'))
            <p style="color:green">{{ session('success') }}</p>
        @endif

        <h1>{{ $post->title }}</h1>
        <p><strong>By:</strong> {{ $post->author->name }}</p>
        <p>{{ $post->content }}</p>

        <h3>Comments</h3>
        @forelse($post->comments as $c)
            <p>
                <strong>{{ $c->commenter_name }}:</strong>
                {{ $c->comment }}
            </p>
        @empty
            <p>No comments yet.</p>
        @endforelse

        <h4>Leave a Comment</h4>
        <form method="POST" action="{{ route('comments.store', $post->id) }}">
            @csrf
            <div>
                <label>Your Name:</label><br>
                <input type="text" name="commenter_name" value="{{ old('commenter_name') }}">
                @error('commenter_name')
                    <div style="color:red">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label>Your Comment:</label><br>
                <textarea name="comment">{{ old('comment') }}</textarea>
                @error('comment')
                    <div style="color:red">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
