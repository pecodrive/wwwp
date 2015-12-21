<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title text-center">カテゴリリスト</h3>
    </div>
    <!-- adspace -->
        <script type="text/javascript">
            var nend_params = {"media":32041,"site":166393,"spot":488481,"type":1,"oriented":1};
        </script>
        <script type="text/javascript" src="https://js1.nend.net/js/nendAdLoader.js"></script>
    <!-- adspace -->
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
