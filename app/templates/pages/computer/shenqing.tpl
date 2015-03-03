{extends file='../../layout/layout_main.tpl'}
{block name=content}
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
			<form class="form-horizontal" method="post" action="{#_CONTROL#}controlComputer.php?cid=shenqing" id="shenqingform">
			
				 <div class="control-group">
					<label class="control-label" >单据编号</label>
				    <div class="controls">
						<input type="text" name="appno" value="{$thedate}" readonly/>
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" >申请部门</label>
					<div class="controls">
						<input type="text" name="appno" value="{$smarty.session.menus[0].rolename}" readonly/>
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
						<input type="text" name="ename" value="{$smarty.session.se_name}" readonly="readonly"/>
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
{/block}