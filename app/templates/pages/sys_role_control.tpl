{extends file='../layout/layout_main.tpl'}
{block name=content}
<!--{*按钮*}-->
<div class="btn-group" id="sys_tog">
     <a class="btn tip-bottom" title="查询全部任务" href="../control/control_users.php?uid=allrole" >查询</a>	
</div>
<div class="btn-group">
    <a class="btn tip-bottom" title="查询全部任务" href="../view/sys_role_add.php" >增加</a>
</div>

<!--表格-->
<div class="row-fluid">
<div class="span12">
<div class="widget-box">
<div class="widget-title">
	<span class="icon">
		<i class="icon-th"></i>
	</span>
	<a href=""><span class="label label-success">增</span></a>
	<a href=""><span class="label label-info">删</span></a>
	<a href=""><span class="label label-danger">改</span></a>
	<a href=""><span class="label label-warning">查</span></a>
</div>
<div class="widget-content nopadding">
	<table class="table table-hover data-table" >
		<thead>
			<tr>
				<th>模块</th>
				<th>权限</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style="width:100px;">首页</td>
				<td >
					<div style="float:left;width:140px;"><input type="checkbox" checked="checked" disabled/>首页</div>
				</td>
			</tr>
			{foreach $data_mod as $dm}
			<tr>
				<td style="width:100px;">{$dm.title}({$dm.id})</td>
				<td >
					{foreach $data_menu as $de}
					{if $dm.id eq $de.pid}
					<div style="float:left;width:140px;"><input type="checkbox"/>{$de.title}({$de.pid})</div>
					{/if}
					{/foreach}
				</td>
			</tr>
			{/foreach}
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
<script src="../public/js/jquery.dataTables.min.js"></script>
<script src="../public/js/unicorn.tables.js"></script>
{/block}