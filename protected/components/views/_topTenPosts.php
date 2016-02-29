<?php

foreach($dataProvider as $post) : ?>

    <div id="article-box">
        <div id="article-box-title">
            <?=$post->title?> [<?=$post->categ?>][<?=$post->groups?>]
        </div>

        <div id="article-box-content">
            <?=$post->content?>
        </div>

        <?php if( ! empty($post->code)) : ?>
            <div id="article-box-code">
                <?=$post->code?>
            </div>
        <?php endif; ?>

        <?php if( ! empty($post->code)) : ?>
            <div id="article-box-result">
                <?=$post->result?>
            </div>
        <?php endif; ?>

        <div id="article-box-footer">
            created <?=$post->modifi?> by <?=$post->writer?>
        </div>
    </div>
    <br />

<?php endforeach; ?>

<style>
    #article-box
    {
        border: 1px solid black;
        width: 32%;
    }
    #article-box-title
    {
        border: 1px solid red;
    }
    #article-box-footer
    {
        border: 1px solid blue;
    }
    #article-box-content
    {
        border: 1px solid violet;
    }
    #article-box-code
    {
        border: 1px solid yellow;
    }
    #article-box-result
    {
        border: 1px solid green;
    }
</style>