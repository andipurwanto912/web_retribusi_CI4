    <?= $this->extend('templates/index'); ?>
    <?= $this->section('page-content'); ?>

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>List User</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">List User</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>User Tables</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-1">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($users as $user) : ?>
                                                <tr>
                                                    <td class="text-center"><?= $i++; ?> </td>
                                                    <td><?= $user->username; ?></td>
                                                    <td><?= $user->email; ?></td>
                                                    <td><?= $user->name; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('admin/' . $user->userid); ?>" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?= $this->endSection(); ?>