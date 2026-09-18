<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<h2>User Accounts</h2>
<p class="muted">Showing <?= count($users) ?> record(s) from the <code>users</code> table.</p>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Full Name</th>
            <th>Created At</th>
        </tr>
    </thead>
    <tbody>
    <?php if (empty($users)): ?>
        <tr><td colspan="4">No user records found.</td></tr>
    <?php else: ?>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= esc($user['id']) ?></td>
            <td><?= esc($user['username']) ?></td>
            <td><?= esc($user['full_name']) ?></td>
            <td><?= esc(date('M d, Y h:i A', strtotime($user['created_at']))) ?></td>
        </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
</table>
<?= $this->endSection() ?>
