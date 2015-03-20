{extends file='../layout/layout_main.tpl'}
{block name=content}
<!--{*按钮*}-->
<div class="btn-group" id="sys_tog">
     <a class="btn tip-bottom " title="查询全部任务" href="../control/control_users.php?uid=allusers" >查询</a>	
     <a class="btn tip-bottom " title="查询全部任务" href="../view/sys_users_add.php" >增加</a>
</div>

<!--表格-->
<div class="row-fluid">
<div class="span6">
<div class="widget-box">
<!-- <div class="widget-title">
	<span class="icon">
		<i class="icon-th"></i>
	</span>
	<h5>用户列表</h5>
</div> -->
<div class="widget-content nopadding">
	<table class="table table-hover" >
		<thead>
			<tr>
				<th>ID</th>
				<th>用户名</th>
				<th>密码</th>
				<th>所属部门</th>
				<th>职位</th>
				<th>状态</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
			{if isset($data)}
			{foreach $data as $a}
			<tr>
				<td>{$a.id}</td>
				<td>{$a.username}</td>
				<td>******</td>
				<td>{$a.name}</td>
				<td>{$a.position}</td>
				{if $a.live eq 1}
				<td><a href="../control/control_users.php?uid=changlive&id={$a.id}&live=1"><span class="label label-success">启用</span></a></td>
				{else}
				<td><a href="../control/control_users.php?uid=changlive&id={$a.id}&live=0"><span class="label label-important">禁用</span></a></td>
				{/if}
				<td>
					<a href="" style="font-size:12px;">编辑</a>
					<a href="" style="font-size:12px;">删除</a>
				</td>
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