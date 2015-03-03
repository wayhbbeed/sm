{extends file='../layout/layout_main.tpl'}
{block name=content}
<div class="row-fluid">
<div class="span6">
	<div class="widget-box">
		<div class="widget-title">
			<span class="icon">
				<i class="icon-user"></i>
			</span>
			<h5>添加权限</h5>
		</div>
		<div class="widget-content nopadding">
			<form class="form-horizontal" method="post" action="../control/control_users.php?uid=addperm" >
			
				 <div class="control-group">
					<label class="control-label" >名称</label>
				    <div class="controls">
						<input type="text" name="name"  />
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" >URL</label>
					<div class="controls">
						<input type="text" name="url" />
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" >标题</label>
					<div class="controls">
						<input type="text" name="tilte" />
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" >ICON</label>
					<div class="controls">
						<input type="text" name="icon" />
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" >PID</label>
					<div class="controls">
						<input type="text" name="pid" />
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" >类型</label>
					<div class="controls">
						<select  name="type">
							<option />1
							<option />2
							<option />3
							<option />4
						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" >备注</label>
					<div class="controls">
						<select  name="info">
						    <option />1-模块
							<option />2-菜单
							<option />3-隐藏页面
							<option />4-按钮
						</select>
					</div>
				</div>

					<div class="control-group">
					<label class="control-label" >状态</label>
					<div class="controls">
						<select  name="info">
						    <option />1
							<option />0
						</select>
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