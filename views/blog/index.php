<h1>LES DERNIERS ARTICLES</h1>

<?php foreach($params['posts'] as $post ): ?>



<div class="card mb-3 shadow">
    <div class="card-body">
        <h5 class="card-title"><?= $post->title ?></h5>
        <div>
            <?php foreach ($post->getTags() as $tag): ?>
                <a href="/tags/<?= $tag->id ?>"><span class="badge badge-info"><?= $tag->name ?></span></a>
            <?php endforeach ?>
        </div>
        <small class="text-info" style="font-style:italic">Publié le <?= $post->getCreatedAt() ?></small>
        <p class="card-text"><?= $post->getExcerpt() ?></p>
        <?= $post->getButton() ?>
    </div>
</div>

<?php endforeach ?>
