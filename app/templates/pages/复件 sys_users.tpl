{extends file='../layout/layout_main.tpl'}
{block name=content}
<!--{*按钮*}-->
<div class="btn-group" id="sys_tog">
    <a class="btn tip-bottom" title="展开 / 收起" href="#"><i class="icon-plus"></i></a>
     <a class="btn tip-bottom" title="查询全部任务" href="../control/control_users.php?uid=allusers" >查询</a>	
</div>
<div class="btn-group">
    <a class="btn tip-bottom" title="查询全部任务" href="../control/control_users.php?uid=allusers" >增加</a>
</div>

<!--{*查询界面*} -->
<div class="row-fluid" id="sys_query_face" style="display:none;">
<div class="span6">
	<div class="widget-box">
		<div class="widget-content nopadding">
			<form class="form-horizontal" method="post" action="{#_CONTROL#}controlComputer.php?cid=shenqing" id="shenqingform">
			
				 <div class="control-group">
					<label class="control-label" >单据编号</label>
				    <div class="controls">
						<input type="text" name="appno" placeholder="" />
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" >申请部门</label>
					<div class="controls">
						<input type="text" name="appno" placeholder="" />
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label">错误单据编号</label>
					<div class="controls">
						<input type="text" name="eno"  placeholder="输入完整的单据号" required/>
					</div>
				</div>
				
				<div class="form-actions">
					<input type="submit" value="查询" class="btn"/>
					<a class="btn tip-bottom" title="查询全部任务" href="../control/control_users.php?uid=allusers" >查询</a>
				</div>
				
			   </form>
		</div>									
	</div>
	</div>			
</div>

<!--表格-->
<div class="row-fluid">
	<div class="span8">
		<div class="widget-box">
			<!-- <div class="widget-title">
				<span class="icon">
					<i class="icon-th"></i>
				</span>
				<h5>用户列表</h5>
			</div> -->
			<div class="widget-content nopadding">
				<table class="table table-bordered table-striped table-hover" >
					<thead>
						<tr>
							<th>用户名</th>
							<th>密码</th>
							<th>状态</th>
							<th>操作</th>
						</tr>
					</thead>
					<tbody>
						{if isset($data)}
						{foreach $data as $a}
						<tr>
							<td>{$a.username}</td>
							<td>******</td>
							{if $a.live eq 1}
							<td><span class="label label-success">启用</span></td>
							{else}
							<td><span class="label label-important">禁用</span></td>
							{/if}
							<td></td>
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