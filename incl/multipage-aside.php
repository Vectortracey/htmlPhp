<div class="asideclass">
    <aside>
        <nav class="multipage">
            <ul>
                <?php foreach ($pages as $key => $value) : ?>
                    <?php $selected = null;
                    if ($key === $pageReference) {
                        $selected = "class=\"selected\"";
                    }
                    ?>
                    <li><a <?= $selected ?> href="?page=<?= $key ?>"><?= $value["title"] ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </aside>
</div>
