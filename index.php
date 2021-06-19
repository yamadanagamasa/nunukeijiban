<?php 
if(isset($_POST['text_sample'])) {  
$text = htmlspecialchars($_POST['text_sample'], ENT_QUOTES, 'UTF-8');
$flg = copy('index1.php',"sure/${text}.php" );
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Nunu Bulletin Board</title>
    <link href="https://unpkg.com/nes.css@latest/css/nes.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    <meta name="description" content="Nunu Bulletin Board">
        <meta property="og:url" content="https://yamadanagamasa.github.io/nunupages/index.html" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Nunu Bulletin Board" />    
        <link rel="shortcut icon" href="outline_article_black_24dp.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="outline_article_black_24dp.ico" sizes="180x180">
        <link rel="icon" type="image/png" href="outline_article_black_24dp.ico" sizes="192x192">
<style>
  .nes-container.is-centered {
  margin-right: 20%;
    margin-left: 20%;
    }
 .nes-container.is-rounded{
  margin-right: 20%;
    margin-left: 20%;
 }
    body {
      background-color: #eeeeee;
      text-align:center;
     font-family: "Press Start 2P";font-size: 16px;
  }
  HTML CSSResult Skip Results Iframe
  EDIT ON
  /* Sliding Squares Loading Spinner
     Inspired by https://www.uplabs.com/posts/slidin-squares-loader by Vitaly Silkin 
     Implemented in CSS by Tom Adey */
  .container {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .loadingspinner {
    --square: 26px;
    --offset: 30px;
    --duration: 2.4s;
    --delay: 0.2s;
    --timing-function: ease-in-out;
    --in-duration: 0.4s;
    --in-delay: 0.1s;
    --in-timing-function: ease-out;
    width: calc( 3 * var(--offset) + var(--square));
    height: calc( 2 * var(--offset) + var(--square));
    padding: 0px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 10px;
    margin-bottom: 30px;
    position: relative;
  }
  .loadingspinner div {
    display: inline-block;
    background: darkorange;
    /*background: var(--text-color);*/
    /*box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4);*/
    border: none;
    border-radius: 2px;
    width: var(--square);
    height: var(--square);
    position: absolute;
    padding: 0px;
    margin: 0px;
    font-size: 6pt;
    color: black;
  }
  .loadingspinner #square1 {
    left: calc( 0 * var(--offset) );
    top:  calc( 0 * var(--offset) );
    animation: square1 var(--duration) var(--delay) var(--timing-function) infinite,
               squarefadein var(--in-duration) calc(1 * var(--in-delay)) var(--in-timing-function) both;
  }
  .loadingspinner #square2 {
    left: calc( 0 * var(--offset) );
    top:  calc( 1 * var(--offset) );
    animation: square2 var(--duration) var(--delay) var(--timing-function) infinite,
              squarefadein var(--in-duration) calc(1 * var(--in-delay)) var(--in-timing-function) both;
  }
  
  .loadingspinner #square3 {
    left: calc( 1 * var(--offset) );
    top:  calc( 1 * var(--offset) );
    animation: square3 var(--duration) var(--delay) var(--timing-function) infinite,
               squarefadein var(--in-duration) calc(2 * var(--in-delay)) var(--in-timing-function) both;
  }
  .loadingspinner #square4 {
    left: calc( 2 * var(--offset) );
    top:  calc( 1 * var(--offset) );
    animation: square4 var(--duration) var(--delay) var(--timing-function) infinite,
               squarefadein var(--in-duration) calc(3 * var(--in-delay)) var(--in-timing-function) both;
  }
  .loadingspinner #square5 {
    left: calc( 3 * var(--offset) );
    top:  calc( 1 * var(--offset) );
    animation: square5 var(--duration) var(--delay) var(--timing-function) infinite,
               squarefadein var(--in-duration) calc(4 * var(--in-delay)) var(--in-timing-function) both;
  }
  @keyframes square1 {
    0%      {left: calc( 0 * var(--offset) ); top: calc( 0 * var(--offset) ); }
    8.333%  {left: calc( 0 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    100%    {left: calc( 0 * var(--offset) ); top: calc( 1 * var(--offset) ); }
  }
  @keyframes square2 {
    0%      {left: calc( 0 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    8.333%  {left: calc( 0 * var(--offset) ); top: calc( 2 * var(--offset) ); }
    16.67%  {left: calc( 1 * var(--offset) ); top: calc( 2 * var(--offset) ); }
    25.00%  {left: calc( 1 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    83.33%  {left: calc( 1 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    91.67%  {left: calc( 1 * var(--offset) ); top: calc( 0 * var(--offset) ); }
    100%    {left: calc( 0 * var(--offset) ); top: calc( 0 * var(--offset) ); }
  }
  @keyframes square3 {
    0%,100% {left: calc( 1 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    16.67%  {left: calc( 1 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    25.00%  {left: calc( 1 * var(--offset) ); top: calc( 0 * var(--offset) ); }
    33.33%  {left: calc( 2 * var(--offset) ); top: calc( 0 * var(--offset) ); }
    41.67%  {left: calc( 2 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    66.67%  {left: calc( 2 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    75.00%  {left: calc( 2 * var(--offset) ); top: calc( 2 * var(--offset) ); }
    83.33%  {left: calc( 1 * var(--offset) ); top: calc( 2 * var(--offset) ); }
    91.67%  {left: calc( 1 * var(--offset) ); top: calc( 1 * var(--offset) ); }
  }
  @keyframes square4 {
    0%      {left: calc( 2 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    33.33%  {left: calc( 2 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    41.67%  {left: calc( 2 * var(--offset) ); top: calc( 2 * var(--offset) ); }
    50.00%  {left: calc( 3 * var(--offset) ); top: calc( 2 * var(--offset) ); }
    58.33%  {left: calc( 3 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    100%    {left: calc( 3 * var(--offset) ); top: calc( 1 * var(--offset) ); }
  }
  @keyframes square5 {
    0%      {left: calc( 3 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    50.00%  {left: calc( 3 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    58.33%  {left: calc( 3 * var(--offset) ); top: calc( 0 * var(--offset) ); }
    66.67%  {left: calc( 2 * var(--offset) ); top: calc( 0 * var(--offset) ); }
    75.00%  {left: calc( 2 * var(--offset) ); top: calc( 1 * var(--offset) ); }
    100%    {left: calc( 2 * var(--offset) ); top: calc( 1 * var(--offset) ); }
  }
  @keyframes squarefadein {
    0%      {transform: scale(0.75); opacity: 0.0;}
    100%    {transform: scale(1.0); opacity: 1.0;}
  }
</style>
</head>
<body>
  <!-- 1. ヘッダ -->
  <!-- heroコンポーネント -->
  <section class="hero is-dark">
    <div class="hero-body">
      <div class="container">
        <h1 class="title">
        <span class="nes-text is-primary">
        Nunu Bulletin Board
        </span>
        </h1>
        </div>
<br><br>
        </h1>    
        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw"  class="nes-icon twitter " data-show-count="false"></a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        <a href="index.php"  class="nes-text is-error">home</a> 
              <a href="about.html"  class="nes-text is-error">about</a>
 </div>
    </div>
  </section>
  <br>
  <br>
  <br>
  <br>
  <br>

<div class="nes-container is-rounded is-dark">
  <p>Thank you for using this bulletin board.<br><br>
  
<span class="nes-text is-success">news:</span>You can now set up threads.</p>
  <div class="container">
    <div class="loadingspinner">
      <div id="square1"></div>
      <div id="square2"></div>
      <div id="square3"></div>
      <div id="square4"></div>
      <div id="square5"></div>
    </div>
  </div>
</div>
<br><br><br><br><br>
  <div class="nes-container is-rounded"> 
  <h1 class="nes-text is-primary">Thread list</h1>
  <?php 
$result = glob('sure/*.php');
foreach($result as $file){ 
  $str = str_replace('.php', '', $file);
  $str = str_replace('sure/', '', $str);
  echo "<br>";
  echo "<a href=${file}>●${str}</a>";
  echo "<br>";
}
?>
</div>
<br><br><br><br>
  <div class="nes-container is-rounded">
    <h2 class = "nes-text is-primary">Thread creation</h2><br>
    <form action="" method="post">
   <label class="nes-field">Name</label><br>
    <form method="post" action="" class="form_sample">
      <input class="nes-input" type="text" name="text_sample" size="20" value="<?= $text ?>"><br><br>
    <input class="nes-btn is-success"  type="submit" value="create">
    </form>
</div>
<footer class="footer">
    <div class="content has-text-centered">
      <a href="https://yamadanagamasa.github.io/nunupages/"> © nunu.</a>
      </p>
    </div>
  </footer>
</body>
</html>