<!DOCTYPE html>
<html>
<head>
<title>Aliens Abducted Me - Report an Abduction</title>
</head>
<body>

<p><h2>Aliens Abducted Me - Report an Abduction.</h2></p>

<?php
$name = $_POST['firstname'] . ' ' . $_POST ['lastname'];
$when_it_happened = $_POST['whenithappened'];
$how_long = $_POST['howlong'];
$how_many = $_POST['howmany'];
$alien_description = $_POST['aliendescription'];
$what_they_did = $_POST['whattheydid'];
$fang_spotted = $_POST['fangspotted'];
$email = $_POST['email'];
$other = $_POST['other'];

$to = 'rodriguezarrocha@gmail.com';
$subject = 'Aliens Abducted Me - Abduction Report';
   $msg =<<<EMAIL
My name is $name and I was abducted $when_it_happened and was gone for $how_long.
Number of aliens: $how_many
Alien description: $alien_description
What they did: $what_they_did
Fang spotted: $fang_spotted
Other comments: $other

Hope this information is helpful to you!
Oliver Rodriguez

EMAIL;
       
mail($to, $subject, $msg, 'From:' . $email);

echo 'Thanks for submitting the form.<br />';
echo 'You were abducted ' . $when_it_happened;
echo ' and were gone for ' . $how_long . '<br />';
echo 'Number of aliens: ' . $how_many . '<br />';
echo 'Describe them: ' . $alien_description . '<br />';
echo 'The aliens did this: ' . $what_they_did . '<br />';
echo 'Was fang there ? ' . $fang_spotted . '<br />';
echo 'Other comments: ' . $other . '<br />';
echo 'Your email address is ' . $email;
 
?>

</body>
</html>