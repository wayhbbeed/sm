
{foreach $rows as $cc}
{if $cc.nowstep==1}
<div class="alert alert-info" >
	<button class="close" data-dismiss="alert">×</button>
	任务进行到： 填写申请  —→  <strong style="color:#EE2C2C;">处理方法</strong>  —→  质量管理部经理审核意见  —→  处理结果
</div>
{elseif $cc.nowstep==2}
<div class="alert alert-info" >
	<button class="close" data-dismiss="alert">×</button>
	任务进行到： 填写申请  —→  处理方法  —→  <strong style="color:#EE2C2C;">质量管理部经理审核意见</strong>  —→  处理结果
</div>
{elseif $cc.nowstep==3}
<div class="alert alert-info" >
	<button class="close" data-dismiss="alert">×</button>
	任务进行到： 填写申请  —→  处理方法  —→  质量管理部经理审核意见  —→  <strong style="color:#EE2C2C;">处理结果</strong>
</div>
{elseif $cc.nowstep==4}
<div class="alert alert-success" >
	<button class="close" data-dismiss="alert">×</button>
	<strong >任务已经完成！</strong> 
</div>
{/if}
{/foreach}