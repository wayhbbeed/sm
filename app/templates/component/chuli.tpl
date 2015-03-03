{if $active=="chuli"}
<!--*处理方法部分-->
<div class="row-fluid">
<div class="span12">
	<div class="widget-box">
		<div class="widget-title">
			<span class="icon">
				<i class="icon-align-justify"></i>									
			</span>
			<h5>第二步：处理方法</h5>
		</div>
		<div class="widget-content nopadding">
			<form class="form-horizontal" method="post" action="control.php?cid=chuli" >
				<div class="control-group">
					<label class="control-label">处理方法</label>
					<div class="controls">
						<textarea placeholder="简要说明原因" name="method" rows="5;" required></textarea>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" >处理人</label>
					<div class="controls">
						<input type="text" name="methodname" value="王程" readonly="readonly"/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" >时间</label>
				<div class="controls">
						<input type="text" name="methoddate" value="{date("Y-m-d")}" readonly="readonly"/>
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
<!--处理方法部分 只显示-->
<div class="row-fluid">
<div class="span12">
	<div class="widget-box">
		<div class="widget-title">
			<span class="icon">
				<i class="icon-align-justify"></i>									
			</span>
			<h5>第二步：处理方法</h5>
		</div>
		<div class="widget-content nopadding">
			<form class="form-horizontal">
			{foreach $rows as $bb}
				{if $bb.method ne ''}
					{foreach $rows as $cc}
						<div class="control-group">
							<label class="control-label">处理方法</label>
							<div class="controls">
								<label style="margin-top:5px; color:gray;">{$cc.method}</label>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">签字</label>
							<div class="controls">
								<label style="margin-top:5px; color:gray;">{$cc.methodname}</label>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">时间</label>
							<div class="controls">
								<label style="margin-top:5px; color:gray;">{$cc.methoddate}</label>
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
</div>
{/if}