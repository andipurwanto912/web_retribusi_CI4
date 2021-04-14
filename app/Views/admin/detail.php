<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail User</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item actvive"><a href="<?= base_url('admin'); ?>">List User</a></div>
                <div class="breadcrumb-item">Detail User</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="card mb-3" style="max-width: 1024px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= base_url('/assets/img/avatar/' . $user->user_image); ?>" class="card-img img-thumbnail" alt="<?= $user->username; ?>">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <b>
                                        <li class="list-group-item"><?= $user->username; ?></li>
                                    </b>
                                    <?php if ($user->fullname) : ?>
                                        <li class="list-group-item"><?= $user->fullname; ?></li>
                                    <?php endif; ?>
                                    <li class="list-group-item"><?= $user->email; ?></li>
                                    <li class="list-group-item">
                                        <span class="badge badge-<?= ($user->name == 'admin') ? 'success' : 'warning'; ?>"> <?= $user->name; ?>
                                        </span>
                                    </li>
                                    <li class=" list-group-item"><small><a href="<?= base_url('admin') ?>">&larr;back detail</a></small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
<?= $this->endSection(); ?>