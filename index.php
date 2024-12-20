<?php
// Example 04: index.php
session_start();
require_once 'header.php';

echo <<<_END
<div class='center'>
  Welcome to EchoCircle,
_END;

if ($loggedin) echo " $user, you are logged in";
else echo ' please sign up or log in';

echo <<<_END
</div>
<div class="parallax" style="background-image: url('./img/paralax1.webp');"></div>

<br>

<div class="parallax" style="background-image: url('./img/paralax2.webp');"></div>

<div data-role="footer">
  <h4>Web App from <i><a href='https://github.com/RobinNixon/lpmj6'
  target='_blank'>Learning PHP MySQL & JavaScript</a></i></h4>
</div>
</body>
</html>
_END;
?>
