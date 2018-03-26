
<?php
// Multiple recipients
$to = 'exampleEmailInput, diesel_gaming_studio@gmail.com'; // note the comma

// Subject
$subject = 'DGS Website form';

// Message
$message = '
<html>
<head>
  <title>DGS Website Form</title>
</head>
<body>
  <form>
    <div class="row">
        <div class="six columns">
            <label for="exampleEmailInput">Your email</label>
            <input class="u-full-width" type="email" placeholder="test@mailbox.com" id="exampleEmailInput">
        </div>
        <div class="six columns">
            <label for="exampleRecipientInput">Reason for Contacting</label>
            <select class="u-full-width" id="exampleRecipientInput">
                <option value="Option 1">Questions</option>
                <option value="Option 2">Admiration</option>
                <option value="Option 3">Can I get a Application?</option>
            </select>
        </div>
    </div>
    <label for="exampleMessge">Message</label>
    <textarea class="u-full-width" placeholder="Hello..." id="exampleMessage"></textarea>
    <label class="example-send-yourself-copy">
        <input type="checkbox">
        <span class="label-body">Send a copy to yourself</span>
    </label>
        <input class="button-primary" type="submit" value="Submit">
</form>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To:exampleEmailInput';
$headers[] = 'From: DGS Website <bullbachunky@gmail.com>';
$headers[] = 'Cc: ';
$headers[] = 'Bcc: ';

// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));
?>
