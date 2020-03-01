<?php
namespace App\db\components;

// для создания запросов для базы данных mysql!
class QueryBuilder
{
    public $pdo;

    public function __construct()
    {
        $config = require_once __DIR__ . "/../../../config.php";
        $this->pdo = Connection::make($config);
    }

    //Список задач
    public function getAll($table, $order="")
    {
        $sql = "SELECT * FROM $table ORDER BY :order";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            "order"=>$order
        ]);
        $results = $stmt->fetchAll();
        return $results;
    }

    // Вывод одной записи
    public function getOne($table, $id)
    {
        $sql = "SELECT * FROM $table WHERE id=:id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            "id"=>$id]);
        return $stmt->fetch();
    }

    //Добавление новой записи
    public function store($table, $data)
    {

        // 1. Ключи массива
        $keys = array_keys($data);
        // 2. Сформировать строку title, content
        $fields = implode(',', $keys);
        //3. Сформировать метки
        $values = ":" . implode(', :', $keys);

        $sql = "INSERT INTO $table ($fields) VALUES ($values)";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);

        return $this->pdo->lastInsertId();
    }

    //Изменение\обновление существующей записи
    public function update($table, $data)
    {
        $fields = '';

        foreach($data as $key => $value) {
            if($key !== "id"){
                $fields .= $key . "=:" . $key . ",";
            }
        }
        $fields = rtrim($fields, ',');

        $sql = "UPDATE $table SET $fields WHERE id=:id";

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($data); // true || false
    }

    //Удаление задачи
    public function delete($table, $id)
    {
        $sql = "DELETE FROM $table WHERE id=:id";
        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            "id"=>$id
        ]);
    }
}