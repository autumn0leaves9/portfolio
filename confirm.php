<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BANBOO EFFECTS</title>
    <link rel="stylesheet" href="SoundCreateCSS.css" >
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  </head>
  <body link="#fff" vlink="#fff" alink="blue">
    <header>
      <div class="logo"><a href="SoundCreate.html" style="text-decoration:none;">BANBOO EFFECTS</div>
      <ul class="headerli">
        <li><a href="effect.html">Effects</a></li>
        <li><a href="youtube.html">YouTube</a></li>
        <li><a href="contact.php">Contact</a></li>
		<li><a href="https://twitter.com/Under_Bamboo_TL?s=20">Twitter</a></li>
		
      </ul>
    </header>
	
	<div class="main">
	
	  
	  <div class="contact-form">
        <h3 class="contact-title">内容確認</h3>
		<?php
		mb_language("Japanese");
		mb_internal_encoding("UTF-8");
		?>
		<div class="form-item">■ 名前</div>
		<?php echo $_POST['name'];
		$name = $_POST['name'];?>
		
        <div class="form-item">■ メールアドレス</div>
		<?php echo $_POST['email'];
		$mail = $_POST['email'];?>
        
        <div class="form-item">■ 内容</div>
		<?php echo $_POST['body'];
		$body = $_POST['body'];?>
		
		
		
		<?php
		if(mb_send_mail($name, $mail, $body)){
        echo "メールを送信しました";
      } else {
        echo "メールの送信に失敗しました";
      };?>
		<input class="contact-submit" type="submit" value="送信">
        
      </div>
	  
    </div>
	
	<footer>
     <div class="footer-logo">松竹</div>
      
	
  </body>
</html>
