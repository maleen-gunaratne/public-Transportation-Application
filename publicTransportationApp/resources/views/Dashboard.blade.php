<html>
<head>fbjhdbf</head>
<body>
    <form action="{{route('post.create')}}" method="post">
    <div clacc="form-group">
    <textarea class="form-control" name="body" id="new-post" rows="5"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">create post</button>
    <input type="hidden" value="{{Session::token()}}" name="_token">
    </form>
    <section class="row-post">
    <artical class="post">

        <p>gfuygdfh jhdfhgdjh bjhdjh</p>
        <div class="interaction">
            <a href="#">like</a>
            <a href="#">delete</a>
        </div>
    </artical>
    </section>
</body>
</html>

