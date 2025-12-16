<?php
$title = "Software";
ob_start(); 
?>
<h1>Software</h1>
<div>
The suggested price listed in the software description is an optional donation, which can be made on the home page of this website.
</div>
<hr />
<div class="accordion" id="div-accordion">
<div class="accordion-item">
<h2 class="accordion-header">
    <button disabled class="accordion-button data-bs-toggle="collapse" data-bs-target="" 
        aria-expanded="false"
        aria-controls="">
        Chinese Speech Trainer 2
    </button>
</h2>
<div class="accordion-collapse collapsed" data-bs-parent="#div-accordion">
    <div class="accordion-body">
        
        <div>
           <label class="form-label">Description</label>
            <span class="font-weight-light">Speak and listen to Mandarin Chinese language in this US English training word game.</span>
        </div>
        <div>
           <label class="form-label">System</label>
            <span class="font-weight-light">Android</span>
        </div>
        <div>
           <label class="form-label">Price</label>
            <span class="font-weight-light">$1</span>
        </div>
        <div class="row">
            <div class="col-12 ">
            <a type='button' class='float-end btn btn-primary btn-lg m-1' href='https://drive.google.com/file/d/1q6Z6jpXv_bNzQ70gQSC4FXT3fGV4mrw8/view?usp=drive_link' download>Download</a>
        </div>
    </div>
</div>
</div>
</div>
<div class="d-none">No results were found.</div>
<?php
$content = ob_get_clean();
include $_SERVER['DOCUMENT_ROOT'] . '/layout.php';
?>