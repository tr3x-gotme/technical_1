<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h2>Welcome, Rex</h2>
<p>Tasks scheduled for today: <?= esc($today) ?></p>

<?php if (empty($tasks)): ?>
    <div class="card">There are no tasks scheduled for today.</div>
<?php else: ?>
    <?php foreach ($tasks as $task): ?>
        <div class="card">
            <h3><?= esc($task['title']) ?></h3>
            <p class="<?= esc($task['status']) ?>">Status: <?= esc(ucfirst($task['status'])) ?></p>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
<?= $this->endSection() ?>
