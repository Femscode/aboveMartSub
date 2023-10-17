<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from seantheme.com/color-admin/admin/html/form_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 08:24:52 GMT -->

<head>
    <meta charset="utf-8" />
    <title>AboveMarts Bulk SMS</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content name="description" />
    <meta content name="author" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/css/vendor.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/default/app.min.css')}}" rel="stylesheet" />
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('bulkasset/vendor/bootstrap/css/bootstrap.min.css')}}"> --}}
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css"
        integrity="sha256-VJuwjrIWHWsPSEvQV4DiPfnZi7axOaiWwKfXaJnR5tA=" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>

    @yield('header')

</head>

<body>

    <div id="loader" class="app-loader">
        <span class="spinner"></span>
    </div>


    <div id="app" class="app app-header-fixed app-sidebar-fixed">

        <div id="header" class="app-header">

            <div class="navbar-header">
                <a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> <b class="me-3px">Color</b>
                    Admin</a>
                <button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>


            <div class="navbar-nav">
                <div class="navbar-item navbar-form">
                    <form action method="POST" name="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter keyword" />
                            <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="navbar-item dropdown">
                    <a href="#" data-bs-toggle="dropdown" class="navbar-link dropdown-toggle icon">
                        <i class="fa fa-bell"></i>
                        <span class="badge">5</span>
                    </a>
                    <div class="dropdown-menu media-list dropdown-menu-end">
                        <div class="dropdown-header">NOTIFICATIONS (5)</div>
                        <a href="javascript:;" class="dropdown-item media">
                            <div class="media-left">
                                <i class="fa fa-bug media-object bg-gray-500"></i>
                            </div>
                            <div class="media-body">
                                <h6 class="media-heading">Server Error Reports <i
                                        class="fa fa-exclamation-circle text-danger"></i></h6>
                                <div class="text-muted fs-10px">3 minutes ago</div>
                            </div>
                        </a>
                        <a href="javascript:;" class="dropdown-item media">
                            <div class="media-left">
                                <img src="assets/img/user/user-1.jpg" class="media-object" alt />
                                <i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
                            </div>
                            <div class="media-body">
                                <h6 class="media-heading">John Smith</h6>
                                <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                <div class="text-muted fs-10px">25 minutes ago</div>
                            </div>
                        </a>
                        <a href="javascript:;" class="dropdown-item media">
                            <div class="media-left">
                                <img src="assets/img/user/user-2.jpg" class="media-object" alt />
                                <i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
                            </div>
                            <div class="media-body">
                                <h6 class="media-heading">Olivia</h6>
                                <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                <div class="text-muted fs-10px">35 minutes ago</div>
                            </div>
                        </a>
                        <a href="javascript:;" class="dropdown-item media">
                            <div class="media-left">
                                <i class="fa fa-plus media-object bg-gray-500"></i>
                            </div>
                            <div class="media-body">
                                <h6 class="media-heading"> New User Registered</h6>
                                <div class="text-muted fs-10px">1 hour ago</div>
                            </div>
                        </a>
                        <a href="javascript:;" class="dropdown-item media">
                            <div class="media-left">
                                <i class="fa fa-envelope media-object bg-gray-500"></i>
                                <i class="fab fa-google text-warning media-object-icon fs-14px"></i>
                            </div>
                            <div class="media-body">
                                <h6 class="media-heading"> New Email From John</h6>
                                <div class="text-muted fs-10px">2 hour ago</div>
                            </div>
                        </a>
                        <div class="dropdown-footer text-center">
                            <a href="javascript:;" class="text-decoration-none">View more</a>
                        </div>
                    </div>
                </div>
                <div class="navbar-item navbar-user dropdown">
                    <a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
                        <img src="assets/img/user/user-13.jpg" alt />
                        <span>
                            <span class="d-none d-md-inline">Adam Schwartz</span>
                            <b class="caret"></b>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end me-1">
                        <a href="extra_profile.html" class="dropdown-item">Edit Profile</a>
                        <a href="email_inbox.html" class="dropdown-item d-flex align-items-center">
                            Inbox
                            <span class="badge bg-danger rounded-pill ms-auto pb-4px">2</span>
                        </a>
                        <a href="calendar.html" class="dropdown-item">Calendar</a>
                        <a href="extra_settings_page.html" class="dropdown-item">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a href="login.html" class="dropdown-item">Log Out</a>
                    </div>
                </div>
            </div>

        </div>


        <div id="sidebar" class="app-sidebar" data-bs-theme="dark">

            <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">

                <div class="menu">
                    <div class="menu-profile">
                        <a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile"
                            data-target="#appSidebarProfileMenu">
                            <div class="menu-profile-cover with-shadow"></div>
                            <div class="menu-profile-image">
                                <img src="assets/img/user/user-13.jpg" alt />
                            </div>
                            <div class="menu-profile-info">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        Sean Ngu
                                    </div>
                                    <div class="menu-caret ms-auto"></div>
                                </div>
                                <small>Frontend developer</small>
                            </div>
                        </a>
                    </div>
                    <div id="appSidebarProfileMenu" class="collapse">
                        <div class="menu-item pt-5px">
                            <a href="javascript:;" class="menu-link">
                                <div class="menu-icon"><i class="fa fa-cog"></i></div>
                                <div class="menu-text">Settings</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="javascript:;" class="menu-link">
                                <div class="menu-icon"><i class="fa fa-pencil-alt"></i></div>
                                <div class="menu-text"> Send Feedback</div>
                            </a>
                        </div>
                        <div class="menu-item pb-5px">
                            <a href="javascript:;" class="menu-link">
                                <div class="menu-icon"><i class="fa fa-question-circle"></i></div>
                                <div class="menu-text"> Helps</div>
                            </a>
                        </div>
                        <div class="menu-divider m-0"></div>
                    </div>
                    <div class="menu-header">Navigation</div>
                    <div class="menu-item has-sub">
                        <a href="javascript:;" class="menu-link">
                            <div class="menu-icon">
                                <i class="fa fa-sitemap"></i>
                            </div>
                            <div class="menu-text">Dashboard</div>
                            <div class="menu-caret"></div>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item">
                                <a href="index.html" class="menu-link">
                                    <div class="menu-text">Dashboard v1</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="index_v2.html" class="menu-link">
                                    <div class="menu-text">Dashboard v2</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="index_v3.html" class="menu-link">
                                    <div class="menu-text">Dashboard v3</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item has-sub">
                        <a href="javascript:;" class="menu-link">
                            <div class="menu-icon">
                                <i class="fa fa-hdd"></i>
                            </div>
                            <div class="menu-text">Email</div>
                            <div class="menu-badge">10</div>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item">
                                <a href="email_inbox.html" class="menu-link">
                                    <div class="menu-text">Inbox</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="email_compose.html" class="menu-link">
                                    <div class="menu-text">Compose</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="email_detail.html" class="menu-link">
                                    <div class="menu-text">Detail</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item">
                        <a href="widget.html" class="menu-link">
                            <div class="menu-icon">
                                <i class="fab fa-simplybuilt"></i>
                            </div>
                            <div class="menu-text">Widgets <span class="menu-label">NEW</span></div>
                        </a>
                    </div>
                    <div class="menu-item has-sub">
                        <a href="javascript:;" class="menu-link">
                            <div class="menu-icon">
                                <i class="fa fa-gem"></i>
                            </div>
                            <div class="menu-text">UI Elements <span class="menu-label">NEW</span></div>
                            <div class="menu-caret"></div>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item">
                                <a href="ui_general.html" class="menu-link">
                                    <div class="menu-text">General <i class="fa fa-paper-plane text-theme"></i></div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="ui_typography.html" class="menu-link">
                                    <div class="menu-text">Typography</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="ui_tabs_accordions.html" class="menu-link">
                                    <div class="menu-text">Tabs & Accordions</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="ui_unlimited_tabs.html" class="menu-link">
                                    <div class="menu-text">Unlimited Nav Tabs</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="ui_modal_notification.html" class="menu-link">
                                    <div class="menu-text">Modal & Notification <i
                                            class="fa fa-paper-plane text-theme"></i></div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="ui_widget_boxes.html" class="menu-link">
                                    <div class="menu-text">Widget Boxes</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="ui_media_object.html" class="menu-link">
                                    <div class="menu-text">Media Object</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="ui_buttons.html" class="menu-link">
                                    <div class="menu-text">Buttons <i class="fa fa-paper-plane text-theme"></i></div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="ui_icon_fontawesome.html" class="menu-link">
                                    <div class="menu-text">FontAwesome</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="ui_icon_bootstrap.html" class="menu-link">
                                    <div class="menu-text">Bootstrap Icons <i class="fa fa-paper-plane text-theme"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="ui_icon_duotone.html" class="menu-link">
                                    <div class="menu-text">Duotone Icons <i class="fa fa-paper-plane text-theme"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="ui_icon_simple_line_icons.html" class="menu-link">
                                    <div class="menu-text">Simple Line Icons</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="ui_icon_ionicons.html" class="menu-link">
                                    <div class="menu-text">Ionicons</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="ui_tree.html" class="menu-link">
                                    <div class="menu-text">Tree View</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="ui_language_bar_icon.html" class="menu-link">
                                    <div class="menu-text">Language Bar & Icon</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="ui_social_buttons.html" class="menu-link">
                                    <div class="menu-text">Social Buttons</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="ui_tour.html" class="menu-link">
                                    <div class="menu-text">Intro JS</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="ui_offcanvas_toasts.html" class="menu-link">
                                    <div class="menu-text">Offcanvas & Toasts <i
                                            class="fa fa-paper-plane text-theme"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item ">
                        <a href="bootstrap_5.html" class="menu-link">
                            <div class="menu-icon-img">
                                <img src="assets/img/logo/logo-bs5.png" alt />
                            </div>
                            <div class="menu-text">Bootstrap 5 <span class="menu-label">NEW</span></div>
                        </a>
                    </div>
                    <div class="menu-item has-sub active">
                        <a href="javascript:;" class="menu-link">
                            <div class="menu-icon">
                                <i class="fa fa-list-ol"></i>
                            </div>
                            <div class="menu-text">Form Stuff <span class="menu-label">NEW</span></div>
                            <div class="menu-caret"></div>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item active">
                                <a href="form_elements.html" class="menu-link">
                                    <div class="menu-text">Form Elements <i class="fa fa-paper-plane text-theme"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="form_plugins.html" class="menu-link">
                                    <div class="menu-text">Form Plugins <i class="fa fa-paper-plane text-theme"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="form_slider_switcher.html" class="menu-link">
                                    <div class="menu-text">Form Slider + Switcher</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="form_validation.html" class="menu-link">
                                    <div class="menu-text">Form Validation</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="form_wizards.html" class="menu-link">
                                    <div class="menu-text">Wizards <i class="fa fa-paper-plane text-theme"></i></div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="form_wysiwyg.html" class="menu-link">
                                    <div class="menu-text">WYSIWYG</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="form_editable.html" class="menu-link">
                                    <div class="menu-text">X-Editable</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="form_multiple_upload.html" class="menu-link">
                                    <div class="menu-text">Multiple File Upload</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="form_summernote.html" class="menu-link">
                                    <div class="menu-text">Summernote</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="form_dropzone.html" class="menu-link">
                                    <div class="menu-text">Dropzone</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item has-sub">
                        <a href="javascript:;" class="menu-link">
                            <div class="menu-icon">
                                <i class="fa fa-table"></i>
                            </div>
                            <div class="menu-text">Tables</div>
                            <div class="menu-caret"></div>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item">
                                <a href="table_basic.html" class="menu-link">
                                    <div class="menu-text">Basic Tables</div>
                                </a>
                            </div>
                            <div class="menu-item has-sub">
                                <a href="javascript:;" class="menu-link">
                                    <div class="menu-text">Managed Tables</div>
                                    <div class="menu-caret"></div>
                                </a>
                                <div class="menu-submenu">
                                    <div class="menu-item">
                                        <a href="table_manage.html" class="menu-link">
                                            <div class="menu-text">Default</div>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a href="table_manage_buttons.html" class="menu-link">
                                            <div class="menu-text">Buttons</div>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a href="table_manage_colreorder.html" class="menu-link">
                                            <div class="menu-text">ColReorder</div>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a href="table_manage_fixed_columns.html" class="menu-link">
                                            <div class="menu-text">Fixed Column</div>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a href="table_manage_fixed_header.html" class="menu-link">
                                            <div class="menu-text">Fixed Header</div>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a href="table_manage_keytable.html" class="menu-link">
                                            <div class="menu-text">KeyTable</div>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a href="table_manage_responsive.html" class="menu-link">
                                            <div class="menu-text">Responsive</div>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a href="table_manage_rowreorder.html" class="menu-link">
                                            <div class="menu-text">RowReorder</div>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a href="table_manage_scroller.html" class="menu-link">
                                            <div class="menu-text">Scroller</div>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a href="table_manage_select.html" class="menu-link">
                                            <div class="menu-text">Select</div>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a href="table_manage_combine.html" class="menu-link">
                                            <div class="menu-text">Extension Combination</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item has-sub">
                        <a href="javascript:;" class="menu-link">
                            <div class="menu-icon">
                                <i class="fa fa-cash-register"></i>
                            </div>
                            <div class="menu-text">POS System <span class="menu-label">NEW</span></div>
                            <div class="menu-caret"></div>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item">
                                <a href="pos_customer_order.html" target="_blank" class="menu-link">
                                    <div class="menu-text">Customer Order</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="pos_kitchen_order.html" target="_blank" class="menu-link">
                                    <div class="menu-text">Kitchen Order</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="pos_counter_checkout.html" target="_blank" class="menu-link">
                                    <div class="menu-text">Counter Checkout</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="pos_table_booking.html" target="_blank" class="menu-link">
                                    <div class="menu-text">Table Booking</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="pos_menu_stock.html" target="_blank" class="menu-link">
                                    <div class="menu-text">Menu Stock</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item has-sub">
                        <a href="javascript:;" class="menu-link">
                            <div class="menu-icon">
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="menu-text">Front End <span class="menu-label">NEW</span></div>
                            <div class="menu-caret"></div>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item">
                                <a href="https://seantheme.com/color-admin/frontend/one-page-parallax/index.html"
                                    target="_blank" class="menu-link">
                                    <div class="menu-text">One Page Parallax</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="https://seantheme.com/color-admin/frontend/blog/index.html" target="_blank"
                                    class="menu-link">
                                    <div class="menu-text">Blog</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="https://seantheme.com/color-admin/frontend/forum/index.html" target="_blank"
                                    class="menu-link">
                                    <div class="menu-text">Forum</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="https://seantheme.com/color-admin/frontend/e-commerce/index.html"
                                    target="_blank" class="menu-link">
                                    <div class="menu-text">E-Commerce</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="https://seantheme.com/color-admin/frontend/corporate/index.html"
                                    target="_blank" class="menu-link">
                                    <div class="menu-text">Corporate <i class="fa fa-paper-plane text-theme"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item has-sub">
                        <a href="javascript:;" class="menu-link">
                            <div class="menu-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="menu-text">Email Template</div>
                            <div class="menu-caret"></div>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item">
                                <a href="email_system.html" class="menu-link">
                                    <div class="menu-text">System Template</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="email_newsletter.html" class="menu-link">
                                    <div class="menu-text">Newsletter Template</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item has-sub">
                        <a href="javascript:;" class="menu-link">
                            <div class="menu-icon">
                                <i class="fa fa-chart-pie"></i>
                            </div>
                            <div class="menu-text">Chart</div>
                            <div class="menu-caret"></div>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item">
                                <a href="chart-flot.html" class="menu-link">
                                    <div class="menu-text">Flot Chart</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="chart-js.html" class="menu-link">
                                    <div class="menu-text">Chart JS</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="chart-d3.html" class="menu-link">
                                    <div class="menu-text">d3 Chart</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="chart-apex.html" class="menu-link">
                                    <div class="menu-text">Apex Chart</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item">
                        <a href="calendar.html" class="menu-link">
                            <div class="menu-icon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <div class="menu-text">Calendar</div>
                        </a>
                    </div>
                    <div class="menu-item has-sub">
                        <a href="javascript:;" class="menu-link">
                            <div class="menu-icon">
                                <i class="fa fa-map"></i>
                            </div>
                            <div class="menu-text">Map</div>
                            <div class="menu-caret"></div>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item">
                                <a href="map_vector.html" class="menu-link">
                                    <div class="menu-text">Vector Map</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="map_google.html" class="menu-link">
                                    <div class="menu-text">Google Map</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item has-sub">
                        <a href="javascript:;" class="menu-link">
                            <div class="menu-icon">
                                <i class="fa fa-image"></i>
                            </div>
                            <div class="menu-text">Gallery</div>
                            <div class="menu-caret"></div>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item">
                                <a href="gallery.html" class="menu-link">
                                    <div class="menu-text">Gallery v1</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="gallery_v2.html" class="menu-link">
                                    <div class="menu-text">Gallery v2</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item has-sub">
                        <a href="javascript:;" class="menu-link">
                            <div class="menu-icon">
                                <i class="fa fa-cogs"></i>
                            </div>
                            <div class="menu-text">Page Options <span class="menu-label">NEW</span></div>
                            <div class="menu-caret"></div>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item">
                                <a href="page_blank.html" class="menu-link">
                                    <div class="menu-text">Blank Page</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="page_with_footer.html" class="menu-link">
                                    <div class="menu-text">Page with Footer</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="page_with_fixed_footer.html" class="menu-link">
                                    <div class="menu-text">Page with Fixed Footer <i
                                            class="fa fa-paper-plane text-theme"></i></div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="page_without_sidebar.html" class="menu-link">
                                    <div class="menu-text">Page without Sidebar</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="page_with_right_sidebar.html" class="menu-link">
                                    <div class="menu-text">Page with Right Sidebar</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="page_with_minified_sidebar.html" class="menu-link">
                                    <div class="menu-text">Page with Minified Sidebar</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="page_with_two_sidebar.html" class="menu-link">
                                    <div class="menu-text">Page with Two Sidebar</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="page_with_line_icons.html" class="menu-link">
                                    <div class="menu-text">Page with Line Icons</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="page_with_ionicons.html" class="menu-link">
                                    <div class="menu-text">Page with Ionicons</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="page_full_height.html" class="menu-link">
                                    <div class="menu-text">Full Height Content</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="page_with_wide_sidebar.html" class="menu-link">
                                    <div class="menu-text">Page with Wide Sidebar</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="page_with_light_sidebar.html" class="menu-link">
                                    <div class="menu-text">Page with Light Sidebar</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="page_with_mega_menu.html" class="menu-link">
                                    <div class="menu-text">Page with Mega Menu</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="page_with_top_menu.html" class="menu-link">
                                    <div class="menu-text">Page with Top Menu</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="page_with_boxed_layout.html" class="menu-link">
                                    <div class="menu-text">Page with Boxed Layout</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="page_with_mixed_menu.html" class="menu-link">
                                    <div class="menu-text">Page with Mixed Menu</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="page_boxed_layout_with_mixed_menu.html" class="menu-link">
                                    <div class="menu-text">Boxed Layout with Mixed Menu</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="page_with_transparent_sidebar.html" class="menu-link">
                                    <div class="menu-text">Page with Transparent Sidebar</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="page_with_search_sidebar.html" class="menu-link">
                                    <div class="menu-text">Page with Search Sidebar <i
                                            class="fa fa-paper-plane text-theme"></i></div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="page_with_hover_sidebar.html" class="menu-link">
                                    <div class="menu-text">Page with Hover Sidebar <i
                                            class="fa fa-paper-plane text-theme"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item has-sub">
                        <a href="javascript:;" class="menu-link">
                            <div class="menu-icon">
                                <i class="fa fa-gift"></i>
                            </div>
                            <div class="menu-text">Extra <span class="menu-label">NEW</span></div>
                            <div class="menu-caret"></div>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item">
                                <a href="extra_timeline.html" class="menu-link">
                                    <div class="menu-text">Timeline</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="extra_coming_soon.html" class="menu-link">
                                    <div class="menu-text">Coming Soon Page</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="extra_search_results.html" class="menu-link">
                                    <div class="menu-text">Search Results</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="extra_invoice.html" class="menu-link">
                                    <div class="menu-text">Invoice</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="extra_404_error.html" class="menu-link">
                                    <div class="menu-text">404 Error Page</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="extra_profile.html" class="menu-link">
                                    <div class="menu-text">Profile Page</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="extra_scrum_board.html" class="menu-link">
                                    <div class="menu-text">Scrum Board <i class="fa fa-paper-plane text-theme"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="extra_cookie_acceptance_banner.html" class="menu-link">
                                    <div class="menu-text">Cookie Acceptance Banner <i
                                            class="fa fa-paper-plane text-theme"></i></div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="extra_orders.html" class="menu-link">
                                    <div class="menu-text">Orders <i class="fa fa-paper-plane text-theme"></i></div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="extra_order_details.html" class="menu-link">
                                    <div class="menu-text">Order Details <i class="fa fa-paper-plane text-theme"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="extra_products.html" class="menu-link">
                                    <div class="menu-text">Products <i class="fa fa-paper-plane text-theme"></i></div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="extra_product_details.html" class="menu-link">
                                    <div class="menu-text">Product Details <i class="fa fa-paper-plane text-theme"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="extra_file_manager.html" class="menu-link">
                                    <div class="menu-text">File Manager <i class="fa fa-paper-plane text-theme"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="extra_pricing_page.html" class="menu-link">
                                    <div class="menu-text">Pricing Page <i class="fa fa-paper-plane text-theme"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="extra_messenger_page.html" class="menu-link">
                                    <div class="menu-text">Messenger Page <i class="fa fa-paper-plane text-theme"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="extra_data_management.html" class="menu-link">
                                    <div class="menu-text">Data Management <i class="fa fa-paper-plane text-theme"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="extra_settings_page.html" class="menu-link">
                                    <div class="menu-text">Settings Page <i class="fa fa-paper-plane text-theme"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item has-sub">
                        <a href="javascript:;" class="menu-link">
                            <div class="menu-icon">
                                <i class="fa fa-key"></i>
                            </div>
                            <div class="menu-text">Login & Register</div>
                            <div class="menu-caret"></div>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item">
                                <a href="login.html" class="menu-link">
                                    <div class="menu-text">Login</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="login_v2.html" class="menu-link">
                                    <div class="menu-text">Login v2</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="login_v3.html" class="menu-link">
                                    <div class="menu-text">Login v3</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="register_v3.html" class="menu-link">
                                    <div class="menu-text">Register v3</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item has-sub">
                        <a href="javascript:;" class="menu-link">
                            <div class="menu-icon">
                                <i class="fa fa-cubes"></i>
                            </div>
                            <div class="menu-text">Version <span class="menu-label">NEW</span></div>
                            <div class="menu-caret"></div>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item">
                                <a href="index_v3.html" class="menu-link">
                                    <div class="menu-text">HTML</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="https://seantheme.com/color-admin/admin/ajax/" class="menu-link">
                                    <div class="menu-text">AJAX</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="https://seantheme.com/color-admin/admin/angularjs/" class="menu-link">
                                    <div class="menu-text">ANGULAR JS</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="https://seantheme.com/color-admin/admin/angularjs16/" class="menu-link">
                                    <div class="menu-text">ANGULAR JS 16</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="javascript:alert('Laravel 10 Version only available in downloaded version.');"
                                    class="menu-link">
                                    <div class="menu-text">LARAVEL 10</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="https://seantheme.com/color-admin/admin/vue3/" class="menu-link">
                                    <div class="menu-text">VUE 3 + Vite JS</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="https://seantheme.com/color-admin/admin/react/" class="menu-link">
                                    <div class="menu-text">REACT 18</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="javascript:alert('.NET Core 7.0 MVC Version only available in downloaded version.');"
                                    class="menu-link">
                                    <div class="menu-text">ASP.NET <i class="fa fa-paper-plane text-theme"></i></div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="https://seantheme.com/color-admin/admin/material/index_v3.html"
                                    class="menu-link">
                                    <div class="menu-text">MATERIAL DESIGN</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="https://seantheme.com/color-admin/admin/apple/index_v3.html" class="menu-link">
                                    <div class="menu-text">APPLE DESIGN</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="https://seantheme.com/color-admin/admin/transparent/index_v3.html"
                                    class="menu-link">
                                    <div class="menu-text">TRANSPARENT DESIGN <i
                                            class="fa fa-paper-plane text-theme"></i></div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="https://seantheme.com/color-admin/admin/facebook/index_v3.html"
                                    class="menu-link">
                                    <div class="menu-text">FACEBOOK DESIGN <i class="fa fa-paper-plane text-theme"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="https://seantheme.com/color-admin/admin/google/index_v3.html"
                                    class="menu-link">
                                    <div class="menu-text">GOOGLE DESIGN <i class="fa fa-paper-plane text-theme"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item has-sub">
                        <a href="javascript:;" class="menu-link">
                            <div class="menu-icon">
                                <i class="fa fa-medkit"></i>
                            </div>
                            <div class="menu-text">Helper</div>
                            <div class="menu-caret"></div>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item">
                                <a href="helper_css.html" class="menu-link">
                                    <div class="menu-text">Predefined CSS Classes</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item has-sub">
                        <a href="javascript:;" class="menu-link">
                            <div class="menu-icon">
                                <i class="fa fa-align-left"></i>
                            </div>
                            <div class="menu-text">Menu Level</div>
                            <div class="menu-caret"></div>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item has-sub">
                                <a href="javascript:;" class="menu-link">
                                    <div class="menu-text">Menu 1.1</div>
                                    <div class="menu-caret"></div>
                                </a>
                                <div class="menu-submenu">
                                    <div class="menu-item has-sub">
                                        <a href="javascript:;" class="menu-link">
                                            <div class="menu-text">Menu 2.1</div>
                                            <div class="menu-caret"></div>
                                        </a>
                                        <div class="menu-submenu">
                                            <div class="menu-item"><a href="javascript:;" class="menu-link">
                                                    <div class="menu-text">Menu 3.1</div>
                                                </a></div>
                                            <div class="menu-item"><a href="javascript:;" class="menu-link">
                                                    <div class="menu-text">Menu 3.2</div>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div class="menu-item"><a href="javascript:;" class="menu-link">
                                            <div class="menu-text">Menu 2.2</div>
                                        </a></div>
                                    <div class="menu-item"><a href="javascript:;" class="menu-link">
                                            <div class="menu-text">Menu 2.3</div>
                                        </a></div>
                                </div>
                            </div>
                            <div class="menu-item"><a href="javascript:;" class="menu-link">
                                    <div class="menu-text">Menu 1.2</div>
                                </a></div>
                            <div class="menu-item"><a href="javascript:;" class="menu-link">
                                    <div class="menu-text">Menu 1.3</div>
                                </a></div>
                        </div>
                    </div>

                    <div class="menu-item d-flex">
                        <a href="javascript:;"
                            class="app-sidebar-minify-btn ms-auto d-flex align-items-center text-decoration-none"
                            data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
                    </div>

                </div>

            </div>

        </div>
        <div class="app-sidebar-bg" data-bs-theme="dark"></div>
        <div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile"
                class="stretched-link"></a></div>


        @yield('content')


        <div class="theme-panel">
            <a href="javascript:;" data-toggle="theme-panel-expand" class="theme-collapse-btn"><i
                    class="fa fa-cog"></i></a>
            <div class="theme-panel-content" data-scrollbar="true" data-height="100%">
                <h5>App Settings</h5>

                <div class="theme-list">
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-red"
                            data-theme-class="theme-red" data-toggle="theme-selector" data-bs-toggle="tooltip"
                            data-bs-trigger="hover" data-bs-container="body" data-bs-title="Red">&nbsp;</a></div>
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-pink"
                            data-theme-class="theme-pink" data-toggle="theme-selector" data-bs-toggle="tooltip"
                            data-bs-trigger="hover" data-bs-container="body" data-bs-title="Pink">&nbsp;</a></div>
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-orange"
                            data-theme-class="theme-orange" data-toggle="theme-selector" data-bs-toggle="tooltip"
                            data-bs-trigger="hover" data-bs-container="body" data-bs-title="Orange">&nbsp;</a></div>
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-yellow"
                            data-theme-class="theme-yellow" data-toggle="theme-selector" data-bs-toggle="tooltip"
                            data-bs-trigger="hover" data-bs-container="body" data-bs-title="Yellow">&nbsp;</a></div>
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-lime"
                            data-theme-class="theme-lime" data-toggle="theme-selector" data-bs-toggle="tooltip"
                            data-bs-trigger="hover" data-bs-container="body" data-bs-title="Lime">&nbsp;</a></div>
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-green"
                            data-theme-class="theme-green" data-toggle="theme-selector" data-bs-toggle="tooltip"
                            data-bs-trigger="hover" data-bs-container="body" data-bs-title="Green">&nbsp;</a></div>
                    <div class="theme-list-item active"><a href="javascript:;" class="theme-list-link bg-teal"
                            data-theme-class data-toggle="theme-selector" data-bs-toggle="tooltip"
                            data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default">&nbsp;</a></div>
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-cyan"
                            data-theme-class="theme-cyan" data-toggle="theme-selector" data-bs-toggle="tooltip"
                            data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cyan">&nbsp;</a></div>
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-blue"
                            data-theme-class="theme-blue" data-toggle="theme-selector" data-bs-toggle="tooltip"
                            data-bs-trigger="hover" data-bs-container="body" data-bs-title="Blue">&nbsp;</a></div>
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-purple"
                            data-theme-class="theme-purple" data-toggle="theme-selector" data-bs-toggle="tooltip"
                            data-bs-trigger="hover" data-bs-container="body" data-bs-title="Purple">&nbsp;</a></div>
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-indigo"
                            data-theme-class="theme-indigo" data-toggle="theme-selector" data-bs-toggle="tooltip"
                            data-bs-trigger="hover" data-bs-container="body" data-bs-title="Indigo">&nbsp;</a></div>
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-black"
                            data-theme-class="theme-gray-600" data-toggle="theme-selector" data-bs-toggle="tooltip"
                            data-bs-trigger="hover" data-bs-container="body" data-bs-title="Black">&nbsp;</a></div>
                </div>

                <div class="theme-panel-divider"></div>
                <div class="row mt-10px">
                    <div class="col-8 control-label text-body fw-bold">
                        <div>Dark Mode <span class="badge bg-primary ms-1 py-2px position-relative"
                                style="top: -1px;">NEW</span></div>
                        <div class="lh-14">
                            <small class="text-body opacity-50">
                                Adjust the appearance to reduce glare and give your eyes a break.
                            </small>
                        </div>
                    </div>
                    <div class="col-4 d-flex">
                        <div class="form-check form-switch ms-auto mb-0">
                            <input type="checkbox" class="form-check-input" name="app-theme-dark-mode"
                                id="appThemeDarkMode" value="1" />
                            <label class="form-check-label" for="appThemeDarkMode">&nbsp;</label>
                        </div>
                    </div>
                </div>
                <div class="theme-panel-divider"></div>

                <div class="row mt-10px align-items-center">
                    <div class="col-8 control-label text-body fw-bold">Header Fixed</div>
                    <div class="col-4 d-flex">
                        <div class="form-check form-switch ms-auto mb-0">
                            <input type="checkbox" class="form-check-input" name="app-header-fixed" id="appHeaderFixed"
                                value="1" checked />
                            <label class="form-check-label" for="appHeaderFixed">&nbsp;</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-10px align-items-center">
                    <div class="col-8 control-label text-body fw-bold">Header Inverse</div>
                    <div class="col-4 d-flex">
                        <div class="form-check form-switch ms-auto mb-0">
                            <input type="checkbox" class="form-check-input" name="app-header-inverse"
                                id="appHeaderInverse" value="1" />
                            <label class="form-check-label" for="appHeaderInverse">&nbsp;</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-10px align-items-center">
                    <div class="col-8 control-label text-body fw-bold">Sidebar Fixed</div>
                    <div class="col-4 d-flex">
                        <div class="form-check form-switch ms-auto mb-0">
                            <input type="checkbox" class="form-check-input" name="app-sidebar-fixed"
                                id="appSidebarFixed" value="1" checked />
                            <label class="form-check-label" for="appSidebarFixed">&nbsp;</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-10px align-items-center">
                    <div class="col-8 control-label text-body fw-bold">Sidebar Grid</div>
                    <div class="col-4 d-flex">
                        <div class="form-check form-switch ms-auto mb-0">
                            <input type="checkbox" class="form-check-input" name="app-sidebar-grid" id="appSidebarGrid"
                                value="1" />
                            <label class="form-check-label" for="appSidebarGrid">&nbsp;</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-10px align-items-center">
                    <div class="col-8 control-label text-body fw-bold">Gradient Enabled</div>
                    <div class="col-4 d-flex">
                        <div class="form-check form-switch ms-auto mb-0">
                            <input type="checkbox" class="form-check-input" name="app-gradient-enabled"
                                id="appGradientEnabled" value="1" />
                            <label class="form-check-label" for="appGradientEnabled">&nbsp;</label>
                        </div>
                    </div>
                </div>

                <div class="theme-panel-divider"></div>
                <h5>Admin Design (5)</h5>

                <div class="theme-version">
                    <div class="theme-version-item">
                        <a href="index_v2.html" class="theme-version-link active">
                            <span style="background-image: url(assets/img/theme/default.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="https://seantheme.com/color-admin/admin/transparent/index_v2.html"
                            class="theme-version-link">
                            <span style="background-image: url(assets/img/theme/transparent.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="https://seantheme.com/color-admin/admin/apple/index_v2.html"
                            class="theme-version-link">
                            <span style="background-image: url(assets/img/theme/apple.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="https://seantheme.com/color-admin/admin/material/index_v2.html"
                            class="theme-version-link">
                            <span style="background-image: url(assets/img/theme/material.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="https://seantheme.com/color-admin/admin/facebook/index_v2.html"
                            class="theme-version-link">
                            <span style="background-image: url(assets/img/theme/facebook.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="https://seantheme.com/color-admin/admin/google/index_v2.html"
                            class="theme-version-link">
                            <span style="background-image: url(assets/img/theme/google.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                </div>

                <div class="theme-panel-divider"></div>
                <h5>Language Version (7)</h5>

                <div class="theme-version">
                    <div class="theme-version-item">
                        <a href="index.html" class="theme-version-link active">
                            <span style="background-image: url(assets/img/version/html.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="https://seantheme.com/color-admin/admin/ajax/index.html" class="theme-version-link">
                            <span style="background-image: url(assets/img/version/ajax.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="https://seantheme.com/color-admin/admin/angularjs/index.html"
                            class="theme-version-link">
                            <span style="background-image: url(assets/img/version/angular1x.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="https://seantheme.com/color-admin/admin/angularjs16/index.html"
                            class="theme-version-link">
                            <span style="background-image: url(assets/img/version/angular10x.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="javascript:alert('Laravel 10 Version only available in downloaded version.');"
                            class="theme-version-link">
                            <span style="background-image: url(assets/img/version/laravel.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="https://seantheme.com/color-admin/admin/vue3/" class="theme-version-link">
                            <span style="background-image: url(assets/img/version/vuejs.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="https://seantheme.com/color-admin/admin/react/dashboard/v2" class="theme-version-link">
                            <span style="background-image: url(assets/img/version/reactjs.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="javascript:alert('.NET Core 7.0 MVC Version only available in downloaded version.');"
                            class="theme-version-link">
                            <span style="background-image: url(assets/img/version/dotnet.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                </div>

                <div class="theme-panel-divider"></div>
                <h5>Frontend Design (5)</h5>

                <div class="theme-version">
                    <div class="theme-version-item">
                        <a href="https://seantheme.com/color-admin/frontend/one-page-parallax/index.html"
                            class="theme-version-link">
                            <span style="background-image: url(assets/img/theme/one-page-parallax.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="https://seantheme.com/color-admin/frontend/e-commerce/index.html"
                            class="theme-version-link">
                            <span style="background-image: url(assets/img/theme/e-commerce.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="https://seantheme.com/color-admin/frontend/blog/index.html" class="theme-version-link">
                            <span style="background-image: url(assets/img/theme/blog.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="https://seantheme.com/color-admin/frontend/forum/index.html"
                            class="theme-version-link">
                            <span style="background-image: url(assets/img/theme/forum.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="https://seantheme.com/color-admin/frontend/corporate/index.html"
                            class="theme-version-link">
                            <span style="background-image: url(assets/img/theme/corporate.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                </div>

                <div class="theme-panel-divider"></div>
                <a href="https://seantheme.com/color-admin/documentation/"
                    class="btn btn-dark d-block w-100 rounded-pill mb-10px" target="_blank"><b>Documentation</b></a>
                <a href="javascript:;" class="btn btn-default d-block w-100 rounded-pill"
                    data-toggle="reset-local-storage"><b>Reset Local Storage</b></a>
            </div>
        </div>


        <a href="javascript:;" class="btn btn-icon btn-circle btn-theme btn-scroll-to-top"
            data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>

    </div>


    <script src="{{ asset('assets/js/vendor.min.js')}}" type="5f2a70de445eb3a959fd0fa1-text/javascript"></script>
    <script src="{{ asset('assets/js/app.min.js')}}" type="5f2a70de445eb3a959fd0fa1-text/javascript"></script>


    <script src="{{ asset('assets/plugins/%40highlightjs/cdn-assets/highlight.min.js')}}"
        type="5f2a70de445eb3a959fd0fa1-text/javascript"></script>
    <script src="assets/js/demo/render.highlight.js" type="5f2a70de445eb3a959fd0fa1-text/javascript"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y3Q0VGQKY3"
        type="5f2a70de445eb3a959fd0fa1-text/javascript"></script>
    <script type="5f2a70de445eb3a959fd0fa1-text/javascript">
        window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-Y3Q0VGQKY3');
    </script>
    <script src="{{ asset('assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js')}}"
        data-cf-settings="5f2a70de445eb3a959fd0fa1-|49" defer></script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854"
        integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg=="
        data-cf-beacon='{"rayId":"817725c82b97b8cc","version":"2023.8.0","r":1,"b":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}'
        crossorigin="anonymous"></script>
    <script src="{{ asset('bulkasset/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('bulkasset/vendor/bootstrap/js/popper.js')}}"></script>    
    <script src="{{ asset('bulkasset/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
        function updateHiddenInput() {
            var numbersArray = [];
            $('.appended-number').each(function() {
                var number = $(this).text().trim().replace('X', ''); // Remove 'X' button
                numbersArray.push(number);
            });
            $('#appendedNumbersInput').val(JSON.stringify(numbersArray));
        }
        @if (session('message'))
                Swal.fire({
                        icon: 'success',
                        title: '{{ session("message") }}'
                        }) 
           
        @endif

        @if (session('success'))
                Swal.fire({
                        icon: 'success',
                        title: '{{ session("message") }}'
                        }) 
           
        @endif

        @if (session('error'))
                Swal.fire({
                        icon: 'error',
                        title: '{{ session("error") }}'
                        }) 
           
        @endif

    $('#contact_field').on('input', function(e) {
        // Get the input value
        var page = parseInt($("#pages").text())
        var recipient = parseInt($("#no_of_recipients").text())
        console.log(page, recipient, 'coole')
        //charge is the amount set by the admin to be charged per each transactions
        var charge = 4
        $("#amount_field").val(page * recipient * charge )
        $("#amount").text(page * recipient * charge)
        //start copy
        let inputText = e.target.value;
        // var inputText = $(this).val();

        // Remove all characters that are not numbers, spaces, or commas
        inputText = inputText.replace(/[^0-9,\n ]/g, ''); // Allow numbers, commas, spaces, and line breaks

        // Replace line breaks and spaces with commas
        inputText = inputText.replace(/[\n ]+/g, ',');

        // Remove consecutive commas
        inputText = inputText.replace(/,+/g, ',');

        // Remove leading/trailing commas
        // inputText = inputText.replace(/^,|,$/g, '');

        // Update the input value with the modified text
        e.target.value = inputText;

        // Split the input by commas
        var phoneNumbers = inputText.split(',');

        // Remove any leading/trailing whitespace from each phone number
        phoneNumbers = phoneNumbers.map(function(number) {
          return number.trim();
        });

        // Filter out any empty strings
        phoneNumbers = phoneNumbers.filter(function(number) {
          return number !== "";
        });

        // Update the count
        $("#no_of_recipients").text(phoneNumbers.length);
        //end copy

    });


    
        // Function to sanitize input and allow only numbers and commas
        function sanitizeInput(input) {
      
            var sanitized = input.replace(/[^0-9,]/g, '');
            return sanitized;
        }
    </script>
    @yield('script')
</body>

<!-- Mirrored from seantheme.com/color-admin/admin/html/form_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 08:25:57 GMT -->

</html>