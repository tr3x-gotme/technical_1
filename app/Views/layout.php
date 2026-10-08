<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Tasks for Today') ?></title>
    <style>
        body { font-family: Arial, sans-serif; background:#f4f6f8; color:#222; margin:0; }
        header { background:#254b70; color:white; padding:22px 8%; }
        nav a { color:white; margin-right:18px; text-decoration:none; }
        main { max-width:900px; margin:30px auto; padding:0 20px; }
        .card { background:white; padding:22px; margin:15px 0; border-radius:8px; box-shadow:0 1px 4px #ccc; }
        table { width:100%; border-collapse:collapse; background:white; }
        th, td { text-align:left; padding:12px; border-bottom:1px solid #ddd; }
        th { background:#e8eef5; }
        .completed { color:#228044; } .pending { color:#b36b00; }
        footer { text-align:center; color:#666; padding:25px; }
    </style>
</head>
<body>
<header>
    <h1>Tasks for Today</h1>
    <nav>
        <a href="<?= base_url('/') ?>">Today</a>
        <a href="<?= base_url('tasks') ?>">Task List</a>
        <a href="<?= base_url('profile') ?>">Profile</a>
        <a href="<?= base_url('about') ?>">About</a>
    </nav>
</header>
<main><?= $this->renderSection('content') ?></main>
<footer>Tasks for Today Management System</footer>
</body>
</html>
