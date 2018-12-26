<?php namespace Flextype ?>
<?php Themes::view('partials/head')->display() ?>
<h1><?= $entry['title'] ?></h1>
<?php foreach (Entries::getEntries('blog') as $entry): ?>
    <a href="<?= $entry['url'] ?>" class="blog-post">
        <h3><?= $entry['title'] ?></h3>
        <?= $entry['summary'] ?>
    </a>
<?php endforeach ?>
<?php Themes::view('partials/footer')->display() ?>
