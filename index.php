<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Webpage</title>

    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <h1><?php echo "Welcome to My  Webpage!"; ?></h1>
    </header>

    <main>
        <p>This is a simple webpage </p>
        
        <?php
        $name = "Debasis Nayak";
        $current_date = date('l, F j, Y');
        ?>

        <p>My name is <?php echo $name; ?> and I created this page on <?php echo $current_date; ?>.</p>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> My Simple Webpage. All rights reserved.</p>
    </footer>

</body>
</html>