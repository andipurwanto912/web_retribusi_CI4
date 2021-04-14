    <?= $this->extend('auth/templates/index'); ?>

    <?= $this->section('content'); ?>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-5 offset-xl-4">
                        <div class="login-brand">
                            <img src="<?= base_url(); ?>/assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4><?= lang('Auth.register') ?></h4>
                            </div>

                            <div class="card-body">
                                <?= view('Myth\Auth\Views\_message_block') ?>
                                <form action="<?= route_to('register') ?>" method="post">
                                    <?= csrf_field() ?>
                                    <div class="form-group">
                                        <label for="username"><?= lang('Auth.username') ?></label>
                                        <input id="username" type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="email"><?= lang('Auth.email') ?></label>
                                        <input id="email" type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="password"><?= lang('Auth.password') ?></label>
                                            <input id="password" type="password" class="form-control pwstrength <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" data-indicator="pwindicator" name="password" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
                                            <input id="password2" type="password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            <?= lang('Auth.register') ?>
                                        </button>
                                    </div>
                                    <div class="mt-3 text-muted text-center">
                                        <p>&larr;<?= lang('Auth.alreadyRegistered') ?> <a href="<?= route_to('login') ?>"><?= lang('Auth.signIn') ?></a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; Stisla 2018
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?= $this->endSection(); ?>