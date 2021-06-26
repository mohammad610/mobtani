<?php
echo "
<article>
            <img src='{$row[imgSrc]}'>
            <h2>{$row['name']}</h2>
            <p> {$row['description'] }</p> 
            <a href = 'editProduct.php?id={$row['id']}' class = 'btn btn-primary'>ویرایش</a>
            <a href = 'deleteProduct.php?id={$row['id']}' class = 'btn btn-primary'>حذف</a>
            </article>
            

";
?>