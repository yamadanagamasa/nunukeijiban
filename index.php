
<?php
function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
date_default_timezone_set('Asia/Tokyo');
session_start(); // 1
$hizuke = date("Y/m/d H:i:s") . "\n";
$name = (string)filter_input(INPUT_POST, 'name'); 
$text = (string)filter_input(INPUT_POST, 'text');
$token = (string)filter_input(INPUT_POST, 'token'); // 3

$fp = fopen('data.csv', 'a+b');
if ($_SERVER['REQUEST_METHOD'] === 'POST' && sha1(session_id()) === $token) { // 3
    flock($fp, LOCK_EX);
    fputcsv($fp, [$name, $text,$hizuke]);
    rewind($fp);
}
flock($fp, LOCK_SH);
while ($row = fgetcsv($fp)) {
    $rows[] = $row;
}
flock($fp, LOCK_UN);
fclose($fp);

?>
<div class= "box8">
<!DOCTYPE html>
<meta charset="UTF-8">
<link rel="stylesheet" href="keiji.css">
<?php
readfile('osirase.txt');
?>
<title>ぬぬ掲示板</title>

<h1>ぬぬ掲示板</h1>
<section>
    <h2>新規投稿</h2>
    <form action="" method="post">
        名前: <input type="text" name="name" value=""><br>
        本文: <input type="text" name="text" value=""><br>
        <button type="submit">投稿</button>
        <input type="hidden" name="token" value="<?=h(sha1(session_id())) /*2*/ ?>">
    </form>
</section>
<section>
    <h2>投稿一覧</h2>

    <div class="hyou">
<?php if (!empty($rows)): ?>
    <ul>
<?php foreach ($rows as $row): ?>
        <li><?=h($row[1])?> (<?=h($row[0])?>)</li>
<?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>投稿はまだありません</p>
<?php endif; ?>
</div>
</div>
<div class="footer">
            <div class="footer-left">
                <p>このサイトをシェア</p>
                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-text="nunu" data-url="https://yamadanagamasa.github.io/nunupages/" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div class="footer-right">
                &copy; nunu.
             </div>
            <div class="clear"></div>
        </div>
</section>