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
$pagetitle = "Objekt";

// Include essential functions
require __DIR__ . "/config.php";

// Get what subpage to show, defaults to index
$pageReference = $_GET["page"] ?? "index";

// Get the filename of this multipage, exkluding the file suffix of .php
$base = basename(__FILE__, ".php");


$fileName = __DIR__ . "/db/nvm2.sqlite";
$dsn = "sqlite:$fileName";


connectToDatabase($dsn);

$res = getPageTitles($dsn);


// Create the collection of valid sub pages.
$pages = [
    "index" => [
        "title" => "Nättraby vägmuseums objekt",
        "file" => __DIR__ . "/$base/index.php",
    ],
    "object1" => [
        "title" => "$res[0]",
        "file" => __DIR__ . "/$base/object1.php",
    ],
    "object2" => [
        "title" => "$res[1]",
        "file" => __DIR__ . "/$base/object2.php",
    ],
    "object3" => [
        "title" => "$res[2]",
        "file" => __DIR__ . "/$base/object3.php",
    ],
    "object4" => [
        "title" => "$res[3]",
        "file" => __DIR__ . "/$base/object4.php",
    ],
    "object5" => [
        "title" => "$res[4]",
        "file" => __DIR__ . "/$base/object5.php",
    ],
    "object6" => [
        "title" => "$res[5]",
        "file" => __DIR__ . "/$base/object6.php",
    ],
    "object7" => [
        "title" => "$res[6]",
        "file" => __DIR__ . "/$base/object7.php",
    ],
    "object8" => [
        "title" => "$res[7]",
        "file" => __DIR__ . "/$base/object8.php",
    ],
    "object9" => [
        "title" => "$res[8]",
        "file" => __DIR__ . "/$base/object9.php",
    ],
    "object10" => [
        "title" => "$res[9]",
        "file" => __DIR__ . "/$base/object10.php",
    ],
    "object11" => [
        "title" => "$res[10]",
        "file" => __DIR__ . "/$base/object11.php",
    ],
    "object12" => [
        "title" => "$res[11]",
        "file" => __DIR__ . "/$base/object12.php",
    ],
    "object13" => [
        "title" => "$res[12]",
        "file" => __DIR__ . "/$base/object13.php",
    ],
    "object14" => [
        "title" => "$res[13]",
        "file" => __DIR__ . "/$base/object14.php",
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
