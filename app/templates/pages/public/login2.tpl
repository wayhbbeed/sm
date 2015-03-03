{extends file='../../layout/layout_login.tpl'}
{block name=content}
<div id="content-header">
<h1>四川联成迅康</h1>	
</div>

<div class="container-fluid">
<div class="row-fluid">
<div class="span12">
<div class="widget-box" style="padding:0xp;">
<img src="img/002.jpg" style="margin:0px;padding:0xp;"/>
</div>						
</div>
</div>

<div class="row-fluid">							
<div class="span12">
<div class="widget-box">
<div class="widget-title">
<span class="icon">
	<i class="icon-align-justify"></i>									
</span>
<h5>用户登陆</h5>
</div>
<div class="widget-content nopadding" >
<form action="{#url#}/controlUsers.php?uid=login" method="post" class="form-horizontal" id="loginform">

	<div class="control-group">
		<label class="control-label">选择用户名</label>
		<div class="controls">
			<select   name="username" id="username" style="width:80px;" >
			{foreach $users as $user}
				<option />{$user.username}
			{/foreach}
			</select>
		</div>
	</div>
	
	<div class="control-group">
		<label class="control-label">输入密码</label>
		<div class="controls">
			<input type="password" name="password" required style="width:170px;"  />
		</div>
	</div>
	
	<div class="form-actions">
		<button type="submit" class="btn btn-primary" >登陆</button>
		<button type="reset" class="btn btn-danger" >取消</button>
		<button type="reset" class="btn btn-info" >没有账户?</button>
	</div>
	
</form>
</div>
</div>						
</div>
</div>
{/block}				


