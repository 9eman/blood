<div class="col-md-11 mx-auto m-3">
    <h2>Dashboard</h2>
    <p>Welcome back <?php echo $_SESSION['first_name'].' '.$_SESSION['last_name']; ?> </p>
    <hr>
    <div class="row">
        <div class="col-md-4 mt-3">
            <div class="single-feature text-center item-padding">
                <h3>Equipment Donation</h3>
                <a href="?p=admin&s=equipments" class="template-btn mt-3">List</a>
            </div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="single-feature text-center item-padding mt-4 mt-md-0">
                <h3>Blood Donors </h3>
                <a href="?p=admin&s=blood" class="template-btn mt-3">List</a>
            </div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="single-feature text-center item-padding mt-4 mt-lg-0">
                <h3>Feedback Entries.</h3>
                <a href="?p=admin&s=feedback" class="template-btn mt-3">List</a>
            </div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="single-feature text-center item-padding mt-4 mt-lg-0">
                <h3>Physiotherapy</h3>
                <a href="?p=admin&s=physiotherapy" class="template-btn mt-3">List</a>
            </div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="single-feature text-center item-padding mt-4 mt-lg-0">
                <h3>System Users</h3>
                <a href="?p=admin&s=users" class="template-btn mt-3">List</a>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <hr>
        <a href="?p=admin&s=logout" class="btn btn-danger m-3 ">Logut</a>
    </div>
</div>
