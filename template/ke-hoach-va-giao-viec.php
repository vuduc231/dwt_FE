<?php require_once($template_path.'header/header-master.php'); ?>

<!--index page start-->

<div class="pageWithSidebar">
    <?php require_once($template_path.'sidebar/sidebarMaster/sidebarLeft.php'); ?>
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">Kế Hoạch và Giao Việc</h5>
                        <div id="thismonth" class="mainSection_thismonth"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php require_once($template_path.'sidebar/sidebarMaster/sidebarRight.php'); ?>
</div>

<!--end index page-->

<?php require_once($template_path.'footer/footer-master.php'); ?>