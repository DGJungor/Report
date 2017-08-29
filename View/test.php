<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/24
 * Time: 11:51
 */


class Index
{
    public function display($output)
    {
        // ob_start();
        ?>

        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
        </head>
        <body>
        <?php
        echo $output;
        ?>

        <form action="index.php?c=Upload&a=TmpName" method="post" enctype="multipart/form-data">
            <label for="file">文件名：</label>
            <input type="file" name="file" id="file"><br>
            <input type="submit" name="submit" value="提交">
        </form>

        </body>
        </html>


        <?php
    }
}

?>