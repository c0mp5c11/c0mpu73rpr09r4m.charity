<?php
$title = "Request";
ob_start(); 
?>    
<h1>Request</h1>
<div>
    Available to the general public is this web page to request computer science volunteer services through the Internet.
    Examples of services available are listed in detail on the landing page.
    Payment is not required, but is accepted as a charitable donation.
</div>
<br />
<div><label>Name</label></div>
<div><input type="textbox"></div>
<div><label>Email Address</label></div>
<div><input type="textbox"></div>
<div><label>Message</label></div>
<div class="md-form"><textarea class="md-textarea form-control" rows=5></textarea></div>
<div><label>Due Date</label></div>
<div><div><input type="textbox"></div></div>
<br />
<div>
    <button disabled type="button" value="Cancel" class="redirect btn btn-primary" data-url='@Url.Action("Index", "Home")'>Cancel</button>
    <button disabled type="submit" value="Submit" class="btn btn-primary">Submit</button>
</div>
<script type="text/javascript" src="/js/request/index.js"></script>
<?php
$content = ob_get_clean();
include $_SERVER['DOCUMENT_ROOT'] . '/layout.php';
?>