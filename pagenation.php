    <span id="prenextwp">
        <span id="pre">
            <?php 
                if(get_previous_post()){
                    $url = get_template_directory_uri();
                    previous_post_link("%link", "前の記事");
                }elseif(!get_previous_post()){
                    echo "<a herf=#url>最後です</a>";
                }
            ?>
        </span>
        <span id="home">
            <a id="homelink" herf="#url"><img src="<?php echo get_template_directory_uri();?>/img/home.png"></a>
        </span>
        <span id="next">
            <?php
                if(get_next_post()){
                    next_post_link("%link", "次の記事");
                }elseif(!get_next_post()){
                    $url = get_template_directory_uri();
                    echo "<a herf=#url>最新です</a>";
                }
            ?>
        </span>
    </span>
