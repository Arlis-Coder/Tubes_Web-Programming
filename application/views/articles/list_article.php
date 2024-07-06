<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
    <link rel="stylesheet" href="/assets/css/list_article.css">
    <link rel="stylesheet" href="\assets\css\home.css"> <!-- Sisipkan stylesheet CSS di sini -->
</head>

<body>

    <?php $this->load->view('_partials/navbar.php'); ?>

    <header>
        <div class="container">
            <h2>List Artikel</h2>
        </div>
    </header>

    <section class="articles">
        <div class="container">
            <?php foreach ($articles as $article) : ?>
            <article class="article">
                <h3>
                    <a href="<?= site_url('article/'.$article->slug) ?>">
                        <?= $article->title ? html_escape($article->title) : "No Title" ?>
                    </a>
                </h3>
                <p class="meta">Posted on <?= date('F j, Y', strtotime($article->created_at)) ?></p>
                <p><?= character_limiter(strip_tags($article->content), 150) ?></p>
                <a href="<?= site_url('article/'.$article->slug) ?>" class="read-more">Read more</a>
            </article>
            <?php endforeach ?>
        </div>
    </section>

    <?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>