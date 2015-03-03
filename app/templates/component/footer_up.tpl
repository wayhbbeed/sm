<div class="row-fluid">
	<div id="footer" class="span12">
		{if isset($smarty.session.se_name)}
		用户：{$smarty.session.se_name}
		{*&nbsp;&nbsp;&nbsp;&nbsp;
		部门：{$smarty.session.auth[0].rolename}*}
		{else}
		请登录
		{/if}
	</div>
</div>