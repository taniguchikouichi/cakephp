<h1>入力フォーム</h1>
  <?php echo $this->Form->create();?>
  	<p>ユーザー名</p>
  	<?php echo $this->Form->text('user.username');?>
  	<p>パスワード</p>
  	<?php echo $this->Form->text('user.password');?>
  	<?php echo $this->Form->end('send'); ?>
<?php if ($user != null): ?>
<p>変数$userの中身：<?php print_r($user); ?></p>
<?php endif; ?>
