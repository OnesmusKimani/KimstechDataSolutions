<?php
if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ) {
    $to = 'contact.onesmuskimani@gmail.com';
    // replace with your email address
    $subject = 'New message from contact form';
    $message = 'Name: ' . $_POST[ 'firstName' ] . ' ' . $_POST[ 'lastName' ] . '\n'
    . 'Email: ' . $_POST[ 'email' ] . '\n'
    . 'Message: ' . $_POST[ 'message' ];
    $headers = 'From: ' . $_POST[ 'email' ];

    if ( mail( $to, $subject, $message, $headers ) ) {
        echo '<p class="text-success">Your message has been sent successfully!</p>';
    } else {
        echo '<p class="text-danger">Sorry, there was an error sending your message. Please try again later.</p>';
    }
}
?>

<form class = 'p-lg-5 col-12 row g-3'>
<div>
<h1>Get in touch</h1>
<p>Feel free to contact us and we will get back to you as soon as possible</p>
</div>
<div class = 'col-lg-6'>
<label for = 'userName' class = 'form-label'>First name</label>
<input type = 'text' class = 'form-control' placeholder = 'Jon' id = 'userName'
aria-describedby = 'emailHelp'>
</div>
<div class = 'col-lg-6'>
<label for = 'userName' class = 'form-label'>Last name</label>
<input type = 'text' class = 'form-control' placeholder = 'Doe' id = 'userName'
aria-describedby = 'emailHelp'>
</div>
<div class = 'col-12'>
<label for = 'userName' class = 'form-label'>Email address</label>
<input type = 'email' class = 'form-control' placeholder = 'Johndoe@example.com'
id = 'userName' aria-describedby = 'emailHelp'>
</div>
<div class = 'col-12'>
<label for = 'exampleInputEmail1' class = 'form-label'>Enter Message</label>
<textarea name = '' placeholder = 'This is looking great and nice.'

class = 'form-control' id = '' rows = '4'></textarea>
</div>

<div class = 'col-12'>
<button type = 'submit' class = 'btn btn-brand'>Send Message</button>
</div>
</form>