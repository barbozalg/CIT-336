<?php

$actual = 0; /* ---------------- Change number for a desire menu ---------------- */

include 'globalVars.php';

?>
<!doctype html>
<html lang="en">

<?=headHTML($title[$actual])?>

<body>

<?php

include $folders[0].'headerHTML.php';
include $folders[0].'navHTML.php';

?>

<main>

<?php  /* ---------------- Add text here for new page ---------------- */ ?>
<h1>Content Title Here</h1>

</main>

<?php include $folders[0].'footerHTML.php'; ?>

<script src="<?=$folders[3]?>currentdate.js"></script>

</body>
</html>