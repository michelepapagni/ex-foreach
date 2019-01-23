<?php

    $posts = [
        '01/01/2019' => [
            [
                'text' => 'Post numero 1 di Gennaio',
                'author' => 'Michele Papagni'
            ],
            [
                'text' => 'Post numero 2 di Gennaio',
                'author' => 'Michele Papagni'
            ],
        ],
        '25/02/2019' => [
            [
                'text' => 'Post numero 3 di Febbraio',
                'author' => 'Fabio Forghieri'
            ],
            [
                'text' => 'Post numero 4 di Febbraio',
                'author' => 'Michele Papagni'
            ],
        ]
    ];

?>

<ul>
    <?php foreach ($posts as $date => $datePosts) { ?>
        <li>
            <?php echo $date; ?>
            <ul>
                <?php foreach ($datePosts as $post) { ?>
                    <li><?php echo $post['text']; ?></li>
                <?php }?>
            </ul>
        </li>
    <?php } ?>
</ul>

<!-- <ul>
    <li>
        <h1>1 Gennaio</h1>
        <ul>
            <li>Post numero 1</li>
            <li>Post numero 2</li>
        </ul>
    </li>
    <li>
        <h1>25 Febbraio</h1>
        <ul>
            <li>Post numero 3</li>
            <li>Post numero 4</li>
        </ul>
    </li>
</ul> -->
