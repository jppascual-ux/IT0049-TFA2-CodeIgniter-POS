<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="card">
    <h2>Welcome to the POS System</h2>
    <p>This application now stores its data in a MySQL database. Use the navigation above to view records.</p>
    <ul>
        <li><a href="<?= site_url('customers') ?>">Customer Accounts</a> &ndash; loaded from the <code>customers</code> table via <code>CustomerModel</code></li>
        <li><a href="<?= site_url('users') ?>">User Accounts</a> &ndash; loaded from the <code>users</code> table via <code>UserModel</code></li>
    </ul>
</div>
<?= $this->endSection() ?>
