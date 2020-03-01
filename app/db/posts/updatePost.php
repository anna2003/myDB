<?php
//require_once __DIR__."/../../../vendor/autoload.php";

use App\models\PostData;
use App\db\components\QueryBuilder;

$postData = new PostData(new QueryBuilder());

if (!isset($_GET['id']) || empty($_GET['id'])) {
    exit;
}
$post = $postData->getOne($_GET['id']);
if (!$post) {
    header("Location: /");
    exit;
}

if (isset($_POST['btnUpdatePost'])) {
    $_POST["id_user"] = $post->id_user;
    $postData->update($_POST, $_GET['id']);
    header("Location: /");
    exit;
}
require_once __DIR__."/../../views/posts/updatePost.view.php";