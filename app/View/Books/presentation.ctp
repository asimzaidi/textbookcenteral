<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Anna's Book</title>

    <?php //echo  $this->Html->css('style-projects-jquery'); ?>
    <!-- Arquivos utilizados pelo jQuery lightBox plugin -->

    <?php echo $this->Html->script('jquery'); ?>
    <?php echo  $this->Html->script('jquery.lightbox-0.5.js'); ?>
    <?php echo $this->Html->css('jquery.lightbox-0.5.css'); ?>



    <!-- Ativando o jQuery lightBox plugin -->
    <script type="text/javascript">
        $(function() {
            //$('#gallery a').lightBox();
            $('#gallery a').lightBox( {maxHeight: 700, maxWidth: 700});
        });
    </script>
    <style type="text/css">
            /* jQuery lightBox plugin - Gallery style */
        #gallery {
            background-color: #444;
            padding: 10px;
            width: 700px;
        }

        #gallery a{
            maxHeight: 400;
            maxWidth: 300
        }


        #gallery ul {
            list-style: none;
        }

        #gallery ul li {
            display: inline;
        }

        #gallery ul img {
            border: 5px solid #3e3e3e;
            border-width: 5px 5px 20px;
        }

        #gallery ul a:hover img {
            border: 5px solid #fff;
            border-width: 5px 5px 20px;
            color: #fff;
        }

        #gallery ul a:hover {
            color: #fff;
        }
    </style>
</head>

<body>
<h2 id="example">Chapter <?=$chapter?> --- <?=$chapterName?></h2>
<p>Click the pages in the gallery below to start the book</strong>
    in action.</p>

<div id="gallery">
    <ul>

        <?php
        foreach($chapterArray as $page){
        ?>
            <li><a href="/book_1/ch<?=$chapter?>/<?=$page?>.jpg"
               title="Marketing Essential">
                <img src="/book_1/ch<?=$chapter?>/<?=$page?>.jpg" width="72" height="72" alt="" /> </a>
        </li>

        <?
        }
        ?>
    </ul>
</div>

</body>
</html>
