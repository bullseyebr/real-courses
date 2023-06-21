<!-- encapsulamento / componentizacao -->
<?php if ($itemIterator['link'] != '/quem-somos' && strpos($itemIterator['link'], 'contato') === false) { ?>
    <li class="nav-item" data-id="<?= $key ?>">
        <a href="<?= $itemIterator["link"] ?>" <?= ($itemIterator["path_view"] === null) ? 'target="_blank"' : "" ?>class="nav-link text-white">
            <u><?= $itemIterator["title"] ?></u>
        </a>
    </li>
<?php } ?>