<!DOCTYPE html>
<html>
<head>
    <title>Posts List</title>
</head>
<body>
    <h1>Posts List</h1>
    <a href="{{ route('posts.create') }}">Create New Post</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post['id'] }}</td>
                    <td>{{ $post['title'] }}</td>
                    <td>{{ $post['content'] }}</td>
                    <td>
                        <a href="{{ route('posts.show', $post['id']) }}">View</a>
                        <a href="{{ route('posts.edit', $post['id']) }}">Update</a>
                        <form action="{{ route('posts.destroy', $post['id']) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
