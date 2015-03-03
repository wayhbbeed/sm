<!--{*按钮*}-->
{if true}
<div class="btn-group">
    <a class="btn tip-bottom" title="查询全部任务" href="control.php?cid=renwu_all" ><i class=" icon-bell"></i>  查询全部</a>
</div>
{/if}
 <div class="btn-group">
    <a class="btn tip-bottom" title="根据条件查询" href="#myAlert" data-toggle="modal"><i class="icon-user"></i>  条件查询</a>	
</div>
<div class="btn-group">
	  <button class="btn"><i class="icon-heart"></i>  快捷查询</button>
	  <button data-toggle="dropdown" class="btn dropdown-toggle"><span class="caret"></span></button>
	  <ul class="dropdown-menu">
		<li><a href="control.php?cid=renwu_me">我的任务</a></li>
		<li><a href="control.php?cid=renwu_me_in">我未完成任务</a></li>
		<li class="divider"></li>
		<li><a href="control.php?cid=renwu01_me_end">我通过审核的任务</a></li>
		<li><a href="control.php?cid=renwu01_me_end">我已结束的任务</a></li>
	  </ul>
</div><!-- /btn-group -->


<!--表格-->
<div class="row-fluid">
	<div class="span12">
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon">
					<i class="icon-th"></i>
				</span>
				<h5>任务查询</h5>
			</div>
			<div class="widget-content nopadding" style="overflow:auto">
				<table class="table table-bordered table-striped" >
					<thead>
						<tr>
							<th>单据编号</th>
							<th>错误单据号</th>
							<th>申请部门</th>
							<th>申请原因</th>
							<th>申请人</th>
							<th>申请时间</th>
							<th>状态</th>
							<th>操作</th>
						</tr>
					</thead>
					<tbody>
					  {foreach $all_task as $all}
						<tr>
							<td >{$all.appno}</td>
							<td >{$all.eno}</td>
							<td >{$all.egroup}</td>
							<td style="width:400px;">{$all.ereason}</td>
							<td >{$all.ename}</td>
							<td >{$all.edate}</td>
							{if $all.nowstep==3}
							<td ><span class="label label-info">通过审核</span></td>
							{elseif $all.nowstep==4}
							<td ><span class="label label-inverse">任务完成</span></td>
							{elseif $all.nowstep==1 }
							<td ><span class="label label-important">处理中...</span></td>
							{elseif $all.nowstep==2}
							<td ><span class="label label-success">同意修改</span></td>
							{/if}
							<td >
							    <a class="btn btn-mini" href="control.php?cid=renwu_xiangqing&appid={$all.appid}"><i class="icon icon-circle-arrow-right"></i>详情</a>
								<a class="btn btn-mini"><i class="icon icon-wrench"></i>处理</a>
								<a class="btn btn-mini"><i class="icon icon-remove"></i>删除</a>
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
<div id="myAlert" class="modal fade hide " data-backdrop="static">
	<div class="modal-header">
		<button data-dismiss="modal" class="close" type="button">×</button>
		<h3>条件查询</h3>
	</div>
	<div class="modal-body">
		
		<form class="form-horizontal" method="post" action="control.php?cid=renwu_tiaojian" >
			
				 <div class="control-group">
					<label class="control-label" >单据编号</label>
				    <div class="controls">
						<input type="text" name="appno" value="" />
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" >申请部门</label>
					<div class="controls">
						<select style="width:150px;"  name="egroup">
						    <option />
							<option />业务部
							<option />质量管理部
							<option />财务部
							<option />销售二部
						</select>
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label">错误单据编号</label>
					<div class="controls">
						<input type="text" name="eno"  placeholder="输入完整的单据号"/>
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" >申请人</label>
					<div class="controls">
						<input type="text" name="ename" value="" />
					</div>
				</div>
				
				<div class="form-actions pull-left">
					<input type="submit" value="查询" class="btn btn-primary" />
					<a data-dismiss="modal" class="btn btn btn-danger" href="#">取消</a>
				</div>
				
			   </form>
		</div>
</div>