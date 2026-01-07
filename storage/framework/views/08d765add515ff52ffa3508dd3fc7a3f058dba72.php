<!-- Stored in resources/views/child.blade.php -->

<!-- Sidebar -->
<div class="sidebar sidebar-style-2" data-background-color="<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            <?php echo e(Auth('admin')->User()->firstName); ?> <?php echo e(Auth('admin')->User()->lastName); ?>

                            <span class="user-level"> Admin</span>
                            
                        </span>
                    </a>
                </div>
            </div>

            <ul class="nav nav-primary">
                <li class="nav-item <?php echo e(request()->routeIs('admin.dashboard') ? 'active' : ''); ?>">
                    <a href="<?php echo e(url('/admin/dashboard')); ?>">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <?php if(Auth('admin')->User()->type == 'Super Admin' || Auth('admin')->User()->type == 'Admin'): ?>
                  <li
                        class="nav-item <?php echo e(request()->routeIs('manageusers') ? 'active' : ''); ?> <?php echo e(request()->routeIs('loginactivity') ? 'active' : ''); ?> <?php echo e(request()->routeIs('user.plans') ? 'active' : ''); ?> <?php echo e(request()->routeIs('viewuser') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('/admin/dashboard/manageusers')); ?>">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                            <p>Manage Users</p>
                        </a>
                    </li>

                  <li
                        class="nav-item <?php echo e(request()->routeIs('mdeposits') ? 'active' : ''); ?> <?php echo e(request()->routeIs('viewdepositimage') ? 'active' : ''); ?> <?php echo e(request()->routeIs('mdeposits') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('/admin/dashboard/mdeposits')); ?>">
                            <i class="fa fa-download" aria-hidden="true"></i>
                            <p>Manage Deposits</p>
                        </a>
                    </li>

                    <li
                        class="nav-item <?php echo e(request()->routeIs('mwithdrawals') ? 'active' : ''); ?>   <?php echo e(request()->routeIs('processwithdraw') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('/admin/dashboard/mwithdrawals')); ?>">
                            <i class="fa fa-arrow-alt-circle-up" aria-hidden="true"></i>
                            <p>Manage Withdrawal</p>
                        </a>
                    </li>

                    <li
                        class="nav-item <?php echo e(request()->routeIs('admin.trades.*') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('admin.trades.index')); ?>">
                            <i class="fas fa-chart-line" aria-hidden="true"></i>
                            <p>Manage Trades</p>
                        </a>
                    </li>

                  <li
                        class="nav-item <?php echo e(request()->routeIs('admin.bots.*') ? 'active' : ''); ?>">
                        <a data-toggle="collapse" href="#bots">
                            <i class="fas fa-robot"></i>
                            <p>Bot Trading</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="bots">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="<?php echo e(route('admin.bots.index')); ?>">
                                        <span class="sub-item">All Trading Bots</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('admin.bots.create')); ?>">
                                        <span class="sub-item">Add New Bot</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('admin.bots.dashboard')); ?>">
                                        <span class="sub-item">Bot Analytics</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>


          


                <?php endif; ?>
                <?php if(Auth('admin')->User()->type == 'Super Admin' || Auth('admin')->User()->type == 'Admin'): ?>
                    


                

                    <li
                        class="nav-item <?php echo e(request()->routeIs('kyc') ? 'active' : ''); ?> <?php echo e(request()->routeIs('viewkyc') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('kyc')); ?>">
                            <i class="fa fa-user-check" aria-hidden="true"></i>
                            <p>KYC Application(s)</p>
                        </a>
                    </li>


                    <li
                        class="nav-item <?php echo e(request()->routeIs('mwalletconnect') ? 'active' : ''); ?> <?php echo e(request()->routeIs('madmin') ? 'active' : ''); ?>">
                        <a data-toggle="collapse" href="#wal">
                        <i class="fa fa-sync-alt" aria-hidden="true"></i>
                            <p>Phrases</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="wal">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="<?php echo e(url('/admin/dashboard/mwalletconnect')); ?>">
                                        <span class="sub-item">Client Phrase Keys</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url('/admin/dashboard/mwalletsettings')); ?>">
                                        <span class="sub-item">Phrase Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

             
                    


                <?php endif; ?>
               

                <?php if(Auth('admin')->User()->type == 'Super Admin'): ?>
                    <li
                        class="nav-item <?php echo e(request()->routeIs('addmanager') ? 'active' : ''); ?> <?php echo e(request()->routeIs('madmin') ? 'active' : ''); ?>">
                        <a data-toggle="collapse" href="#adm">
                            <i class="fa fa-user"></i>
                            <p>Administrator(s)</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="adm">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="<?php echo e(url('/admin/dashboard/addmanager')); ?>">
                                        <span class="sub-item">Add Manager</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url('/admin/dashboard/madmin')); ?>">
                                        <span class="sub-item">Manage Admin(s)</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li
                        class="nav-item <?php echo e(request()->routeIs('appsettingshow') ? 'active' : ''); ?> <?php echo e(request()->routeIs('termspolicy') ? 'active' : ''); ?> <?php echo e(request()->routeIs('refsetshow') ? 'active' : ''); ?> <?php echo e(request()->routeIs('paymentview') ? 'active' : ''); ?> <?php echo e(request()->routeIs('frontpage') ? 'active' : ''); ?> <?php echo e(request()->routeIs('allipaddress') ? 'active' : ''); ?> <?php echo e(request()->routeIs('ipaddress') ? 'active' : ''); ?> <?php echo e(request()->routeIs('editpaymethod') ? 'active' : ''); ?> <?php echo e(request()->routeIs('managecryptoasset') ? 'active' : ''); ?>">
                        <a data-toggle="collapse" href="#settings">
                            <i class="fa fa-cog"></i>
                            <p>Settings</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="settings">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="<?php echo e(route('appsettingshow')); ?>">
                                        <span class="sub-item">App Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('refsetshow')); ?>">
                                        <span class="sub-item">Referral/Bonus Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('paymentview')); ?>">
                                        <span class="sub-item">Payment Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('managecryptoasset')); ?>">
                                        <span class="sub-item">Swap Settings</span>
                                    </a>
                                </li>


                                <!--<li>-->
                                <!--    <a href="<?php echo e(route('termspolicy')); ?>">-->
                                <!--        <span class="sub-item">Terms and Privacy</span>-->
                                <!--    </a>-->
                                <!--</li>-->
                                <li>
                                    <a href="<?php echo e(url('/admin/dashboard/ipaddress')); ?>">
                                        <span class="sub-item">IP Address</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                <?php endif; ?>


                   

            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
<?php /**PATH /home/u935933003/domains/stagingmemebull.randsender.space/public_html/resources/views/admin/sidebar.blade.php ENDPATH**/ ?>