<?php require getenv('APP_ROOT') . '/app/views/inc/header.php'?>

<!-- MAIN -->
<main class="main jumbotron jumbotron-fluid mb-0 py-3">

    <!-- ASIDE (dashboard) -->
    <aside class="dashboard">

    </aside>
    <!-- END OF ASIDE -->

    <!-- MAIN CONTENT (index.php) -->
    <section class="container content">
        <h2 class="content__title"><?=$dataInfo['content_title']?></h2>
        <div class="content__body">
            <p class="content__description"><?=$dataInfo['content_description']?></p>

            <!-- TABLE USERS -->
            <section class="content__table mt-4">
                <h3 class="content__table-title mb-3">Last users</h3>
                <div class="content__table-body">
                    <div class="table-responsive">
                        <table class="table table-fluid table-bordered table-hover table-striped table-sm">
                            <?= Helper::makeTable('last_user', $dataModel) ?>
                        </table>
                    </div>
                </div>
            </section>

            <!-- TABLE INVOICES -->
            <section class="content__table mt-4">
                <h3 class="content__table-title mb-3">Last invoices</h3>
                <div class="content__table-body">
                    <div class="table-responsive">
                        <table class="table table-fluid table-bordered table-hover table-striped table-sm">
                            <?= Helper::makeTable('last_invoice', $dataModel) ?>
                        </table>
                    </div>
                </div>
            </section>

            <!-- TABLE COMPANIES -->
            <section class="content__table mt-4">
                <h3 class="content__table-title mb-3">Last companies</h3>
                <div class="content__table-body">
                    <div class="table-responsive">
                        <table class="table table-fluid table-bordered table-hover table-striped table-sm">
                            <?= Helper::makeTable('last_company', $dataModel) ?>
                        </table>
                    </div>
                </div>
            </section>

        </div>

    </section> 
    <!-- END OF MAIN CONTENT -->

</main>
<!-- END OF MAIN -->

<?php require getenv('APP_ROOT') . '/app/views/inc/footer.php'?>
<!-- END OF BODY -->