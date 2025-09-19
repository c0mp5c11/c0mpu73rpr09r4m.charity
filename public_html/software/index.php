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
    </button>
</h2>
<div class="accordion-collapse collapsed" data-bs-parent="#div-accordion">
    <div class="accordion-body">
        <div>
           <label class="form-label">Title</label>
            <span class="font-weight-light"></span>
        </div>
        <div>
           <label class="form-label">Description</label>
            <span class="font-weight-light"></span>
        </div>
        <div>
           <label class="form-label">Price</label>
            <span class="font-weight-light"></span>
        </div>
        <div>
           <label class="form-label">Platform</label>
            <span class="font-weight-light"></span>
        </div>
        <div>
            <img class="d-block h-100 w-100 d-none" src="data:image/jpg;base64, ">
        </div>
        <div class="row">
            <div class="col-12 ">
            <label class="form-label">Image</label>
                <button disabled type='button' class='float-end btn btn-primary btn-lg m-1 redirect' data-url=''>Download</button>
            </div>
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