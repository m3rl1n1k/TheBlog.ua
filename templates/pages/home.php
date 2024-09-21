<?php require_once ROOT_PATH. 'templates/partials/base_view.php'; ?>
<?php require_once ROOT_PATH. 'templates/pages/titles/title_home.php'; ?>

<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            <?php
            if (isset($_SESSION['auth_user']['id_user']) && !empty($_SESSION['auth_user']['id_user'])) {
                $dbh = include(__DIR__ . '/../../../config/db_connection.php');

                var_dump($dbh);

                $posts = getPosts($dbh, $_SESSION['auth_user']['id_user']);

                foreach ($posts as $post) :?>
                    <div class="post-preview">
                        <a href="post.html">


                            <h2 class="post-title"><?= $post['title'] ?></h2>
                            <h3 class="post-subtitle"><?= $post['content'] ?></h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <b><u> <?= $post['name'] ?> </u></b>
                            <a href="#!">Start Bootstrap</a>
                            <?= $post['date'] ?>
                        </p>

                    </div>
                <?php endforeach; ?>
            <?php } else
                echo "You must be logged in to view this page.";
            ?>
            <!-- Divider-->
            <hr class="my-4"/>
            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts
                    →</a></div>
        </div>
    </div>
</div>

<?php require_once ROOT_PATH. 'templates/partials/footer.php'; ?>
