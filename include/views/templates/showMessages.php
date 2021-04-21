<?php
echo "
<article>
<section>
<h4>
<a href='#?id={$row['id']}'>
نام کاربری: {$row['name']}
</a>
</h4>
<section>
<p>
<span>ایمیل :</span> {$row['email']}  <br>
<span>عنوان پیام :</span> {$row['title']}  <br>
<span>متن پیام :</span> {$row['body']}  <br>
<br>
</p>
</section>
</section>

</article>
";
?>