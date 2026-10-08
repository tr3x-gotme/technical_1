<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h2>Complete Task List</h2>
<p>This page shows every task saved in the database.</p>
<table>
    <tr><th>Title</th><th>Status</th><th>Date</th></tr>
    <?php foreach ($tasks as $task): ?>
        <tr>
            <td><?= esc($task['title']) ?></td>
            <td class="<?= esc($task['status']) ?>"><?= esc(ucfirst($task['status'])) ?></td>
            <td><?= esc($task['task_date']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<?= $this->endSection() ?>
