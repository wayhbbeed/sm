{extends file='../layout/layout_main.tpl'}
{block name=content}
<div class="row-fluid">
<div class="span6">
	<div class="widget-box">
		<div class="widget-title">
			<span class="icon">
				<i class="icon-user"></i>
			</span>
			<h5>添加用户</h5>
		</div>
		<div class="widget-content nopadding">
			<form class="form-horizontal" method="post" action="../control/control_users.php?uid=addusers" id="shenqingform">
			
				 <div class="control-group">
					<label class="control-label" >用户名</label>
				    <div class="controls">
						<input type="text" name="username"  required/>
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" >密码</label>
					<div class="controls">
						<input type="password" name="password" required/>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" >状态</label>
					<div class="controls">
						<select style="width:150px;"  name="egroup" required>
						    <option />1
							<option />0
						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" >所属角色</label>
					<div class="controls">
						<select style="width:150px;"  name="egroup" required>
							{foreach $data as $d}
						    	<option />{$d.name}({$d.position})
						    {/foreach}
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
{block name=footer_js}
<script src="../public/js/unicorn.form_common.js"></script>
{/block}