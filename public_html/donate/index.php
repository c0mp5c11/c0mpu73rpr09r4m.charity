<?php
$title = "Donations";
ob_start(); 
?>
    <h1>Donate</h1>
    <div>
        This nonprofit public benefit corporation is considered a public charity that has an active program of fundraising to receive contributions from many sources, including the general public, governmental agencies, corporations, private foundations, and other public charities on the Internet.
        C0MPU73R PR09R4M CHARITY accepts income from the conduct of activities in furtherance of the organization’s exempt purposes through donations.
        The following donation form accepts Visa, MasterCard, American Express, Discover payment cards.
    </div>
    <hr />
    <div class="mt-3 container">
        <div class="row">
            <div class="col-6">
                <h3>Payment Card</h3>
                <div><label class="form-label">Amount</label></div>
                <div class="row">
                    <div class="col">
                        <input class="form-control">
                    </div>
                    <div class="col">
                        <select></select>
                    </div>
                </div>
                <div><label class="form-label">Credit Card Number</label></div>
                <div><input class="form-control"></div>
                <div><label class="form-label">Expiry</label></div>
                <div><input class="form-control"></div>
                <div><label class="form-label">Name</label></div>
                <div><input class="form-control"></div>
            </div>
            <div class="col-6">
                <h3>Billing Address</h3>
                <div><label class="form-label">Address Line 1</label></div>
                <div><input class="form-control"></div>
                <div><label class="form-label">Address Line 2</label></div>
                <div><input class="form-control"></div>
                <div><label class="form-label">City</label></div>
                <div><input class="form-control"></div>
                <div><label class="form-label">State</label></div>
                <div><input class="form-control"></div>
                <div><label class="form-label">Zip Code</label></div>
                <div><input class="form-control"></div>
                <div><label class="form-label">Country Code</label></div>
                <div><input class="form-control"></div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <button disabled type="submit" value="Submit" class="btn btn-primary float-end">Submit</button>
                <button disabled type="button" value="Cancel" class="redirect btn btn-primary float-end me-2" data-url='@Url.Action("Index", "Home")'>Cancel</button>
            </div>
        </div>
    </div>
<script type="text/javascript" src="/js/donate/index.js"></script>
<?php
$content = ob_get_clean();
include $_SERVER['DOCUMENT_ROOT'] . '/layout.php';
?>