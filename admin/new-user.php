<div class="col-md-11 mx-auto m-3">
    <h2>New User</h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?p=admin">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="?p=admin&s=users">Users</a></li>
            <li class="breadcrumb-item active" aria-current="page">New User</li>
        </ol>
    </nav>

    <form method="post">
        <div class="row mt-3">
            <div class="form-group col-md-6">
                <label><i style="font-weight: bold;">First Name</i></label>
                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter First Name" required>
            </div>
            <div class="form-group col-md-6">
                <label><i style="font-weight: bold;">Last Name</i></label>
                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Last Name" required>
            </div>
        </div>
        <div class="row mt-3">
            <div class="form-group col-md-6">
                <label><i style="font-weight: bold;">Email ID</i></label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email ID" required>
            </div>
            <div class="form-group col-md-6">
                <label><i style="font-weight: bold;">Password</i></label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required>
            </div>
        </div>
    
        <input type="submit" class="btn btn-primary center" name="new-user" value="create" />
    </form>
</div>