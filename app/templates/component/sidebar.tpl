<div id="sidebar">
	<a href="#" class="visible-phone"><i class="icon icon-home"></i> 首页</a>
	<ul>
		<li id="main"><a href="main.php"><i class="icon icon-home"></i> <span>首页</span></a></li>
		<li class="submenu">
			<a href="#"><i class="icon icon-th-list"></i> <span>计算机信息修改</span></a>
			{if $smarty.session.auth ne null}
			<ul id="list">
				{foreach $smarty.session.auth as $au}
				<li id="{$au.name}"><a href="{$au.url}">{$au.title}</a></li>
				{/foreach}
			</ul>
			{/if}
		</li>
		<li id="guanli"><a href="#"><i class="icon icon-user"></i> <span>客户管理</span></a></li>
		<li id="guanli"><a href="#"><i class="icon icon-tint"></i> <span>系统管理</span></a></li>
	</ul>

</div>

