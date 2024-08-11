<!DOCTYPE html>
<html>
<head>
    <title>Posts List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        
        a {
            text-decoration: none;
            color: #007BFF;
        }
        a:hover {
            text-decoration: underline;
        }
        .btn {
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
        }
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .pagination a {
            padding: 8px 16px;
            margin: 0 4px;
            border: 1px solid #ddd;
            border-radius: 4px;
            text-decoration: none;
            color: #007BFF;
        }
        .pagination a:hover {
            background-color: #f0f0f0;
        }
        .pagination .active {
            background-color: #007BFF;
            color: #fff;
            border: 1px solid #007BFF;
        }

    </style>
</head>
<body>
<a href="{{ url('/posts/create') }}" class="btn">Create</a>
<table border="1" width="420px" height="150">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Posted_BY</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post) 
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td>{{ $post->user->name }}</td>
            <td>
                <a href="{{ url('/post/' . $post->id . '/edit') }}" class="btn edit-btn">Edit</a>
                <a href="{{ url('/post/' . $post->id) }}" class="btn">View</a>
                <form action="{{ url('/post/' . $post->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn delete-btn">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="pagination">
    {{ $posts->links() }}
</div>
</body>
</html>
