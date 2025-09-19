<?php
$title = "Home";
ob_start(); 
?>
<h3 class="bolder">Professional Software Development</h3>
<h3 class="bolder">Certified Computer Technician</h3>
<h3 class="bolder">Certified Project Management</h3>
<h3 class="bolder">Certified Software Security</h3>
<hr />
<a class='btn btn-primary btn-lg m-1 redirect' href='/request/index.php'>Request</a>
<a class='btn btn-primary btn-lg m-1 redirect' href='/software/index.php'>Software</a>
<a class='btn btn-primary btn-lg m-1 redirect' href='/donate/index.php'>Donate</a>
<hr />
<h2>Services</h2>
<dl>
    <dt>Computer Software Technical Analysis</dt>
    <dd>Document components of an existing system of computer software.</dd>
    <dt>Computer Software Concept Design Document</dt>
    <dd>Create a computer software concept design document from an estimate request.</dd>
    <dt>Computer Software Design Document</dt>
    <dd>Assist with designing and documenting a computer application or website.</dd>
    <dt>Computer Software Programming</dt>
    <dd>Technically design and program a computer application for Linux, Windows, or MacOS.</dd>
    <dt>Mobile Application Programming</dt>
    <dd>Technically design and implement a native mobile application for Android or iOS.</dd>
    <dt>Database Programming</dt>
    <dd>Generate a static or dynamic report that can display information about collected data.</dd>
    <dt>Web Programming</dt>
    <dd>Technically design and implement a website.</dd>
    <dt>System Programming</dt>
    <dd>Technically design and implement a component for a computer system.</dd>
    <dt>Video Game Programming</dt>
    <dd>Technically design and implement a video game from a concept.</dd>
    <dt>Computer Software Test Plan</dt>
    <dd>Document and execute a plan to test a computer program.</dd>
    <dt>Computer Software Installation</dt>
    <dd>Install software onto computer, laptop, or mobile phone.</dd>
    <dt>Hardware Installation</dt>
    <dd>Install hardware onto a computer, laptop, or mobile phone.</dd>
    <dt>Network Analysis Report</dt>
    <dd>Locally monitor network traffic for analysis and document reports.</dd>
    <dt>Computer Software Feature Implementation</dt>
    <dd>Technically design and implement new features for existing software.</dd>
    <dt>Computer Software Bug Fix</dt>
    <dd>Resolve bugs in existing computer software.</dd>
    <dt>Development Operations</dt>
    <dd>Implement or maintain software development administrative software.</dd>
    <dt>Database Administration</dt>
    <dd>Create database architecture or scripts for data migrations.</dd>
    <dt>System Administration</dt>
    <dd>Configure system applications to make use of existing features.</dd>
</dl>
<?php
$content = ob_get_clean();
include $_SERVER['DOCUMENT_ROOT'] . '/layout.php';
?>