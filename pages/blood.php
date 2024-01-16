
<div class="col-11 mx-auto mt-3 mb-3">
<h2>BLOOD DONATION</h2>
<form method="post" enctype="multipart/form-data">
    <div class="row mt-1">
        <div class="form-group col-md-6">
            <label><i style="font-weight: bold;">First Name</i></label>
            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter First Name" required>
        </div>

        <div class="form-group col-md-6">
            <label><i style="font-weight: bold;">Last Name</i></label>
            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Last Name" required>
        </div>
    </div>
     
    <div class="row mt-1">
        <div class="form-group col-md-6">
            <label><i style="font-weight: bold;">Email </i></label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email ID" required>
        </div>
        <div class="form-group col-md-6">
            <label><i style="font-weight: bold;">Contact Number</i></label>
            <input type="text" class="form-control" name="contact_number" id="contact_number" placeholder="Enter Contact Number" required>
        </div>
    </div>

    <div class="form-group col-md-6">
        <label><i style="font-weight: bold;">Address</i></label>
        <input type="text" class="form-control" name="address" id="address" placeholder="Enter address" required>
    </div>

    <div class="form-group col-md-6">
        <label><i style="font-weight: bold;">Date of Birth</i></label>
        <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" placeholder="Enter Date of Birth" required>
    </div>

    <div class="form-group col-md-6">
        <label><i style="font-weight: bold;">Blood Group</i></label>
        <select class="form-control" name="blood_group" id="blood_group" placeholder="Select Blood Group" required>
            <option>Select</option>
            <option>A+</option>
            <option>A-</option>
            <option>B+</option>
            <option>B-</option>
            <option>O+</option>
            <option>O-</option>
            <option>AB+</option>
            <option>AB-</option>
        </select>
    </div>
  
    <input type="submit" class="btn btn-primary center" name="new-blood" value="Submit" />
</form>
</div> 
<br/>
<br>
<br>