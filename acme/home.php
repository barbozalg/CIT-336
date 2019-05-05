<?php

$actual = 0;

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
<h1>Welcome to ACME!</h1>

<div id="hero">
    <img src="<?=$folders[2]?>site/rocketfeature.jpg" alt="Rocket Feature">
    <div>
        <ul>
            <li><h2>Acme Rocket</h2></li>
            <li>Quick lighting fuse</li>
            <li>NHTSA approved seat belts</li>
            <li>Mobile launch stand included</li>
            <li><a href="javascript:void"><img id="actionbtn" alt="Add to cart button" src="<?=$folders[2]?>site/iwantit.gif"></a></li>
        </ul>
    </div>
</div>
&nbsp;<br>
<div id="items">
    <div class="review">
        <h2>Acme Rocket Reviews</h2>
        <ul>
            <li>"I don't know how I ever caught roadrunners before this." (4/5)</li>
            <li>"That thing was fast!" (4/5)</li>
            <li>"Talk about fast delivery." (5/5)</li>
            <li>"I didn't even have to pull the meat apart." (4.5/5)</li>
            <li>"I'm on my thirtieth one. I love these things!" (5/5)</li>
        </ul>
    </div>
    <div class="recipes">
        <h2 id="RecipeT">Featured Recipes</h2>
        <div>
            <div><img src="<?=$folders[2]?>recipes/bbqsand.jpg" alt="Pulled Roadrunner BBQ"></div>
            <a href="javascript:void">Pulled Roadrunner BBQ</a>
        </div>
        <div>
            <div><img src="<?=$folders[2]?>recipes/potpie.jpg" alt="Roadrunner Pot Pie"></div>
            <a href="javascript:void">Roadrunner Pot Pie</a>
        </div>
        <div>
            <div><img src="<?=$folders[2]?>recipes/soup.jpg" alt="Roadrunner Soup"></div>
            <a href="javascript:void">Roadrunner Soup</a>
        </div>
        <div>
            <div><img src="<?=$folders[2]?>recipes/taco.jpg" alt="Roadrunner Tacos"></div>
            <a href="javascript:void">Roadrunner Tacos</a>
        </div>
    </div>
</div>

</main>

<?php include $folders[0].'footerHTML.php'; ?>

<script src="<?=$folders[3]?>currentdate.js"></script>

</body>
</html>