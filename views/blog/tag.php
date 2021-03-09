
<h1><?= $params['tag']->name ?></h1>

<?php foreach ($params['tag']->getPosts() as $post) : ?>

    <div class="card mb-3 shadow">
        <div class="card-body">
            <h3 class="card-title"><?= $post->title ?></h3>
            
            <?= $post->content ?> 
        </div>
    </div>

<?php endforeach ?>