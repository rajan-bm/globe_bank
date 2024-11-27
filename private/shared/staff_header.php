<?php if (!isset($page_title)) {
    $page_title = 'GBI Staff Area';
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo h($page_title); ?></title>

    <!-- stylesheet -->
    <link rel="stylesheet" href="<?php echo url_for('/stylesheets/staff.css'); ?>" media="all">
</head>

<body>
    <header>
        <h1>GBI Staff Area</h1>
        <nav>
            <ul>
                <li><a href="<?php echo url_for('/staff/index.php'); ?>">Menu</a></li>
            </ul>
        </nav>
    </header>