<?php
class Database
{
    const HOST = "localhost";
    const PORT = 3306;
    const USER = "root";
    const PASSWORD = "";
    const DATABASE_NAME = "prisma-demo";
    public function connect()
    {
        $conn = mysqli_connect(self::HOST, self::USER, self::PASSWORD, self::DATABASE_NAME, self::PORT);
        mysqli_set_charset($conn, 'utf-8');
        if (mysqli_connect_errno() === 0){
            return $conn ;
        }
        return false;
    }
}