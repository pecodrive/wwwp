
<div class="seme panel-body">
    <span id="categorylink">
        <span class="glyphicon glyphicon-tag" aria-hidden="true"></span>
        <?php
            foreach (get_the_category() as $item) {
                $link = get_category_link($item->term_id);
                echo "<a class=\"category\" href=\"{$link}\">{$item->name}</a>";
                }
        ?>
    </span>
</div>
