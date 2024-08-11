<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-group textarea {
            height: 150px;
        }
        .btn {
            padding: 10px 15px;
            background-color: brown;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="/post/{{ $post['id'] }}" method="POST">
          
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" value="{{ $post['title'] }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" required>{{ $post['body'] }}</textarea>
            </div>
            <div class="form-group">
                <label for="creator">Creator</label>
                <input type="text" id="creator" name="creator" value="{{ $post['create_by'] }}" required>
            </div>
            <button type="submit" class="btn">Update</button>
        </form>
    </div>
</body>
</html>
