<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Retribusi Sampah</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">RS</a>
        </div>

        <!-- khusus admin management user -->
        <?php if (in_groups('admin')) : ?>
            <ul class="sidebar-menu">
                <li class="menu-header">Management User</li>
                <!-- User Profile -->
                <li class=""><a class="nav-link" href="<?= base_url('admin'); ?>"><i class="fas fa-users"></i>
                        <span>List User</span></a></li>
            </ul>
        <?php endif; ?>

        <!-- all user -->
        <ul class="sidebar-menu">
            <li class="menu-header">User</li>
            <!-- User Profile -->
            <li class=""><a class="nav-link" href="<?= base_url('user'); ?>"><i class="fas fa-user-tie"></i>
                    <span>My Profile</span></a></li>
            <!-- edit profile -->
            <li class=""><a class="nav-link" href="#"><i class="fas fa-user-edit"></i>
                    <span>Edit Profile</span></a></li>
        </ul>
    </aside>
</div>