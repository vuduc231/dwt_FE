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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class='row'>
                                        <div class="col-md-6">
                                            <div class="form-control">
                                                <div class="card-title mb-2">Bên giao</div>
                                                <div class="mb-3 row">
                                                    <div class="col-md-6 d-flex">
                                                        <label style="padding-right: 6px;" for="title" class="col-form-label"><i class="bi bi-file-earmark-font"></i>Người giao </label>
                                                        <div class="col">
                                                            <input type="text" class="form-control" placeholder="Nhập chủ đề cuộc họp" id="title"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 d-flex">
                                                        <label style="padding-right: 6px;" for="textarea" class="col-form-label"><i class="bi bi-file-earmark-text"></i> Mục tiêu </label>
                                                        <div class="col">
                                                            <textarea class="form-control" placeholder="Nhập nội dung cuộc họp" rows="1" id="textarea"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-control">
                                                <div class="card-title mb-2">Bên nhận</div>
                                                <div class="mb-3 row">
                                                    <div class="col-md-6 d-flex">
                                                        <label style="padding-right: 6px;" for="title" class="col-form-label"><i class="bi bi-file-earmark-font"></i> Chủ đề </label>
                                                        <div class="col">
                                                            <input type="text" class="form-control" placeholder="Nhập chủ đề cuộc họp" id="title"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 d-flex">
                                                        <label style="padding-right: 6px;" for="textarea" class="col-form-label"><i class="bi bi-file-earmark-text"></i> Mục tiêu </label>
                                                        <div class="col">
                                                            <textarea class="form-control" placeholder="Nhập nội dung cuộc họp" rows="1" id="textarea"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <div class="card-title">Bên giao công việc</div>
                                            </div>
                                            <div class='row'>
                                                <div class="col-md-12">
                                                    <div class="repeater-hopPhongBan position-relative style_table-5">
                                                        <table class="table table-responsive table-hover table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>TT</th>
                                                                    <th>Nội dung công việc</th>
                                                                    <th>Người nhận</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody data-repeater-list="group-a">
                                                                <tr data-repeater-item>
                                                                    <th scope="row">1</th>
                                                                    <td>
                                                                        <div contenteditable="true" class="content_table-three-input"></div>
                                                                    </td>
                                                                    <td>
                                                                        <select class="selectpicker"
                                                                        data-width="100%"
                                                                        title="&nbsp;"
                                                                        selectedTextFormat="static">
                                                                        <option style="display:none" value=""></option>
                                                                            <option>Người nêu 1</option>
                                                                            <option>Người nêu 2</option>
                                                                            <option>Người nêu 3</option>
                                                                        </select>
                                                                    </td>
                                                                    <td>
                                                                        <div data-repeater-delete class="close-row-btn">
                                                                            <i class="bi bi-trash3"></i>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                
                                                            </tbody>
                                                        </table>
                                                        <div data-repeater-create class="add-row-btn">
                                                            <i class="bi bi-plus-circle"></i>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <div class="card-title">Bên giao công việc</div>
                                            </div>
                                            <div class='row'>
                                                <div class="col-md-12">
                                                    <div class="repeater-hopPhongBan position-relative style_table-5">
                                                        <table class="table table-responsive table-hover table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>TT</th>
                                                                    <th>Nội dung công việc</th>
                                                                    <th>Người nhận</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody data-repeater-list="group-a">
                                                                <tr data-repeater-item>
                                                                    <th scope="row">1</th>
                                                                    <td>
                                                                        <div contenteditable="true" class="content_table-three-input"></div>
                                                                    </td>
                                                                    <td>
                                                                        <select class="selectpicker"
                                                                        data-width="100%"
                                                                        title="&nbsp;"
                                                                        selectedTextFormat="static">
                                                                        <option style="display:none" value=""></option>
                                                                            <option>Người nêu 1</option>
                                                                            <option>Người nêu 2</option>
                                                                            <option>Người nêu 3</option>
                                                                        </select>
                                                                    </td>
                                                                    <td>
                                                                        <div data-repeater-delete class="close-row-btn">
                                                                            <i class="bi bi-trash3"></i>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                
                                                            </tbody>
                                                        </table>
                                                        <div data-repeater-create class="add-row-btn">
                                                            <i class="bi bi-plus-circle"></i>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once($template_path.'sidebar/sidebarMaster/sidebarRight.php'); ?>
</div>

<!--end index page-->

<?php require_once($template_path.'footer/footer-master.php'); ?>