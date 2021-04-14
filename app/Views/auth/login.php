    <?= $this->extend('auth/templates/index'); ?>

    <?= $this->section('content'); ?>

    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <img src="<?= base_url(); ?>/assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
                            <br /><b>e-Retribusi</b><br />Dinas Lingkungan Hidup</a>
                        </div>
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4><?= lang('Auth.loginTitle') ?></h4>
                            </div>
                            <div class="card-body">
                                <?= view('Myth\Auth\Views\_message_block') ?>

                                <form action="<?= route_to('login') ?>" method="post">
                                    <?= csrf_field() ?>
                                    <?php if ($config->validFields === ['email']) : ?>
                                        <div class="form-group">
                                            <label for="login"><?= lang('Auth.email') ?></label>
                                            <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.login') ?>
                                            </div>
                                        </div>

                                    <?php else : ?>
                                        <div class="form-group">
                                            <label for="login"><?= lang('Auth.emailOrUsername') ?></label>
                                            <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.login') ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <div class="form-group">
                                        <label for="password"><?= lang('Auth.password') ?></label>
                                        <input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
                                        <div class="invalid-feedback">
                                            <?= session('errors.password') ?>
                                        </div>
                                    </div>

                                    <?php if ($config->allowRemembering) : ?>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                                <?= lang('Auth.rememberMe') ?>
                                            </label>
                                        </div>
                                    <?php endif; ?>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.loginAction') ?></button>
                                    </div>

                                    <div class="mt-2 text-muted text-center">
                                        <?php if ($config->activeResetter) : ?>
                                            <p><a href="<?= route_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
                                        <?php endif; ?>
                                        <?php if ($config->allowRegistration) : ?>
                                            <p><a href="<?= route_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a></p>
                                        <?php endif; ?>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; Tugas Akhir Poltek Tegal <?= date('Y'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?= $this->endSection(); ?>