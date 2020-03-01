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
    <h2>Обновляем пост...</h2>
    <form action="" method="POST">
        <div class="form-group mt-5">
            <label for="post_date">Дата публикации:
                <?= $post->datePublication?>
            </label>
        </div>
        <div class="form-group mt-5">
            <label for="title" class="mb-3">Название:</label>
            <input type="text" class="form-control" id="title"
                   name="title"
                   value = "<?= $post->title ?? '' ?>"
                   required>
        </div>
        <div class="form-group">
            <label for="description" class="mb-3">Введите текст:</label>
            <textarea class="form-control" id="description"
                      name="description" rows="10" cols="50"
                      required>
                <?= $post->description ?? '' ?>
            </textarea>
        </div>
        <button type="submit" name="btnUpdatePost" class="btn btn-primary">
            Сохранить</button>
    </form>
</div>
</body>
</html>
