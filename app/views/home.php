<?php
/**
 * Created by PhpStorm.
 * User: chengsheng
 * Date: 2015/7/25
 * Time: 6:39
 */

//print_r($row);

/*echo $row["title"]."<br/>";
echo $row['content']."<br/>";*/
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php echo $title;?></title>
</head>
<body>
<div class="article">

    <h1><?php echo $article['title'] ?></h1>

    <div class="content">

        <?php echo $article['content'] ?>

    </div>

</div>

<ul class="fuckme">

    <li>Func1 !</li>

    <li>

        <?php echo $func1 ?>

    </li>

</ul>

</body>
</html>