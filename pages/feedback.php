
<div class="col-11 mx-auto">
<h2>Feedback</h2>

<form method="POST">
<div class="row">
    <div class="form-group col-md-6">
        <label><i style="font-weight: bold;">Provide your phone  Number:</i></label>
        <input type="text" class="form-control" name="phoneh" id="phoneh" placeholder="Enter First Name" required>
    </div>
    <div class="form-group col-md-6">
        <label><i style="font-weight: bold;">Provide your Email</i></label>
        <input type="text" class="form-control" name="emailh" id="emailh" placeholder="Enter Last Name" required>
    </div>

<div class="form-group col-md-6">
    <label><i style="font-weight: bold;">Gender</i></label>
    <div style="border: 1px solid lightgrey; padding: 5px; border-radius: 6px;">
        <div class="form-check form-check-inline">
            
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="genderh" id="male" value="Male"> Male
            </label>
        </div>
        <div class="form-check form-check-inline">
            
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="genderh" id="female" value="Female"> Female
            </label>
        </div>
    </div>
</div>
 
<div class="form-group col-md-6">
    <label><i style="font-weight: bold;">Evaluate the web site</i></label>
    <div style="border: 1px solid lightgrey; padding: 5px; border-radius: 6px;">
        <div class="form-check form-check-inline">
            
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="evaluateh" id="male" value="Bad"> Bad
            </label>
        </div>
        <div class="form-check form-check-inline">
            
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="evaluateh" id="female" value="Good"> Good
            </label>
        </div>
        <div class="form-check form-check-inline">
            
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="evaluateh" id="female" value="Very Good"> Very Good
            </label>
        </div>
    </div>
</div>

<div class="form-group col-md-12">
    <label><i style="font-weight: bold;">Does the web site help people</i></label>
    <div class="col-md-6 p-1" style="border: 1px solid lightgrey; border-radius: 6px;">
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="helph" id="helph" value="Yes"> Yes
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="helph" id="helph" value="No"> No
            </label>
        </div>
    </div>
</div>
 
<div class="row col-md-6">
    <div class="form-group col-md-12">
        <label><i style="font-weight: bold;">How do you view the site?</i></label>
        <textarea class="form-control" id="viewh" name="viewh" rows="3" placeholder="Enter Detailed explanation of the purpose" required></textarea>
    </div>
</div>

<div class="row col-md-6">
    <div class="form-group col-md-12">
        <label><i style="font-weight: bold;">Are there any comments on the web site?</i></label>
        <textarea class="form-control" id="commentsh" name="commentsh" rows="3" placeholder="Comments" required></textarea>
    </div>
</div>

</div>
<button type="submit" name="new-feedback" class="btn btn-primary">Submit</button>
</form>
</div>
</div>

<br><br>