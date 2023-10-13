<?php foreach ($notes as $note) : ?>

    <li>
        <a href="/note?id=<?= $note['id'] ?>">
            <?= $note['body'] ?>
        </a>
    </li>

<?php endforeach; ?> 