<h2 id="example">Book 1 : Marketing Essentials</h2>
<?php
foreach($chapters as $chapter){
?>

    <a href="/books/presentation/<?=$chapter[1]?>">Chapter <?=$chapter[1]?> --- <?=$chapter[0]?> </a> <br />
<?php
}
?>