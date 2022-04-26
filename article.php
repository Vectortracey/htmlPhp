<?php

/**
 * This is a page controller for a multipage. You should name this file
 * as the name of the pagecontroller for this multipage. You should then
 * add a directory with the same name, excluding the file suffix of ".php".
 * You then then have several multipages within the same directory, like this.
 *
 * multipage.php
 * multipage/
 *
 * some-test-page.php
 * some-test-page/
 */
// Include the configuration file
$pagetitle = "Artiklar";
require __DIR__ . "/config.php";

$fileName = __DIR__ . "/db/nvm2.sqlite";
$dsn = "sqlite:$fileName";


connectToDatabase($dsn);

$res = getPageTitles2($dsn);


// Get what subpage to show, defaults to index
$pageReference = $_GET["page"] ?? "index";


// Get the filename of this multipage, exkluding the file suffix of .php
$base = basename(__FILE__, ".php");

// Create the collection of valid sub pages.
$pages = [
    "index" => [
        "title" => "$res[0]",
        "file" => __DIR__ . "/$base/index.php",
    ],
    "article1" => [
        "title" => "$res[2]",
        "file" => __DIR__ . "/$base/article1.php",
    ],
    "article2" => [
        "title" => "$res[3]",
        "file" => __DIR__ . "/$base/article2.php",
    ],
    "article3" => [
        "title" => "$res[4]",
        "file" => __DIR__ . "/$base/article3.php",
    ],
    "article4" => [
        "title" => "$res[5]",
        "file" => __DIR__ . "/$base/article4.php",
    ],
    "article5" => [
        "title" => "$res[6]",
        "file" => __DIR__ . "/$base/article5.php",
    ],
    "article6" => [
        "title" => "$res[7]",
        "file" => __DIR__ . "/$base/article6.php",
    ],
    "article7" => [
        "title" => "$res[8]",
        "file" => __DIR__ . "/$base/article7.php",
    ],
    "article8" => [
        "title" => "$res[9]",
        "file" => __DIR__ . "/$base/article8.php",
    ],
    "article9" => [
        "title" => "$res[10]",
        "file" => __DIR__ . "/$base/article9.php",
    ]


];

// Get the current page from the $pages collection, if it matches
$page = $pages[$pageReference] ?? null;

// Base title for all pages and add title from selected multipage
$title = $page["title"] ?? "404";
$title .= " | Test object";

// Render the page
require __DIR__ . "/incl/header.php";
require __DIR__ . "/incl/multipage.php";
require __DIR__ . "/incl/footer.php";
