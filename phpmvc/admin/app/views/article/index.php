<?php require ADMIN_VIEW_PATH.'/partial/header.php'; ?>


    <div class="page-container">
        <div class="left-content">
            <div class="mother-grid-inner">

                <?php require ADMIN_VIEW_PATH.'/partial/header-main.php'; ?>
                <!--inner block start here-->

                <div class="inner-block">

                    <div style="margin-bottom: 30px;">
                        <a class="btn btn-success" href="<?php echo ADMIN_URL . 'index.php?controller=article&action=add'; ?>">Thêm bài viết</a>
                    </div>

                    <table class="table table-striped">
                        <thead>
                            <td>Id</td>
                            <td>tiêu đề bài viết</td>
                            <td>nội dung</td>
                            <td>Hành động</td>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($articles as $article) {
                                    ?>
                                    <tr>
                                        <td><?php echo $article['id'] ?></td>
                                        <td><?php echo $article['title'] ?></td>
                                        <td><?php echo $article['article_content'] ?></td>
                                        <td> <a href="<?php echo ADMIN_URL . 'index.php?controller=article&action=edit&id='.$article['id']; ?>" class="btn btn-warning">SỬA</a>
                                        <a href="<?php echo ADMIN_URL . 'index.php?controller=article&action=delete&id='.$article['id']; ?>" class="btn btn-danger">XÓA</a> </td>
                                    </tr>
                                    <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!--inner block end here-->
                <!--copy rights start here-->
                <div class="copyrights">
                    <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
                </div>
                <!--COPY rights end here-->
            </div>
        </div>
        <?php require ADMIN_VIEW_PATH.'/partial/sidebar.php'; ?>
    </div>

<?php require ADMIN_VIEW_PATH.'/partial/footer.php'; ?>