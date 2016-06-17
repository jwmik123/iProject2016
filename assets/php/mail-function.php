<?php
  function runMyFunction() {
    echo 'I just ran a php function';

    $to  = 'joelmik123@gmail.com';

	// subject
	$subject = 'Test Email';

	// message
	$message = '
	<html>
	<head>
	  <title>Test email</title>
	</head>
	<body style="background-color: red; color: white;">
	  <p>Mijn voorkeurslijst</p>
	  <table>
	    <tr>
	      <th>Schoolnaam</th><th>locatie</th><th>opendag</th><th>idk</th>
	    </tr>
	    <tr>
	      <td></td>Altra College<td>Amsterdam Noord, straat 1</td><td>21 mei</td><td>1970</td>
	    </tr>
	    <tr>
	      <td>Bindelmeer College</td><td>Amsterdam Oost, straat 7</td><td>3 Augustus</td><td>1973</td>
	    </tr>
	  </table>
	</body>
	</html>
	';

	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// Additional headers
	$headers .= 'To: joelmik123@gmail.com' . "\r\n";
	$headers .= 'From: Joel Mik<joelmik123@live.nl>' . "\r\n";
	$headers .= 'Cc: iemand@example.com' . "\r\n";
	$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

	// Mail it
	mail($to, $subject, $message, $headers);
  }

  if (isset($_GET['hello'])) {
    runMyFunction();
  }
?>

Hello there!
<a href='mail-function.php?hello=true'>Run PHP Function</a>
</html>
