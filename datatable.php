<!-- Start Welcome area -->
<div class="all-content-wrapper">
    <?php
    include('top_area.php');
    ?>
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Tambah Data</h4>
                        <div class="add-product">
                            <a href="#" data-toggle="modal" data-target="#WarningModalhdbgcl">Add Library</a>
                        </div>
                        <div class="asset-inner">
                            <table>
                                <tr>
                                    <th>No</th>
                                    <th>Image</th>
                                    <th>Name of Asset</th>
                                    <th>Status</th>
                                    <th>Subject</th>
                                    <th>Department</th>
                                    <th>Type</th>
                                    <th>Price</th>
                                    <th>Setting</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td><img src="img/product/book-1.jpg" alt="" /></td>
                                    <td>Web Development Book</td>
                                    <td>
                                        <button class="pd-setting">Active</button>
                                    </td>
                                    <td>Html, Css</td>
                                    <td>CSE</td>
                                    <td>Book</td>
                                    <td>$1500</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><img src="img/product/book-2.jpg" alt="" /></td>
                                    <td>Quality Bol pen</td>
                                    <td>
                                        <button class="ps-setting">Paused</button>
                                    </td>
                                    <td>PHP</td>
                                    <td>CSE</td>
                                    <td>CD</td>
                                    <td>$1700</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><img src="img/product/book-3.jpg" alt="" /></td>
                                    <td>Box of pendrive</td>
                                    <td>
                                        <button class="ds-setting">Disabled</button>
                                    </td>
                                    <td>Java</td>
                                    <td>CSE</td>
                                    <td>Book</td>
                                    <td>$1500</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><img src="img/product/book-4.jpg" alt="" /></td>
                                    <td>Quality Bol pen</td>
                                    <td>
                                        <button class="pd-setting">Active</button>
                                    </td>
                                    <td>PHP</td>
                                    <td>CSE</td>
                                    <td>CD</td>
                                    <td>$1200</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><img src="img/product/book-1.jpg" alt="" /></td>
                                    <td>Web Development Book</td>
                                    <td>
                                        <button class="pd-setting">Active</button>
                                    </td>
                                    <td>Wordpress</td>
                                    <td>CSE</td>
                                    <td>Book</td>
                                    <td>$1800</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td><img src="img/product/book-2.jpg" alt="" /></td>
                                    <td>Quality Bol pen</td>
                                    <td>
                                        <button class="ps-setting">Paused</button>
                                    </td>
                                    <td>Java</td>
                                    <td>CSE</td>
                                    <td>CD</td>
                                    <td>$1000</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="custom-pagination">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--- DATA MODALS --->
<div id="WarningModalhdbgcl" class="modal modal-edu-general Customwidth-popup-WarningModal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-3">
                <h4 class="modal-title">BG Color Header Modal</h4>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <div class="modal-body">
                <span class="educate-icon educate-warning modal-check-pro information-icon-pro"></span>
                <h2>Warning!</h2>
                <p>The Modal plugin is a dialog box/popup window that is displayed on top of the current page</p>
            </div>
            <div class="modal-footer warning-md">
                <a data-dismiss="modal" href="#">Cancel</a>
                <a href="#">Process</a>
            </div>
        </div>
    </div>
</div>