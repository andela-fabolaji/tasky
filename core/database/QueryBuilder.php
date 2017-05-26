<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    /**
     * get results based on param
     *
     * @param string $tableName - Table to fetch from
     * @return array result - array of result
     */
    public function selectAll(string $tableName) {
        $query = "SELECT * from {$tableName}";
        $getQuery = $this->pdo->prepare($query);
        $getQuery->execute();
        $result = $getQuery->fetchAll(PDO::FETCH_CLASS);

        return $result;
    }

    public function signupUser($userData)
    {
        $query = "INSERT INTO users(username, email, password)
                  VALUES(:username, :email, :password)";
        $insert = $this->pdo->prepare($query);
        $isUserCreated = $insert->execute($userData);

        if ($isUserCreated) {
            $userid = $this->pdo->lastInsertId();
            return $this->getUserDetails($userid);
        }
    }

    public function getUserDetails($userId) {
        $query = "SELECT username FROM users WHERE users.id = {$userId}";
        $getUser = $this->pdo->prepare($query);
        $getUser->execute();
        $user = $getUser->fetchAll(PDO::FETCH_CLASS);

        return $user;
    }

    public function fetchUser($userId, $password) {
        $query = "SELECT *  FROM users
                  WHERE (users.username= :userid OR users.email= :userid)
                  AND users.password = :password";
        $user = $this->pdo->prepare($query);
        $result = $user->execute([
            'userid' => $userId,
            'password' => $password
        ]);
    }
}