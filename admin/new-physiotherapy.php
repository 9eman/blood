
<div class="col-md-11 mx-auto m-3">
    <h2>New Physiotherapy</h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?p=admin">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="?p=admin&s=physiotherapy">Physiotherapy</a></li>
            <li class="breadcrumb-item active" aria-current="page">New Physiotherapy</li>
        </ol>
    </nav>

    <form method="POST" enctype="multipart/form-data">
        <div class="row mt-3">
            <div class="form-group col-md-6">
                <label><i style="font-weight: bold;">Title</i></label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Enter First Name" required>
            </div>
            <div class="form-group col-md-6">
                <label><i style="font-weight: bold;">Author</i></label>
                <input type="text" class="form-control" name="author" id="author" placeholder="Enter Last Name" required>
            </div>
        </div>
        <div class="row mt-3">
            <div class="form-group col-md-6">
                <label><i style="font-weight: bold;">Email ID</i></label>
                <input type="email" class="form-control" name="emailh" id="emailh" placeholder="Enter Email ID" required>
            </div>
        </div>
        <div class="row mt-3">
            <div class="form-group col-md-6">
                <label><i style="font-weight: bold;">Image</i></label>
                <input type="file" class="form-control" name="image" id="image" required>
            </div>
            <div class="form-group col-md-6">
                <label><i style="font-weight: bold;">Video</i></label>
                <input type="file" class="form-control" name="video" id="video" required>
            </div>
        </div>
    
        <input type="submit" class="btn btn-primary center" name="new-physiotherapy" value="create" />
    </form>
</div>