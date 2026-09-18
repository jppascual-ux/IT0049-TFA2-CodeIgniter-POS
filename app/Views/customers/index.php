<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<h2>Customer Accounts</h2>
<p class="muted">Showing <?= count($customers) ?> record(s) from the <code>customers</code> table.</p>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Created At</th>
        </tr>
    </thead>
    <tbody>
    <?php if (empty($customers)): ?>
        <tr><td colspan="5">No customer records found.</td></tr>
    <?php else: ?>
        <?php foreach ($customers as $customer): ?>
        <tr>
            <td><?= esc($customer['id']) ?></td>
            <td><?= esc($customer['full_name']) ?></td>
            <td><?= esc($customer['email']) ?></td>
            <td><?= esc($customer['phone'] ?? '—') ?></td>
            <td><?= esc(date('M d, Y h:i A', strtotime($customer['created_at']))) ?></td>
        </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
</table>
<?= $this->endSection() ?>
