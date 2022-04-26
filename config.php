<?php
/**
 * Configuration file with common settings.
 */
error_reporting(-1);              // Report all type of errors
ini_set("display_errors", 1);     // Display all errors


$name = preg_replace("/[^a-z\d]/i", "", __DIR__);
session_name($name);
session_start();

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

function getPageTitles($dsn)
{
    $db = connectToDatabase($dsn);
    $sql = "SELECT title FROM object ";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $res = $stmt->fetchAll(PDO::FETCH_COLUMN, "title");
    return $res;
}

function getPageTitles2($dsn)
{
    $db = connectToDatabase($dsn);
    $sql = "SELECT title FROM article ";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $res = $stmt->fetchAll(PDO::FETCH_COLUMN, "title");
    return $res;
}
