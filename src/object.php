<?php

/**
 * Definitions of commonly used functions.
 */
// Create a DSN for the database using its filename
$fileName = __DIR__ . "/../db/nvm2.sqlite";
$dsn = "sqlite:$fileName";

function connectToDatabase($dsn)
{
    try {
        $db = new PDO($dsn);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(
            PDO::ATTR_DEFAULT_FETCH_MODE,
            PDO::FETCH_ASSOC
        );
    } catch (PDOException $e) {
        echo "Failed to connect to the database using DSN:<br>$dsn<br>";
        throw $e;
    }

    return $db;
}
