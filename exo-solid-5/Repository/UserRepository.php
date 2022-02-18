<?php

require_once 'DatabaseInterface.php';
require_once 'RepositoryInterface.php';
require_once 'User.php';

class UserRepository implements RepositoryInterface
{
    private $database;
    public function __construct(DatabaseInterface $databaseInterface)
    {
        $this->database = $databaseInterface;
    }
    public function getUser(string $userEmail): User
    {
        $usersArray = $this->database->fetchAll();
        foreach ($usersArray as $user) {
            if ($user['email'] === $userEmail) {
                return new User($user['full_name'], $userEmail);
            }
        }
    }

    public function getUsers(): array
    {

        $usersArray = $this->database->fetchAll();
        $users = [];

        foreach ($usersArray as $user) {
            $users[] = new User($user['full_name'], $user['email']);
        }

        return $users;
    }
}
