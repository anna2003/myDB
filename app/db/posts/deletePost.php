<?php

//require_once __DIR__."/../../../vendor/autoload.php";

use App\models\PostData;
use App\db\components\QueryBuilder;

$postData = new PostData(new QueryBuilder());

if (!isset($_GET['id']) || empty($_GET['id'])) {
    exit;
}

if ($postData->delete($_GET['id'])) {
    header("Location: /");
    exit;
}
else {
    echo "----------";
}
