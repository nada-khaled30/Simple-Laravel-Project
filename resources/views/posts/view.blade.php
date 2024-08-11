<!DOCTYPE html>
<html>
<head>
    <title>View Post</title>
</head>
<body>
    <table border="1">
    <tr><td>ID</td><td>{{ $post['id'] }}</td></tr>
    <tr><td>Title</td><td>{{ $post['title'] }}</td></tr>
    <tr><td>Content</td><td>{{ $post['content'] }}</td></tr>
    </table>
    <a href="{{ route('posts.index') }}">Back to list</a>
</body>
</html>
