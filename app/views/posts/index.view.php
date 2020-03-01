<?php require_once __DIR__ . "/../parts/header.php"; ?>

<a class="col-md-4 btn btn-primary mt-5 mb-3 p-3"
   href="/insertPost">
    Добавить новую запись
</a>
<table class="table table-striped table-bordered table-hover col-md-12">
    <?php foreach ($posts as $row): ?>
        <tr class="d-flex">
            <td class="col-md-1"> <?= $row->id ?></td>
            <td class="col-md-2"> <?= $row->title ?></td>
            <td class="col-md-3"> <?= nl2br($row->description) ?></td>
            <td class="col-md-2">
                <?= date_format(new DateTime($row->datePublication), 'd.m.Y') ?>
            </td>
            <td class="col-md-2 p-4">
                <a class="btn btn-info p-2"
                   href='/deletePost?id=<?= $row->id; ?>'>
                    Удалить пост</a>
            </td>
            <td class="col-md-2 p-4">
                <a class="btn btn-info p-2"
                   href='/updatePost?id=<?= $row->id; ?>'>
                    Редактировать пост</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php require_once __DIR__ . "/../parts/footer.php"; ?>

