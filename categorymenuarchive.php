<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title text-center">カテゴリリスト</h3>
    </div>
    <ul class="list-group">
        <?php 
        $args = array(
            'parent' => 0
        );

        $cat = get_categories($args);
        foreach ($cat as $item) {
            $url = get_category_link($item->term_id);
            $name = $item->name;
            $count = $item->count;
            echo "<li class=\"list-group-item\"><a class=\"archivelist\" href=\"{$url}\">{$name}({$count})</a></li>";
        }
        ?>
    </ul>
</div>
