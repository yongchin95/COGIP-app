<!-- header content -->
<?php require getenv('APP_ROOT') . '/app/views/inc/header.php' ?>
<?php require getenv('APP_ROOT') . '/app/views/inc/table.php' ?>

<!-- main content -->
<main id="main" class="jumbotron jumbotron-fluid mb-0 py-3">
    <!-- main-content -->
    <section class="container content">
        <h2 class="content__title"><?= $data['content_title'] ?></h2>
        <div class="content__body">
            <p class="content__description"><?= $data['content_description'] ?></p>
            <!-- Tables -->
            <section class="content__table">
                <h3 class="content__table-title">Last users</h3>
                <div class="content__table-body">
                    <?= $first_part;
                    Helper::makeTable("last_contact", $dataModel);
                    echo $second_part; ?>
                </div>
            </section>

            <section class="content__table">
                <h3 class="content__table-title">Last invoices</h3>
                <div class="content__table-body">
                    <?= $first_part;
                    Helper::makeTable("last_invoice", $dataModel);
                    echo $second_part; ?>
                </div>
            </section>


            <section class="content__table">
                <h3 class="content__table-title">Last companies</h3>
                <div class="content__table-body">
                    <?= $first_part;
                    Helper::makeTable("last_company", $dataModel);
                    echo $second_part; ?>
                </div>
            </section>
        </div>
    </section>
</main>

<!-- footer content -->
<?php require getenv('APP_ROOT') . '/app/views/inc/footer.php' ?>