<?php include_once "component/topbar.php"; ?>

<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Create Coupon</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Input Style</h4>
                    <p class="text-muted m-b-15 f-s-12">Use the input classes on an
                        <code>.input-default, input-flat, .input-rounded</code> for Default
                        input.
                    </p>
                    <div class="basic-form">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control input-default" placeholder="Input Default">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-flat" placeholder="Input Flat ">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-rounded" placeholder="Input Rounded">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>

<?php include_once "component/bottom.php"; ?>