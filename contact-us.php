<?php include 'templates/global_head.php'; ?>
	<link rel="stylesheet" href="css/tuy_contactus.css">
</head>
<?php include 'templates/global_header.php'; ?>
<h1>Contact Us!</h1>
<div class="two_columns">
    <div class="info">
        <p id="description">Have a question? Have a suggestion? Love what we're doing? 
            Feel free to give us a call, send us Starbucks gift cards for the teachers, 
            or use the contact form to contact us! We love hearing from you!</p>
        <div class="location">
            <h2>Location</h2>
            <div class="addressphone">
                <div>TUY Academy</div>
                <div>3525 Maricopa St.</div>
                <div>Torrance, CA 90503</div>
            </div>
        </div>
        <div class="telephone">
            <h2>Phone</h2>
            <div class="addressphone">
                <div>310.371.0417 (Office)</div>
                <div>310.465.9225 (Mobile)</div>
            </div>
        </div>
    </div>
    <div class="contact_form">
        <form action="index/submit_form.php" method="post" id="submit_form" target="submitted" name="contactus">
            <label class="labels" for="name">Name</label><br>
            <input class="input_texts" type="text" id="name" name="fullname"><br>

            <label class="labels" for="email">Email</label><br>
            <input class="input_texts" type="text" id="email" name="email"><br>

            <label class="labels" for="phone">Phone</label><br>
            <input class="input_texts" type="text" id="phone" name="phone"><br>

            <label class="labels" for="comment">Comment</label><br>
            <textarea class="input_texts" id="comment" name="comment" maxlength="400"></textarea><br>

            <button id="submit_button" type="submit" value="Submit">Submit</button>
            <div id="submitModal" class="modal">
                <div class="modal-content">
                    <span id="close">&times;</span>
                    <p>Thank you for contacting us! We will reach out to you shortly.</p>
                </div>
            </div>
        </form>

        <iframe id="iframedit" name="submitted"></iframe>
    </div>
</div>

<script>
    var submitbtn = document.getElementById("submit_button"); 
    var submitmodal = document.getElementById("submitModal"); //get the modal that pops up when the submit button is pressed
    var submitspan = document.getElementById("close"); //get the close button

    submitbtn.onclick = function() {
        submitmodal.style.display = "block";
    }

    submitspan.onclick = function() {
        submitmodal.style.display = "none";
    }

    //when the user clicks anywhere outside the modal, close it
    window.onclick = function(event) {
        if (event.target == submitmodal) {
            submitmodal.style.display = "none";
        }
    }

</script>
</body>
</html>