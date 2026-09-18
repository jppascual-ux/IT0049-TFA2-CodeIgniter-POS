<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'POS System') ?> | POS System</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: Arial, Helvetica, sans-serif; background: #f4f6f8; color: #222; }
        header { background: #1f3a5f; color: #fff; padding: 14px 24px; display: flex; align-items: center; justify-content: space-between; }
        header h1 { margin: 0; font-size: 20px; }
        nav a { color: #fff; text-decoration: none; margin-left: 18px; font-size: 15px; }
        nav a.active { text-decoration: underline; }
        main { max-width: 960px; margin: 32px auto; padding: 0 16px; }
        h2 { margin-top: 0; }
        table { width: 100%; border-collapse: collapse; background: #fff; box-shadow: 0 1px 3px rgba(0,0,0,.1); }
        th, td { padding: 10px 12px; border-bottom: 1px solid #e3e7eb; text-align: left; }
        th { background: #e9eef4; font-weight: bold; }
        tr:last-child td { border-bottom: none; }
        .card { background: #fff; padding: 20px; box-shadow: 0 1px 3px rgba(0,0,0,.1); margin-bottom: 20px; }
        .muted { color: #777; font-size: 14px; }
        footer { text-align: center; color: #888; font-size: 13px; padding: 24px 0; }
    </style>
</head>
<body>
<header>
    <h1>POS System</h1>
    <nav>
        <a href="<?= site_url('/') ?>" class="<?= uri_string() === '' ? 'active' : '' ?>">Home</a>
        <a href="<?= site_url('customers') ?>" class="<?= uri_string() === 'customers' ? 'active' : '' ?>">Customer Accounts</a>
        <a href="<?= site_url('users') ?>" class="<?= uri_string() === 'users' ? 'active' : '' ?>">User Accounts</a>
    </nav>
</header>
<main>
    <?= $this->renderSection('content') ?>
</main>
<footer>IT0049 &ndash; Web System Technologies &middot; TFA2: From Arrays to a Real Database</footer>
</body>
</html>
