
<?php echo 'yes';die;?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Analytics</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/tabler-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/flag-icons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('assets/vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/node-waves/node-waves.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/typeahead-js/typeahead.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/swiper/swiper.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/css/pages/cards-advance.css')}}" />

    <!-- Helpers -->
    <script src="{{asset('assets/vendor/js/helpers.js')}}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{asset('assets/vendor/js/template-customizer.js')}}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('assets/js/config.js')}}"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z" fill="#7367F0" />
                                <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
                                <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z" fill="#7367F0" />
                            </svg>
                        </span>
                        <span class="app-brand-text demo menu-text fw-bold">Vuexy</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
                        <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboards -->
                    <li class="menu-item active open">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons ti ti-smart-home"></i>
                            <div data-i18n="Dashboards">Dashboards</div>
                            <div class="badge bg-primary rounded-pill ms-auto">5</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item active">
                                <a href="index.html" class="menu-link">
                                    <div data-i18n="Analytics">Analytics</div>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="app-academy-dashboard.html" class="menu-link">
                                    <div data-i18n="Academy">Academy</div>
                                </a>
                            </li>
                        </ul>
                    </li>



                    <!-- Apps & Pages -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text" data-i18n="Apps & Pages">Apps &amp; Pages</span>
                    </li>
                    <li class="menu-item">
                        <a href="app-email.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-mail"></i>
                            <div data-i18n="Email">Email</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-chat.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-messages"></i>
                            <div data-i18n="Chat">Chat</div>
                        </a>
                    </li>
                    <!-- <li class="menu-item">
                <a href="app-calendar.html" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-calendar"></i>
                    <div data-i18n="Calendar">Calendar</div>
                </a>
                </li> -->
                    <li class="menu-item">
                        <a href="app-kanban.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-layout-kanban"></i>
                            <div data-i18n="Kanban">Kanban</div>
                        </a>
                    </li>

                    <!-- Academy menu start -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons ti ti-book"></i>
                            <div data-i18n="Academy">Academy</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="app-academy-dashboard.html" class="menu-link">
                                    <div data-i18n="Dashboard">Dashboard</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-academy-course.html" class="menu-link">
                                    <div data-i18n="My Course">My Course</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-academy-course-details.html" class="menu-link">
                                    <div data-i18n="Course Details">Course Details</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Academy menu end -->

                    <!-- Invoices -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons ti ti-file-dollar"></i>
                            <div data-i18n="Invoice">Invoice</div>
                            <div class="badge bg-danger rounded-pill ms-auto">4</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="app-invoice-list.html" class="menu-link">
                                    <div data-i18n="List">List</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-invoice-preview.html" class="menu-link">
                                    <div data-i18n="Preview">Preview</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-invoice-edit.html" class="menu-link">
                                    <div data-i18n="Edit">Edit</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-invoice-add.html" class="menu-link">
                                    <div data-i18n="Add">Add</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Users -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons ti ti-users"></i>
                            <div data-i18n="Users">Users</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="app-user-list.html" class="menu-link">
                                    <div data-i18n="List">List</div>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="View">View</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="app-user-view-account.html" class="menu-link">
                                            <div data-i18n="Account">Account</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-user-view-security.html" class="menu-link">
                                            <div data-i18n="Security">Security</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-user-view-billing.html" class="menu-link">
                                            <div data-i18n="Billing & Plans">Billing & Plans</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-user-view-notifications.html" class="menu-link">
                                            <div data-i18n="Notifications">Notifications</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-user-view-connections.html" class="menu-link">
                                            <div data-i18n="Connections">Connections</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <!-- Roles -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons ti ti-settings"></i>
                            <div data-i18n="Roles & Permissions">Roles & Permissions</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="app-access-roles.html" class="menu-link">
                                    <div data-i18n="Roles">Roles</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-access-permission.html" class="menu-link">
                                    <div data-i18n="Permission">Permission</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons ti ti-file"></i>
                            <div data-i18n="Pages">Pages</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="User Profile">User Profile</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="pages-profile-user.html" class="menu-link">
                                            <div data-i18n="Profile">Profile</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Account Settings">Account Settings</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="pages-account-settings-account.html" class="menu-link">
                                            <div data-i18n="Account">Account</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons ti ti-lock"></i>
                            <div data-i18n="Authentications">Authentications</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Login">Login</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="auth-login-basic.html" class="menu-link" target="_blank">
                                            <div data-i18n="Basic">Basic</div>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Register">Register</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="auth-register-basic.html" class="menu-link" target="_blank">
                                            <div data-i18n="Basic">Basic</div>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Verify Email">Verify Email</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="auth-verify-email-basic.html" class="menu-link" target="_blank">
                                            <div data-i18n="Basic">Basic</div>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Reset Password">Reset Password</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="auth-reset-password-basic.html" class="menu-link" target="_blank">
                                            <div data-i18n="Basic">Basic</div>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Forgot Password">Forgot Password</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                                            <div data-i18n="Basic">Basic</div>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                        </ul>
                    </li>

                    <!-- Misc -->

                    <li class="menu-item">
                        <a href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/" target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-file-description"></i>
                            <div data-i18n="Documentation">Documentation</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="ti ti-menu-2 ti-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item navbar-search-wrapper mb-0">
                                <a class="nav-item nav-link search-toggler d-flex align-items-center px-0" href="javascript:void(0);">
                                    <i class="ti ti-search ti-md me-2"></i>
                                    <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                                </a>
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Language -->
                            <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <i class="ti ti-language rounded-circle ti-md"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-language="en" data-text-direction="ltr">
                                            <span class="align-middle">English</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-language="fr" data-text-direction="ltr">
                                            <span class="align-middle">French</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-language="ar" data-text-direction="rtl">
                                            <span class="align-middle">Arabic</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-language="de" data-text-direction="ltr">
                                            <span class="align-middle">German</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ Language -->

                            <!-- Style Switcher -->
                            <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <i class="ti ti-md"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                                            <span class="align-middle"><i class="ti ti-sun me-2"></i>Light</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                                            <span class="align-middle"><i class="ti ti-moon me-2"></i>Dark</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                                            <span class="align-middle"><i class="ti ti-device-desktop me-2"></i>System</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- / Style Switcher-->



                            <!-- Notification -->
                            <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    <i class="ti ti-bell ti-md"></i>
                                    <span class="badge bg-danger rounded-pill badge-notifications">5</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end py-0">
                                    <li class="dropdown-menu-header border-bottom">
                                        <div class="dropdown-header d-flex align-items-center py-3">
                                            <h5 class="text-body mb-0 me-auto">Notification</h5>
                                            <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i class="ti ti-mail-opened fs-4"></i></a>
                                        </div>
                                    </li>
                                    <li class="dropdown-notifications-list scrollable-container">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="../../assets/img/avatars/1.png" alt class="h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                                                        <p class="mb-0">Won the monthly best seller gold badge</p>
                                                        <small class="text-muted">1h ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">Charles Franklin</h6>
                                                        <p class="mb-0">Accepted your connection</p>
                                                        <small class="text-muted">12hr ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="../../assets/img/avatars/2.png" alt class="h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">New Message ✉️</h6>
                                                        <p class="mb-0">You have new message from Natalie</p>
                                                        <small class="text-muted">1h ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <span class="avatar-initial rounded-circle bg-label-success"><i class="ti ti-shopping-cart"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">Whoo! You have new order 🛒</h6>
                                                        <p class="mb-0">ACME Inc. made new order $1,154</p>
                                                        <small class="text-muted">1 day ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="../../assets/img/avatars/9.png" alt class="h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">Application has been approved 🚀</h6>
                                                        <p class="mb-0">Your ABC project application has been approved.</p>
                                                        <small class="text-muted">2 days ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <span class="avatar-initial rounded-circle bg-label-success"><i class="ti ti-chart-pie"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">Monthly report is generated</h6>
                                                        <p class="mb-0">July monthly financial report is generated</p>
                                                        <small class="text-muted">3 days ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="../../assets/img/avatars/5.png" alt class="h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">Send connection request</h6>
                                                        <p class="mb-0">Peter sent you connection request</p>
                                                        <small class="text-muted">4 days ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="../../assets/img/avatars/6.png" alt class="h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">New message from Jane</h6>
                                                        <p class="mb-0">Your have new message from Jane</p>
                                                        <small class="text-muted">5 days ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <span class="avatar-initial rounded-circle bg-label-warning"><i class="ti ti-alert-triangle"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">CPU is running high</h6>
                                                        <p class="mb-0">CPU Utilization Percent is currently at 88.63%,</p>
                                                        <small class="text-muted">5 days ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-menu-footer border-top">
                                        <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center text-primary p-2 h-px-40 mb-1 align-items-center">
                                            View all notifications
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ Notification -->

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="../../assets/img/avatars/1.png" alt class="h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="pages-account-settings-account.html">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../../assets/img/avatars/1.png" alt class="h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-medium d-block">John Doe</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-profile-user.html">
                                            <i class="ti ti-user-check me-2 ti-sm"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-account-settings-account.html">
                                            <i class="ti ti-settings me-2 ti-sm"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-account-settings-billing.html">
                                            <span class="d-flex align-items-center align-middle">
                                                <i class="flex-shrink-0 ti ti-credit-card me-2 ti-sm"></i>
                                                <span class="flex-grow-1 align-middle">Billing</span>
                                                <span class="flex-shrink-0 badge badge-center rounded-pill bg-label-danger w-px-20 h-px-20">2</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-faq.html">
                                            <i class="ti ti-help me-2 ti-sm"></i>
                                            <span class="align-middle">FAQ</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-pricing.html">
                                            <i class="ti ti-currency-dollar me-2 ti-sm"></i>
                                            <span class="align-middle">Pricing</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                                            <i class="ti ti-logout me-2 ti-sm"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>

                    <!-- Search Small Screens -->
                    <div class="navbar-search-wrapper search-input-wrapper d-none">
                        <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search..." />
                        <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <!-- Website Analytics -->
                            <div class="col-lg-6 mb-4">
                                <div class="swiper-container swiper-container-horizontal swiper swiper-card-advance-bg" id="swiper-with-pagination-cards">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5 class="text-white mb-0 mt-2">Website Analytics</h5>
                                                    <small>Total 28.5% Conversion Rate</small>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                                                        <h6 class="text-white mt-0 mt-md-3 mb-3">Traffic</h6>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-flex mb-4 align-items-center">
                                                                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">28%</p>
                                                                        <p class="mb-0">Sessions</p>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-2">
                                                                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">1.2k</p>
                                                                        <p class="mb-0">Leads</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-6">
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-flex mb-4 align-items-center">
                                                                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">3.1k</p>
                                                                        <p class="mb-0">Page Views</p>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-2">
                                                                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">12%</p>
                                                                        <p class="mb-0">Conversions</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                                                        <img src="../../assets/img/illustrations/card-website-analytics-1.png" alt="Website Analytics" width="170" class="card-website-analytics-img" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5 class="text-white mb-0 mt-2">Website Analytics</h5>
                                                    <small>Total 28.5% Conversion Rate</small>
                                                </div>
                                                <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                                                    <h6 class="text-white mt-0 mt-md-3 mb-3">Spending</h6>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="d-flex mb-4 align-items-center">
                                                                    <p class="mb-0 fw-medium me-2 website-analytics-text-bg">12h</p>
                                                                    <p class="mb-0">Spend</p>
                                                                </li>
                                                                <li class="d-flex align-items-center mb-2">
                                                                    <p class="mb-0 fw-medium me-2 website-analytics-text-bg">127</p>
                                                                    <p class="mb-0">Order</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-6">
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="d-flex mb-4 align-items-center">
                                                                    <p class="mb-0 fw-medium me-2 website-analytics-text-bg">18</p>
                                                                    <p class="mb-0">Order Size</p>
                                                                </li>
                                                                <li class="d-flex align-items-center mb-2">
                                                                    <p class="mb-0 fw-medium me-2 website-analytics-text-bg">2.3k</p>
                                                                    <p class="mb-0">Items</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                                                    <img src="../../assets/img/illustrations/card-website-analytics-2.png" alt="Website Analytics" width="170" class="card-website-analytics-img" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5 class="text-white mb-0 mt-2">Website Analytics</h5>
                                                    <small>Total 28.5% Conversion Rate</small>
                                                </div>
                                                <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                                                    <h6 class="text-white mt-0 mt-md-3 mb-3">Revenue Sources</h6>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="d-flex mb-4 align-items-center">
                                                                    <p class="mb-0 fw-medium me-2 website-analytics-text-bg">268</p>
                                                                    <p class="mb-0">Direct</p>
                                                                </li>
                                                                <li class="d-flex align-items-center mb-2">
                                                                    <p class="mb-0 fw-medium me-2 website-analytics-text-bg">62</p>
                                                                    <p class="mb-0">Referral</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-6">
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="d-flex mb-4 align-items-center">
                                                                    <p class="mb-0 fw-medium me-2 website-analytics-text-bg">890</p>
                                                                    <p class="mb-0">Organic</p>
                                                                </li>
                                                                <li class="d-flex align-items-center mb-2">
                                                                    <p class="mb-0 fw-medium me-2 website-analytics-text-bg">1.2k</p>
                                                                    <p class="mb-0">Campaign</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                                                    <img src="../../assets/img/illustrations/card-website-analytics-3.png" alt="Website Analytics" width="170" class="card-website-analytics-img" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                            <!--/ Website Analytics -->

                            <!-- Sales Overview -->
                            <div class="col-lg-3 col-sm-6 mb-4">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between">
                                            <small class="d-block mb-1 text-muted">Sales Overview</small>
                                            <p class="card-text text-success">+18.2%</p>
                                        </div>
                                        <h4 class="card-title mb-1">$42.5k</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="d-flex gap-2 align-items-center mb-2">
                                                    <span class="badge bg-label-info p-1 rounded"><i class="ti ti-shopping-cart ti-xs"></i></span>
                                                    <p class="mb-0">Order</p>
                                                </div>
                                                <h5 class="mb-0 pt-1 text-nowrap">62.2%</h5>
                                                <small class="text-muted">6,440</small>
                                            </div>
                                            <div class="col-4">
                                                <div class="divider divider-vertical">
                                                    <div class="divider-text">
                                                        <span class="badge-divider-bg bg-label-secondary">VS</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4 text-end">
                                                <div class="d-flex gap-2 justify-content-end align-items-center mb-2">
                                                    <p class="mb-0">Visits</p>
                                                    <span class="badge bg-label-primary p-1 rounded"><i class="ti ti-link ti-xs"></i></span>
                                                </div>
                                                <h5 class="mb-0 pt-1 text-nowrap ms-lg-n3 ms-xl-0">25.5%</h5>
                                                <small class="text-muted">12,749</small>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-4">
                                            <div class="progress w-100" style="height: 8px">
                                                <div class="progress-bar bg-info" style="width: 70%" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Sales Overview -->

                            <!-- Revenue Generated -->
                            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="card-icon">
                                            <span class="badge bg-label-success rounded-pill p-2">
                                                <i class="ti ti-credit-card ti-sm"></i>
                                            </span>
                                        </div>
                                        <h5 class="card-title mb-0 mt-2">97.5k</h5>
                                        <small>Revenue Generated</small>
                                    </div>
                                    <div id="revenueGenerated"></div>
                                </div>
                            </div>
                            <!--/ Revenue Generated -->

                            <!-- Earning Reports -->
                            <div class="col-lg-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-header pb-0 d-flex justify-content-between mb-lg-n4">
                                        <div class="card-title mb-0">
                                            <h5 class="mb-0">Earning Reports</h5>
                                            <small class="text-muted">Weekly Earnings Overview</small>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="earningReportsId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsId">
                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 col-md-4 d-flex flex-column align-self-end">
                                                <div class="d-flex gap-2 align-items-center mb-2 pb-1 flex-wrap">
                                                    <h1 class="mb-0">$468</h1>
                                                    <div class="badge rounded bg-label-success">+4.2%</div>
                                                </div>
                                                <small>You informed of this week compared to last week</small>
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <div id="weeklyEarningReports"></div>
                                            </div>
                                        </div>
                                        <div class="border rounded p-3 mt-4">
                                            <div class="row gap-4 gap-sm-0">
                                                <div class="col-12 col-sm-4">
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="badge rounded bg-label-primary p-1">
                                                            <i class="ti ti-currency-dollar ti-sm"></i>
                                                        </div>
                                                        <h6 class="mb-0">Earnings</h6>
                                                    </div>
                                                    <h4 class="my-2 pt-1">$545.69</h4>
                                                    <div class="progress w-75" style="height: 4px">
                                                        <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="badge rounded bg-label-info p-1"><i class="ti ti-chart-pie-2 ti-sm"></i></div>
                                                        <h6 class="mb-0">Profit</h6>
                                                    </div>
                                                    <h4 class="my-2 pt-1">$256.34</h4>
                                                    <div class="progress w-75" style="height: 4px">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="badge rounded bg-label-danger p-1">
                                                            <i class="ti ti-brand-paypal ti-sm"></i>
                                                        </div>
                                                        <h6 class="mb-0">Expense</h6>
                                                    </div>
                                                    <h4 class="my-2 pt-1">$74.19</h4>
                                                    <div class="progress w-75" style="height: 4px">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Earning Reports -->

                            <!-- Support Tracker -->
                            <div class="col-md-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-header d-flex justify-content-between pb-0">
                                        <div class="card-title mb-0">
                                            <h5 class="mb-0">Support Tracker</h5>
                                            <small class="text-muted">Last 7 Days</small>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="supportTrackerMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="supportTrackerMenu">
                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 col-sm-4 col-md-12 col-lg-4">
                                                <div class="mt-lg-4 mt-lg-2 mb-lg-4 mb-2 pt-1">
                                                    <h1 class="mb-0">164</h1>
                                                    <p class="mb-0">Total Tickets</p>
                                                </div>
                                                <ul class="p-0 m-0">
                                                    <li class="d-flex gap-3 align-items-center mb-lg-3 pt-2 pb-1">
                                                        <div class="badge rounded bg-label-primary p-1"><i class="ti ti-ticket ti-sm"></i></div>
                                                        <div>
                                                            <h6 class="mb-0 text-nowrap">New Tickets</h6>
                                                            <small class="text-muted">142</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex gap-3 align-items-center mb-lg-3 pb-1">
                                                        <div class="badge rounded bg-label-info p-1">
                                                            <i class="ti ti-circle-check ti-sm"></i>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 text-nowrap">Open Tickets</h6>
                                                            <small class="text-muted">28</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex gap-3 align-items-center pb-1">
                                                        <div class="badge rounded bg-label-warning p-1"><i class="ti ti-clock ti-sm"></i></div>
                                                        <div>
                                                            <h6 class="mb-0 text-nowrap">Response Time</h6>
                                                            <small class="text-muted">1 Day</small>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-sm-8 col-md-12 col-lg-8">
                                                <div id="supportTracker"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Support Tracker -->

                            <!-- Sales By Country -->
                            <div class="col-xl-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="card-title mb-0">
                                            <h5 class="m-0 me-2">Sales by Countries</h5>
                                            <small class="text-muted">Monthly Sales Overview</small>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="salesByCountry" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesByCountry">
                                                <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="p-0 m-0">
                                            <li class="d-flex align-items-center mb-4">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <i class="fis fi fi-us rounded-circle fs-1"></i>
                                                </div>
                                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="mb-0 me-1">$8,567k</h6>
                                                        </div>
                                                        <small class="text-muted">United states</small>
                                                    </div>
                                                    <div class="user-progress">
                                                        <p class="text-success fw-medium mb-0 d-flex justify-content-center gap-1">
                                                            <i class="ti ti-chevron-up"></i>
                                                            25.8%
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center mb-4">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <i class="fis fi fi-br rounded-circle fs-1"></i>
                                                </div>
                                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="mb-0 me-1">$2,415k</h6>
                                                        </div>
                                                        <small class="text-muted">Brazil</small>
                                                    </div>
                                                    <div class="user-progress">
                                                        <p class="text-danger fw-medium mb-0 d-flex justify-content-center gap-1">
                                                            <i class="ti ti-chevron-down"></i>
                                                            6.2%
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center mb-4">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <i class="fis fi fi-in rounded-circle fs-1"></i>
                                                </div>
                                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="mb-0 me-1">$865k</h6>
                                                        </div>
                                                        <small class="text-muted">India</small>
                                                    </div>
                                                    <div class="user-progress">
                                                        <p class="text-success fw-medium mb-0 d-flex align-items-center gap-1">
                                                            <i class="ti ti-chevron-up"></i>
                                                            12.4%
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center mb-4">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <i class="fis fi fi-au rounded-circle fs-1"></i>
                                                </div>
                                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="mb-0 me-1">$745k</h6>
                                                        </div>
                                                        <small class="text-muted">Australia</small>
                                                    </div>
                                                    <div class="user-progress">
                                                        <p class="text-danger fw-medium mb-0 d-flex justify-content-center gap-1">
                                                            <i class="ti ti-chevron-down"></i>
                                                            11.9%
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center mb-4">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <i class="fis fi fi-us rounded-circle fs-1"></i>
                                                </div>
                                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="mb-0 me-1">$45</h6>
                                                        </div>
                                                        <small class="text-muted">France</small>
                                                    </div>
                                                    <div class="user-progress">
                                                        <p class="text-success fw-medium mb-0 d-flex justify-content-center gap-1">
                                                            <i class="ti ti-chevron-up"></i>
                                                            16.2%
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <i class="fis fi fi-cn rounded-circle fs-1"></i>
                                                </div>
                                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="mb-0 me-1">$12k</h6>
                                                        </div>
                                                        <small class="text-muted">China</small>
                                                    </div>
                                                    <div class="user-progress">
                                                        <p class="text-success fw-medium mb-0 d-flex justify-content-center gap-1">
                                                            <i class="ti ti-chevron-up"></i>
                                                            14.8%
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/ Sales By Country -->

                            <!-- Total Earning -->
                            <div class="col-12 col-xl-4 mb-4 col-md-6">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between pb-1">
                                        <h5 class="mb-0 card-title">Total Earning</h5>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="totalEarning" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalEarning">
                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <h1 class="mb-0 me-2">87%</h1>
                                            <i class="ti ti-chevron-up text-success me-1"></i>
                                            <p class="text-success mb-0">25.8%</p>
                                        </div>
                                        <div id="totalEarningChart"></div>
                                        <div class="d-flex align-items-start my-4">
                                            <div class="badge rounded bg-label-primary p-2 me-3 rounded">
                                                <i class="ti ti-currency-dollar ti-sm"></i>
                                            </div>
                                            <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
                                                <div class="me-2">
                                                    <h6 class="mb-0">Total Sales</h6>
                                                    <small class="text-muted">Refund</small>
                                                </div>
                                                <p class="mb-0 text-success">+$98</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start">
                                            <div class="badge rounded bg-label-secondary p-2 me-3 rounded">
                                                <i class="ti ti-brand-paypal ti-sm"></i>
                                            </div>
                                            <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
                                                <div class="me-2">
                                                    <h6 class="mb-0">Total Revenue</h6>
                                                    <small class="text-muted">Client Payment</small>
                                                </div>
                                                <p class="mb-0 text-success">+$126</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Total Earning -->

                            <!-- Monthly Campaign State -->
                            <div class="col-xl-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="card-title mb-0">
                                            <h5 class="mb-0">Monthly Campaign State</h5>
                                            <small class="text-muted">8.52k Social Visiters</small>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="MonthlyCampaign" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="MonthlyCampaign">
                                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                                <a class="dropdown-item" href="javascript:void(0);">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="p-0 m-0">
                                            <li class="mb-4 pb-1 d-flex justify-content-between align-items-center">
                                                <div class="badge bg-label-success rounded p-2"><i class="ti ti-mail ti-sm"></i></div>
                                                <div class="d-flex justify-content-between w-100 flex-wrap">
                                                    <h6 class="mb-0 ms-3">Emails</h6>
                                                    <div class="d-flex">
                                                        <p class="mb-0 fw-medium">12,346</p>
                                                        <p class="ms-3 text-success mb-0">0.3%</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-4 pb-1 d-flex justify-content-between align-items-center">
                                                <div class="badge bg-label-info rounded p-2"><i class="ti ti-link ti-sm"></i></div>
                                                <div class="d-flex justify-content-between w-100 flex-wrap">
                                                    <h6 class="mb-0 ms-3">Opened</h6>
                                                    <div class="d-flex">
                                                        <p class="mb-0 fw-medium">8,734</p>
                                                        <p class="ms-3 text-success mb-0">2.1%</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-4 pb-1 d-flex justify-content-between align-items-center">
                                                <div class="badge bg-label-warning rounded p-2"><i class="ti ti-click ti-sm"></i></div>
                                                <div class="d-flex justify-content-between w-100 flex-wrap">
                                                    <h6 class="mb-0 ms-3">Clicked</h6>
                                                    <div class="d-flex">
                                                        <p class="mb-0 fw-medium">967</p>
                                                        <p class="ms-3 text-success mb-0">1.4%</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-4 pb-1 d-flex justify-content-between align-items-center">
                                                <div class="badge bg-label-primary rounded p-2"><i class="ti ti-users ti-sm"></i></div>
                                                <div class="d-flex justify-content-between w-100 flex-wrap">
                                                    <h6 class="mb-0 ms-3">Subscribe</h6>
                                                    <div class="d-flex">
                                                        <p class="mb-0 fw-medium">345</p>
                                                        <p class="ms-3 text-success mb-0">8.5k</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-4 pb-1 d-flex justify-content-between align-items-center">
                                                <div class="badge bg-label-secondary rounded p-2">
                                                    <i class="ti ti-alert-triangle ti-sm text-body"></i>
                                                </div>
                                                <div class="d-flex justify-content-between w-100 flex-wrap">
                                                    <h6 class="mb-0 ms-3">Complaints</h6>
                                                    <div class="d-flex">
                                                        <p class="mb-0 fw-medium">10</p>
                                                        <p class="ms-3 text-success mb-0">1.5%</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center">
                                                <div class="badge bg-label-danger rounded p-2"><i class="ti ti-ban ti-sm"></i></div>
                                                <div class="d-flex justify-content-between w-100 flex-wrap">
                                                    <h6 class="mb-0 ms-3">Unsubscribe</h6>
                                                    <div class="d-flex">
                                                        <p class="mb-0 fw-medium">86</p>
                                                        <p class="ms-3 text-success mb-0">0.8%</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/ Monthly Campaign State -->

                            <!-- Source Visit -->
                            <div class="col-xl-4 col-md-6 order-2 order-lg-1 mb-4">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="card-title mb-0">
                                            <h5 class="mb-0">Source Visits</h5>
                                            <small class="text-muted">38.4k Visitors</small>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="sourceVisits" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sourceVisits">
                                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                                <a class="dropdown-item" href="javascript:void(0);">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-3 pb-1">
                                                <div class="d-flex align-items-start">
                                                    <div class="badge bg-label-secondary p-2 me-3 rounded">
                                                        <i class="ti ti-shadow ti-sm"></i>
                                                    </div>
                                                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                                                        <div class="me-2">
                                                            <h6 class="mb-0">Direct Source</h6>
                                                            <small class="text-muted">Direct link click</small>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <p class="mb-0">1.2k</p>
                                                            <div class="ms-3 badge bg-label-success">+4.2%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-3 pb-1">
                                                <div class="d-flex align-items-start">
                                                    <div class="badge bg-label-secondary p-2 me-3 rounded">
                                                        <i class="ti ti-globe ti-sm"></i>
                                                    </div>
                                                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                                                        <div class="me-2">
                                                            <h6 class="mb-0">Social Network</h6>
                                                            <small class="text-muted">Social Channels</small>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <p class="mb-0">31.5k</p>
                                                            <div class="ms-3 badge bg-label-success">+8.2%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-3 pb-1">
                                                <div class="d-flex align-items-start">
                                                    <div class="badge bg-label-secondary p-2 me-3 rounded">
                                                        <i class="ti ti-mail ti-sm"></i>
                                                    </div>
                                                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                                                        <div class="me-2">
                                                            <h6 class="mb-0">Email Newsletter</h6>
                                                            <small class="text-muted">Mail Campaigns</small>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <p class="mb-0">893</p>
                                                            <div class="ms-3 badge bg-label-success">+2.4%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-3 pb-1">
                                                <div class="d-flex align-items-start">
                                                    <div class="badge bg-label-secondary p-2 me-3 rounded">
                                                        <i class="ti ti-external-link ti-sm"></i>
                                                    </div>
                                                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                                                        <div class="me-2">
                                                            <h6 class="mb-0">Referrals</h6>
                                                            <small class="text-muted">Impact Radius Visits</small>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <p class="mb-0">342</p>
                                                            <div class="ms-3 badge bg-label-danger">-0.4%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-3 pb-1">
                                                <div class="d-flex align-items-start">
                                                    <div class="badge bg-label-secondary p-2 me-3 rounded">
                                                        <i class="ti ti-discount-2 ti-sm"></i>
                                                    </div>
                                                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                                                        <div class="me-2">
                                                            <h6 class="mb-0">ADVT</h6>
                                                            <small class="text-muted">Google ADVT</small>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <p class="mb-0">2.15k</p>
                                                            <div class="ms-3 badge bg-label-success">+9.1%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-2">
                                                <div class="d-flex align-items-start">
                                                    <div class="badge bg-label-secondary p-2 me-3 rounded">
                                                        <i class="ti ti-star ti-sm"></i>
                                                    </div>
                                                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                                                        <div class="me-2">
                                                            <h6 class="mb-0">Other</h6>
                                                            <small class="text-muted">Many Sources</small>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <p class="mb-0">12.5k</p>
                                                            <div class="ms-3 badge bg-label-success">+6.2%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/ Source Visit -->

                            <!-- Projects table -->
                            <div class="col-12 col-xl-8 col-sm-12 order-1 order-lg-2 mb-4 mb-lg-0">
                                <div class="card">
                                    <div class="card-datatable table-responsive">
                                        <table class="datatables-projects table border-top">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Name</th>
                                                    <th>Leader</th>
                                                    <th>Team</th>
                                                    <th class="w-px-200">Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--/ Projects table -->
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl">
                            <div class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                                <div>
                                    ©
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>
                                    , made with ❤️ by
                                    <a href="https://pixinvent.com" target="_blank" class="footer-link text-primary fw-medium">Pixinvent</a>
                                </div>
                                <div class="d-none d-lg-inline-block">
                                    <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank">License</a>
                                    <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4">More Themes</a>

                                    <a href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>

                                    <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/node-waves/node-waves.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/hammer/hammer.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/i18n/i18n.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
    <script src="{{asset('assets/vendor/js/menu.js')}}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/swiper/swiper.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
</body>

</html>