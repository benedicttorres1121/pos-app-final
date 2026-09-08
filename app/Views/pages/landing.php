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
        .container { max-width: 800px; margin: 60px auto; padding: 40px; background: #fff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); text-align: center; }
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
    <h1>Welcome to the POS System</h1>
    <p>
        This is the first version of our Point-of-Sale (POS) application,
        built with CodeIgniter 4. Right now it has four pages: this landing
        page, an about page, a Customer Accounts page, and a User Accounts
        page. Customer and user data is currently pulled from a static PHP
        array &mdash; a database will be added in a later module.
    </p>
</div>

</body>
</html>
