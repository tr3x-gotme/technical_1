<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h2>Profile</h2>
<?php if ($user): ?>
<div class="card">
    <p><strong>Username:</strong> <?= esc($user['username']) ?></p>
    <p><strong>Full name:</strong> <?= esc($user['full_name']) ?></p>
    <p><strong>Email:</strong> <?= esc($user['email']) ?></p>
</div>
<?php else: ?>
<div class="card">No profile record was found.</div>
<?php endif; ?>
<?= $this->endSection() ?>
