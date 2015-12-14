<h1>Links favoritos</h1>

<ul>
    <?php foreach($links as $link):?>
        <li>
            <?=anchor($link["url"],$link["texto"]);?>
        </li>
        <?php endforeach;?>
</ul>
