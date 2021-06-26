<?php
echo "
<article>
<section>
<h4>
<a href='#?id={$row['id']}'>
نام کاربری: {$row['userr']}
</a>
</h4>
<section>
<p>
<span>رمز عبور :</span> {$row['pass']}  <br>
<span>ایمیل :</span> {$row['emaill']}  <br>
<span>شماره همراه :</span> {$row['mobile']}  <br>
<br>
</p>
</section>
</section>

</article>
";
?>