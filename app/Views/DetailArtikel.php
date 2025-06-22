<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container article-container">
    <div class="breadcrumb">
        <p>Home > <?= esc($artikel['category']); ?> > <?= esc($artikel['game']); ?></p>
    </div>

    <article>
        <h1><?= esc($artikel['title']); ?></h1>
        
        <div class="article-image">
            <img src="/img/<?= esc($artikel['image']); ?>" alt="<?= esc($artikel['title']); ?>">
        </div>

        <div class="article-content">
            <p><?= nl2br(esc($artikel['content'])); ?></p>
        </div>
    </article>
</div>

<?= $this->endSection(); ?>