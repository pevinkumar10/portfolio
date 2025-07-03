<?php
if (isset($_GET["Blog_name"])) {
    $blog = $_GET["Blog_name"];
} else {
    $blog = "all";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include_once 'src/libs/loader.php';
    ?>
    <style>
        .neon-heading {
            text-shadow: 0 0 5px #b600ff, 0 0 10px #b600ff, 0 0 20px #b600ff;
        }

        .blog-content p {
            margin-bottom: 1rem;
            color: #d1d5db;
        }

        .blog-content code {
            background-color: #1f1f1f;
            padding: 0.2rem 0.4rem;
            border-radius: 0.25rem;
            color: #0ff;
        }

        .blog-content pre {
            background-color: #1a1a1a;
            padding: 1rem;
            border-left: 4px solid #b600ff;
            overflow-x: auto;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>
    <?php
    load_template("blogs/$blog");
    ?>
</body>

</html>