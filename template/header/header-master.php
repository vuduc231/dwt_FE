<?php 

//$template_path

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $pageTitle; ?> - THAI HUNG CORP</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $template_path?>/assets/img/favicon.jpg">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="<?php echo $template_path?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo $template_path?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css" />

    <!-- Plugins -->
    <link rel="stylesheet"
        href="<?php echo $template_path?>assets/plugins/jquery-datetimepicker/bootstrap-datepicker.min.css"
        rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo $template_path?>assets/plugins/jquery-datetimepicker/jquery.timepicker.css"
        rel="stylesheet" />

    <!-- Base -->
    <link rel="stylesheet" href="<?php echo $template_path?>/assets/css/normalize.css" />
    <link rel="stylesheet" href="<?php echo $template_path?>/assets/css/variables.css" />
    <link rel="stylesheet" href="<?php echo $template_path?>/assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo $template_path?>/assets/css/responsive.css" />
</head>

<body>
    <div class="wrapper">
        <!-- Pre-Loader Page -->
        <span id="loader" class="loader"></span>
        <!-- End Pre-Loader Page -->

        <header id="header" class="header fixed-top" data-scrollto-offset="0">
            <div class="container-fluid d-flex align-items-center justify-content-between">
                <div class="header_logo">
                    <a href="/" class="navbar-brand d-flex align-items-center scrollto me-auto me-lg-0">
                        <img class="header_logo" src="<?php echo $template_path?>/assets/img/logo-thaihung-1.jpg" />
                    </a>
                </div>

                <div class="header_menu-wrapper d-flex">
                    <!-- HEADER_MENU -->
                    <!-- Menu Desktop -->
                    <div class="header_menu">
                        <ul class="header_menu-list">
                            <li class="header_menu-item">
                                <a class="header_menu-link active" aria-current="page" href="#">
                                    <i class="bi bi-gear"></i>
                                    <span>C???u h??nh</span>
                                </a>
                                <ul id="header_submenu">
                                    <li class="header_submenu-items">
                                        <a href="" class="header_submenu-link" data-name="hop-giao-ban">C?? c???u t???
                                            ch???c</a>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="ho-so-nhan-vien" class="header_submenu-link">H??? s?? nh??n vi??n</a>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="mo-ta-cong-viec" class="header_submenu-link">M?? t??? c??ng vi???c</a>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="" class="header_submenu-link">Danh m???c nhi???m v???</a>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="" class="header_submenu-link">Quy tr??nh</a>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="" class="header_submenu-link">KPI</a>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="" class="header_submenu-link">Ph??n quy???n</a>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="" class="header_submenu-link">Ch??? k??</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header_menu-item">
                                <a class="header_menu-link" href="quan-ly-nhan-su">
                                    <i class="bi bi-person-add"></i>
                                    <span>Qu???n l?? nh??n s???</span>
                                </a>
                                <ul id="header_submenu">
                                    <li class="header_submenu-items">
                                        <a href="quan-ly-tuyen-dung" class="header_submenu-link"
                                            data-name="hop-giao-ban">Tuy???n d???ng</a>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="#" class="header_submenu-link">????nh gi?? nh??n vi??n</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="header_menu-item">
                                <a class="header_menu-link" href="">
                                    <i class="bi bi-people"></i>
                                    <span>H???p ????n v???</span>
                                </a>
                                <ul id="header_submenu">
                                    <li class="header_submenu-items">
                                        <a href="hop-giao-ban" class="header_submenu-link" data-name="hop-giao-ban">Giao
                                            ban</a>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="hop-tuan" class="header_submenu-link">T???ng k???t tu???n</a>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="hop-thang" class="header_submenu-link">T???ng k???t th??ng</a>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="" class="header_submenu-link">Kh??c</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header_menu-item">
                                <a class="header_menu-link" href="">
                                    <i class="bi bi-compass"></i>
                                    <span>K??? ho???ch & Giao vi???c</span>
                                </a>
                                <ul id="header_submenu">
                                    <li class="header_submenu-items">
                                        <a href="ke-hoach" class="header_submenu-link" data-name="hop-giao-ban">K???
                                            ho???ch</a>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="giao-viec" class="header_submenu-link">Giao Vi???c</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header_menu-item">
                                <a class="header_menu-link" href="#">
                                    <i class="bi bi-journal-arrow-up"></i>
                                    <span>DWT & KPI</span>
                                </a>
                            </li>
                            <li class="header_menu-item">
                                <a class="header_menu-link" href="#">
                                    <i class="bi bi-shield-lock"></i>
                                    <span>Ki???m so??t NV & CV</span>
                                </a>
                                <ul id="header_submenu">
                                    <li class="header_submenu-items">
                                        <a href="su-co-phat-sinh" class="header_submenu-link"
                                            data-name="hop-giao-ban">S??? c??? ph??t sinh</a>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="phan-anh" class="header_submenu-link">Ph???n ??nh</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header_menu-item">
                                <a class="header_menu-link" href="#">
                                    <i class="bi bi-list-check"></i>
                                    <span>X??t duy???t</span>
                                </a>
                                <ul id="header_submenu">
                                    <li class="header_submenu-items">
                                        <a href="" class="header_submenu-link" data-name="hop-giao-ban">S??? vi???c v?? ??
                                            ki???n</a>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="xet-duyet-chi-tieu-mua-sam" class="header_submenu-link">Chi ti??u mua
                                            s???m</a>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="" class="header_submenu-link">C??ng t??c</a>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="" class="header_submenu-link">V??n b???n</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header_menu-item">
                                <a class="header_menu-link" href="#">
                                    <i class="bi bi-ui-checks-grid"></i>
                                    <span>????? xu???t</span>
                                </a>
                                <ul id="header_submenu">
                                    <li class="header_submenu-items">
                                        <a href="" class="header_submenu-link" data-name="hop-giao-ban">S??? vi???c v?? ??
                                            ki???n</a>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="" class="header_submenu-link">Chi ti??u mua s???m</a>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="" class="header_submenu-link">C??ng t??c</a>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="" class="header_submenu-link">V??n b???n</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header_menu-item">
                                <a class="header_menu-link" href="#">
                                    <i class="bi bi-share"></i>
                                    <span>VB??H tham kh???o</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Menu Mobile -->
                    <label for="header_mobile-check" class="header_mobile-bars">
                        <i class="bi bi-list"></i>
                    </label>

                    <input type="checkbox" hidden class="header_input" id="header_mobile-check" />

                    <label for="header_mobile-check" class="header_overlay"></label>
                    <div class="header_menu-mobile">
                        <ul class="header_menu-mobile-list">
                            <li class="header_menu-mobile-item">
                                <a class="header_menu-mobile-link active" aria-current="page" href="#">
                                    <i class="bi bi-gear"></i>
                                    <span>C???u h??nh</span>
                                </a>
                            </li>
                            <li class="header_menu-mobile-item">
                                <a class="header_menu-mobile-link" href="#">
                                    <i class="bi bi-person-add"></i>
                                    <span>Qu???n l?? nh??n s???</span>
                                </a>
                            </li>

                            <li class="header_menu-mobile-item">
                                <a class="header_menu-mobile-link" href="#">
                                    <i class="bi bi-people"></i>
                                    <span>H???p ????n v???</span>
                                </a>
                            </li>
                            <li class="header_menu-mobile-item">
                                <a class="header_menu-mobile-link" href="#">
                                    <i class="bi bi-compass"></i>
                                    <span>K??? ho???ch & Giao vi???c</span>
                                </a>
                            </li>
                            <li class="header_menu-mobile-item">
                                <a class="header_menu-mobile-link" href="#">
                                    <i class="bi bi-journal-arrow-up"></i>
                                    <span>DWT & KPI</span>
                                </a>
                            </li>
                            <li class="header_menu-mobile-item">
                                <a class="header_menu-mobile-link" href="#">
                                    <i class="bi bi-shield-lock"></i>
                                    <span>Ki???m so??t NV & CV</span>
                                </a>
                            </li>
                            <li class="header_menu-mobile-item">
                                <a class="header_menu-mobile-link" href="#">
                                    <i class="bi bi-list-check"></i>
                                    <span>X??t duy???t</span>
                                </a>
                            </li>
                            <li class="header_menu-mobile-item">
                                <a class="header_menu-mobile-link" href="#">
                                    <i class="bi bi-ui-checks-grid"></i>
                                    <span>????? xu???t</span>
                                </a>
                            </li>
                            <li class="header_menu-mobile-item">
                                <a class="header_menu-mobile-link" href="#">
                                    <i class="bi bi-share"></i>
                                    <span>VB??H tham kh???o</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END HEADER_MENU -->
                </div>

                <div class="header_actions-wrapper d-flex align-items-center dropdown">
                    <div class="header_actions-chat">
                        <span class="header_icons" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                            aria-expanded="false" style="cursor: pointer" id="dropdownActions">
                            <i class="bi bi-question-circle"></i>
                        </span>
                        <ul class="dropdown-menu header_actions-notification-list p-0"
                            aria-labelledby="dropdownActions">
                            <div class="header_actions-notification-heading bg-light">H??? tr???</div>
                            <li class="header_actions-notification-item">
                                <a class="dropdown-item" href="thong-tin-ca-nhan">
                                    <div class="header_actions-notification-title">
                                        C??ng b??? nh??n vi??n xu???t s???c qu?? 1
                                    </div>
                                    <div class="header_actions-notification-desc">
                                        Nh??n vi??n xu???t s???c nh???t qu?? 1 l?? b???n g?? ?????y Nh??n vi??n
                                    </div>
                                </a>
                            </li>
                            <li class="header_actions-notification-item">
                                <a class="dropdown-item" href="thong-tin-ca-nhan">
                                    <div class="header_actions-notification-title">
                                        C??ng b??? nh??n vi??n xu???t s???c qu?? 1
                                    </div>
                                    <div class="header_actions-notification-desc">
                                        Nh??n vi??n xu???t s???c nh???t qu?? 1 l?? b???n g?? ?????y Nh??n vi??n
                                    </div>
                                </a>
                            </li>
                            <li class="header_actions-notification-item">
                                <a class="dropdown-item" href="thong-tin-ca-nhan">
                                    <div class="header_actions-notification-title">
                                        C??ng b??? nh??n vi??n xu???t s???c qu?? 1
                                    </div>
                                    <div class="header_actions-notification-desc">
                                        Nh??n vi??n xu???t s???c nh???t qu?? 1 l?? b???n g?? ?????y Nh??n vi??n
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header_actions-notification">
                        <span class="header_icons" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                            aria-expanded="false" style="cursor: pointer" id="dropdownNotification">
                            <i class="bi bi-bell"></i>
                        </span>
                        <ul class="dropdown-menu header_actions-notification-list"
                            aria-labelledby="dropdownNotification">
                            <div class="header_actions-notification-heading bg-light">Th??ng b??o</div>
                            <li class="header_actions-notification-item">
                                <a class="dropdown-item" href="thong-tin-ca-nhan">
                                    <div class="header_actions-notification-title">
                                        C??ng b??? nh??n vi??n xu???t s???c qu?? 1
                                    </div>
                                    <div class="header_actions-notification-desc">
                                        Nh??n vi??n xu???t s???c nh???t qu?? 1 l?? b???n g?? ?????y Nh??n vi??n
                                    </div>
                                </a>
                            </li>
                            <li class="header_actions-notification-item">
                                <a class="dropdown-item" href="thong-tin-ca-nhan">
                                    <div class="header_actions-notification-title">
                                        C??ng b??? nh??n vi??n xu???t s???c qu?? 1
                                    </div>
                                    <div class="header_actions-notification-desc">
                                        Nh??n vi??n xu???t s???c nh???t qu?? 1 l?? b???n g?? ?????y Nh??n vi??n
                                    </div>
                                </a>
                            </li>
                            <li class="header_actions-notification-item">
                                <a class="dropdown-item" href="thong-tin-ca-nhan">
                                    <div class="header_actions-notification-title">
                                        C??ng b??? nh??n vi??n xu???t s???c qu?? 1
                                    </div>
                                    <div class="header_actions-notification-desc">
                                        Nh??n vi??n xu???t s???c nh???t qu?? 1 l?? b???n g?? ?????y Nh??n vi??n
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header_user dropdown">
                        <button class="dropdown-toggle" type="button" id="dropdownUser" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img class="header_user-img" src="<?php echo $template_path?>/assets/img/avatar.jpeg" />
                        </button>
                        <ul class="dropdown-menu header_user-list" aria-labelledby="dropdownUser">
                            <li class="header_user-item">
                                <a class="dropdown-item" href="thong-tin-ca-nhan">
                                    <i class="bi bi-person-vcard"></i>
                                    <span>Th??ng tin</span>
                                </a>
                            </li>
                            <li class="header_user-item">
                                <a class="dropdown-item" href="#">
                                    <i class="bi bi-gear"></i>
                                    <span>C??i ?????t</span>
                                </a>
                            </li>
                            <div class="dropdown-divider"></div>
                            <li class="header_user-item">
                                <a class="dropdown-item" href="/login">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>????ng xu???t</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>