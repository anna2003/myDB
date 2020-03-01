<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2>Добавляем пост...</h2>
<!--    <form action="" method="POST">-->
    <form method="post">
        <div class="form-group mt-5">
            <label for="post_date">Дата публикации:
                <?= date("d.m.Y") ?>
            </label>
        </div>
        <div class="form-group mt-5">
            <label for="title" class="mb-3">Название:</label>
            <input type="text" class="form-control" id="title"
                   name="title" required>
        </div>
        <div class="form-group">
            <label for="description" class="mb-3">Введите текст:</label>
            <textarea class="form-control" id="description"
                      name="description" rows="10" cols="50" required>
            </textarea>
        </div>
        <button type="submit" name="btnInsertPost"
                class="btn btn-primary" id="btnInsertPost">
            Добавить пост
        </button>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    // $('#btnInsertPost').click(function () {
    //
    //     let title = $('#title').val();
    //     let text = $('#description').val();
    //
    //     $.ajax({
    //         url: '/app/db/posts/insertPost.php',
    //         method: 'POST',
    //         cache: false,
    //         data: {
    //             "title": title,
    //             "description": text,
    //         },
    //         // datatype: 'html',
    //         success: function (data) {
    //             console.log(data);
    //         }
    //     });
    //
    // });
    // document.querySelector("#btnInsertPost").addEventListener('click',function(){
    //     console.log("my");
    //     fetch('/app/db/posts/insertPost.php',{
    //         method: 'POST',
    //         headers: {
    //             'Content-Type': 'application/json'
    //         },
    //         body: JSON.stringify({
    //             title: 'Ivan',
    //             description: 'Ivanov'
    //         })
    //     })
    //         .then(response => response.json())
    //         .then(response => alert(JSON.stringify(response)))
    // });
            // .then(response => alert(JSON.stringify(response)))

</script>
</body>
</html>

