<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title) ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f4f6f8; color: #222; }
        nav { background: #1f2937; padding: 14px 24px; }
        nav a { color: #fff; text-decoration: none; margin-right: 20px; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
        .container { max-width: 800px; margin: 60px auto; padding: 40px; background: #fff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); }
        h1 { color: #1f2937; }
        p { color: #555; line-height: 1.6; }
    </style>
</head>
<body>

<nav>
    <a href="<?= site_url('/') ?>">Home</a>
    <a href="<?= site_url('about') ?>">About</a>
    <a href="<?= site_url('customers') ?>">Customer Accounts</a>
    <a href="<?= site_url('users') ?>">User Accounts</a>
</nav>

<div class="container">
    <h1>About This Project</h1>
    <p>
        This application is a Technical Formative Assessment for the Web
        System Technologies course. It demonstrates the Model-View-Controller
        (MVC) pattern using CodeIgniter 4: routes map URLs to controller
        methods, controllers prepare data, and views render the final HTML.
    </p>
    <p>
        At this stage the app does not yet use a database. The Customer
        Accounts and User Accounts pages are powered by static PHP arrays
        defined directly in their controllers, which stand in for database
        records until the data layer is introduced in a later activity.
    </p>
</div>

</body>
</html>
