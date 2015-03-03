{extends file='../layout/layout_main.tpl'}
{block name=content}
<div class="row-fluid">
<div class="span6">
	<div class="widget-box">
		<div class="widget-title">
			<span class="icon">
				<i class="icon-user"></i>
			</span>
			<h5>添加角色</h5>
		</div>
		<div class="widget-content nopadding">
			<form class="form-horizontal" method="post" action="../control/control_users.php?uid=addrole">
			
				 <div class="control-group">
					<label class="control-label" >部门</label>
				    <div class="controls">
						<input type="text" name="username"  />
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" >职位</label>
					<div class="controls">
						<input type="text" name="password" />
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" >状态</label>
					<div class="controls">
						<input type="text" name="live" />
					</div>
				</div>
				
				<div class="form-actions">
					<input type="submit" value="保存" class="btn btn-primary"/>
					<input type="reset" value="取消" class="btn btn-danger" />
				</div>
				
			   </form>
		</div>									
	</div>
	</div>			
</div>
{/block}