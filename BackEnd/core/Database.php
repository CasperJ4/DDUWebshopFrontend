<?php
class Database
{
    private static $instance = null;
    private $pdo;

    private function __construct()
    {
        // Define your database connection details here
        $host = 'localhost';
        $dbname = 'webshop';
        $username = 'root';
        $password = '';

        $dsn = "mysql:host={$host};dbname={$dbname}";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        ];

        try {
            $this->pdo = new PDO($dsn, $username, $password, $options);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function query($sql, $params = [])
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

    public function select($table, $columns = '*', $where = null, $params = [])
    {
        $sql = "SELECT {$columns} FROM {$table}";

        if ($where) {
            $sql .= " WHERE {$where}";
        }

        $stmt = $this->query($sql, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($table, $data)
    {
        $columns = implode(', ', array_keys($data));
        $values = ':' . implode(', :', array_keys($data));
        $sql = "INSERT INTO {$table} ({$columns}) VALUES ({$values})";

        $stmt = $this->query($sql, $data);
        return $stmt->rowCount();
    }

    public function update($table, $data, $where, $params = [])
    {
        $set = implode(', ', array_map(function ($key) {
            return "{$key} = :{$key}";
        }, array_keys($data)));

        $sql = "UPDATE {$table} SET {$set} WHERE {$where}";

        $params = array_merge($data, $params);

        $stmt = $this->query($sql, $params);
        return $stmt->rowCount();
    }

    public function delete($table, $where, $params = [])
    {
        $sql = "DELETE FROM {$table} WHERE {$where}";

        $stmt = $this->query($sql, $params);
        return $stmt->rowCount();
    }
}
