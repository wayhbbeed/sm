{extends file='../layout/layout_main.tpl'}
{block name=content}
<!--{*按钮*}-->
<div class="btn-group" id="sys_tog">
   <a class="btn  tip-bottom" title="查询权限" href="../control/control_users.php?uid=allperm" ><i class="icon-th-large"></i> 查询</a>	
   <a class="btn  tip-bottom" title="添加权限" href="../view/sys_perm_add.php" ><i class="icon-plus"></i> 添加</a>
</div>

<!--表格-->
<div class="row-fluid">
<div class="span12">
<div class="widget-box">
<!-- <div class="widget-title">
	<span class="icon">
		<i class="icon-th"></i>
	</span>
	<h5>用户列表</h5>
</div> -->
<div class="widget-content nopadding" style="overflow:auto">
	<table class="table  table-hover" >
		<thead>
			<tr>
				<th>ID</th>
				<th>名称</th>
				<th>URL</th>
				<th>标题</th>
				<th>ICON</th>
				<th>PID</th>
				<th>类型</th>
				<th>备注</th>
				<th>状态</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
			{if isset($data)}
			{foreach $data as $a}
			<tr>
				<td>{$a.id}</td>
				<td>{$a.name}</td>
				<td>{$a.url}</td>
				<td>{$a.title}</td>
				<td>{$a.icon}</td>
				<td>{$a.pid}</td>
				<td>{$a.type}</td>
				<td>{$a.info}</td>
				{if $a.live eq 1}
				<td><span class="label label-success">正常</span></td>
				{else}
				<td><span class="label label-important">停用</span></td>
				{/if}
				{if $a.live eq 1}
				<td>
					<a href="../control/control_users.php?uid=changlive&id={$a.id}&live=0" style="font-size:12px;">禁用</a>
				</td>
				{else}
				<td>
					<a href="../control/control_users.php?uid=changlive&id={$a.id}&live=1" style="font-size:12px;">启用</a>
				</td>
				{/if}
			</tr>
			{/foreach}
			{/if}
		</tbody>
		
	</table>				
</div>	
</div>
<div class="pagination alternate">
	<ul>
		<li class="disabled"><a href="#">Prev</a></li>
		<li class="active">
			<a href="#">1</a>
		</li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">Next</a></li>
	</ul>
</div>
</div>
</div>

<!--模态框-->

{/block}
{block name=footer_js}
<script src="../public/js/system.js"></script>
{/block}