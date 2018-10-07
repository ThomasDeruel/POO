<!DOCTYPE html>
<html>
<head>
    <title>
        <?= $translate->head?>
    </title>
    <style>
        ul{
            width:400px;
        }
        li a{
           color:red;
            text-decoration:none;
        }
    </style>
</head>
    <body>
        <main style="text-align:center;">
           <h1><?= $translate->title ?></h1>
            <p><?= $translate->phrase1 ?></p>
            <p><?= $translate->phrase2 ?></p>
            <ul style="display:flex;list-style: none;justify-content: space-around;margin:0 auto;">
                <li style="display:block;" >
                    <a href="?lang=fr">fr</a>
                </li>
                <li style="display:block;">
                    <a href="?lang=en">en</a>
                </li>
                <li style="display:block;">
                    <a href="?lang=jp">jp</a>
                </li>
            </ul>

        </main>
    </body>
</html>