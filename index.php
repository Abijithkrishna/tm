<?php
require_once "praveenlib.php";
require_once "datas.php";
require_once "cms.php";
if (isset($institutionId)) {
    ?>
    <!doctype html>
    <html>
    <?php printHead(); ?>

    <body>

    <?php printNav(); ?>
    <div class="container-fluid" id="content">
        <?php
        require_once "cms.php";
        printLeft();
        ?>
        <div id="main">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="pull-left">
                        <h1>Basic forms</h1>
                    </div>
                    <?php printModuleButton(); ?>
                </div>
            </div>
        </div>
    </div>

    </body>

    </html>
<?php
} else {
    header('location:' . $loginurl);
}
?>