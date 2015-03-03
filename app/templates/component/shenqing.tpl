{if $active == "shenqing"}
<!--{*填写部分 申请*}-->

<div class="row-fluid">
<div class="span12">
	<div class="widget-box">
		<div class="widget-title">
			<span class="icon">
				<i class="icon-align-justify"></i>									
			</span>
			<h5>第一步：填写申请</h5>
		</div>
		<div class="widget-content nopadding">
			<form class="form-horizontal" method="post" action="control.php?cid=shenqing" id="shenqingform">
			
				 <div class="control-group">
					<label class="control-label" >单据编号</label>
				    <div class="controls">
						<input type="text" name="appno" value="{$thedate}" readonly/>
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" >申请部门</label>
					<div class="controls">
						<select style="width:150px;"  name="egroup" required>
						    <option />
							<option />业务部
							<option />质量管理部
							<option />财务部
							<option />销售二部
						</select>
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label"><span style="color:#FF4040;">★</span>    错误单据编号</label>
					<div class="controls">
						<input type="text" name="eno"  placeholder="输入完整的单据号" required/>
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label"><span style="color:#FF4040;">★</span>  修改原因及内容</label>
					<div class="controls">
						<textarea placeholder="简要说明原因" name="ereason"rows="5" required></textarea>
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" >申请人</label>
					<div class="controls">
						<input type="text" name="ename" value="吴丽霞" readonly="readonly"/>
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" >申请时间</label>
				<div class="controls">
						<input type="text" name="edate" value="{date("Y-m-d")}" readonly="readonly" />
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


{else}
<!--填写部分 只显示-->
{if $active == "control"}
<div class="alert alert-success" >
	<button class="close" data-dismiss="alert">×</button>
	<strong>保存成功！</strong> 进入&nbsp;&nbsp;<a class="btn tip-bottom btn-mini" title="查询任务进度" href="renwu.php" >任务查询</a>&nbsp;&nbsp;可以查询审核进度。
</div>
{/if}
<div class="row-fluid">
<div class="span12">
	<div class="widget-box">
		<div class="widget-title">
			<span class="icon">
				<i class="icon-align-justify"></i>									
			</span>
			<h5>第一步：申请内容</h5>
		</div>
		<div class="widget-content nopadding">
			<form class="form-horizontal" >
			 {foreach $rows as $cc}
				 <div class="control-group">
					<label class="control-label" >单据编号</label>
				    <div class="controls">
					    <label style="margin-top:5px; color:gray;">{$cc.appno}</label>
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" >申请部门</label>
					<div class="controls">
						<label style="margin-top:5px; color:gray;">{$cc.egroup}</label>
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label">错误单据编号</label>
					<div class="controls">
						<label style="margin-top:5px; color:gray;">{$cc.eno}</label>
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label">修改原因及内容</label>
					<div class="controls">
						<label style="margin-top:5px; color:gray;">{$cc.ereason}</label>
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" >申请人</label>
					<div class="controls">
						<label style="margin-top:5px; color:gray;">{$cc.ename}</label>
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" >申请时间</label>
				<div class="controls">
					<label style="margin-top:5px; color:gray;">{$cc.edate}</label>
				</div>
				</div>
                {/foreach}
			   </form>
		</div>									
	</div>
	</div>			
</div>
{/if}