<a class="btn" href="control_users.php?uid=quit"><i class="icon-remove"></i>  退出系统</a>
<div class="row-fluid">
<div class="span12">
<div class="widget-box">
	<div class="widget-title">
		<span class="icon">
			<i class="icon-user"></i>
		</span>
		<h5>我的信息</h5>
	</div>
	<div class="widget-content">
		<div class="invoice-content">
			<div class="invoice-head">
				<div class="invoice-meta">
					欢迎你! <span class="invoice-number"><strong>{$smarty.session.se_name}</strong></span>
				</div>
			</div>
			<p class="amount-word">
				现在时间: <span>{date("Y-m-d H:i:s")}</span>
			</p>
			<h5>需知：</h5>
			<p>
				进入系统请保护好自己的密码，规范操作，若有疑问请咨询系统管理员。
			</p>
			<p class="help-block">
				<strong>提示:</strong> 系统会不定期自动升级完善，若遇到升级提示，请暂时不要使用系统功能，等待升级提示消失再使用。
			</p>
		</div>
	</div>
</div>
</div>
</div>
