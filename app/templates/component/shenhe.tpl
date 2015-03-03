{if $active=="shenhe"}
<!--质管部审核部分-->
<div class="row-fluid">
<div class="span12">
	<div class="widget-box">
		<div class="widget-title">
			<span class="icon">
				<i class="icon-align-justify"></i>									
			</span>
			<h5>第三步：质量管理部经理审核意见</h5>
		</div>
		<div class="widget-content nopadding">
			<form class="form-horizontal" method="post" action="control.php?cid=shenhe" />
				<div class="control-group">
					<label class="control-label">意见</label>
					<div class="controls">
						<label ><input type="radio" name="approve" value="同意" required/> 同意</label>
						<label><input type="radio" name="approve" value="不同意" required/>  不同意</label>	
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">签字</label>
					<div class="controls">
						<input type="text" name="approvename" value="温永生" readonly="readonly"/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">时间</label>
					<div class="controls">
						<input type="text" name="approvedate" value="{date("Y-m-d")}" readonly="readonly" />
					</div>
				</div>		
				<div class="form-actions">
					<input type="submit" value="保存" class="btn btn-primary" />
					<input type="reset" value="取消" class="btn btn-danger" />
				</div>
			   </form>
				</div>	
		</div>
	</div>			
</div>

{else}
<!--质管部审核部分-->
<div class="row-fluid">
<div class="span12">
	<div class="widget-box">
		<div class="widget-title">
			<span class="icon">
				<i class="icon-align-justify"></i>									
			</span>
			<h5>第三步：质量管理部经理审核意见</h5>
		</div>
		<div class="widget-content nopadding">
			<form class="form-horizontal" />
			{foreach $rows as $bb}
			{if $bb.approve ne ''}
			{foreach $rows as $cc}
				<div class="control-group">
					<label class="control-label">意见</label>
					<div class="controls">
						<label style="margin-top:5px; color:gray;">{$cc.approve}</label>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">签字</label>
					<div class="controls">
						<label style="margin-top:5px; color:gray;">{$cc.approvename}</label>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">时间</label>
					<div class="controls">
						<label style="margin-top:5px; color:gray;">{$cc.approvedate}</label>
					</div>
				</div>		
				</div>
				{/foreach}
					{else}
					{/if}
		        {/foreach}
			</form>
		</div>
	</div>			
</div>
{/if}