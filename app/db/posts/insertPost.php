<?php
//echo "-------------";
//require_once __DIR__."/../../../vendor/autoload.php";

use App\models\PostData;
use App\db\components\QueryBuilder;

$postData = new PostData(new QueryBuilder());

if (count($_POST) > 0) {
    $postData->store($_POST);

    header("Location: /");
    exit;
}
require_once __DIR__."/../../views/posts/insertPost.view.php";
