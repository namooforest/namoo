<html>
<head>
	<title>Aliens Abduction Me - Report an Abduction</title>
</head>
<body>
		<?php
		 //$mailto="받는주소";
		 $mailto="namooforest@gmail.com";
		 $subject="mail test";
		 $content="test";
		 $result=mail($mailto, $subject, $content);
		 if($result)
		 	{	echo "mail success";	}
		 else
		 	{	
		 		error_log($mailto, 0);  
		 		echo "mail fail";
		 	}
		?>
</body>
</html>