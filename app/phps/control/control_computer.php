
<?php
//初始化
require '../sm.inc.php';

$cid=$_REQUEST['cid'];
//根据条件控制
switch ($cid)
{
//申请页面-插入申请数据
case "shenqing":
		//插入数据
		$appno=$_REQUEST['appno'];
		$total=select_appno($appno);
		if($total==0){
		$egroup=$_REQUEST['egroup'];
		$eno=$_REQUEST['eno'];
		$ereason=$_REQUEST['ereason'];
		$ename=$_REQUEST['ename'];
		$edate=$_REQUEST['edate'];
		$nowstep='1';
		$sql='insert into approve(appno,egroup,eno,ereason,ename,edate,nowstep) values(?,?,?,?,?,?,?)';
		$values=array($appno,$egroup,$eno,$ereason,$ename,$edate,$nowstep);
		$lastid=insert($sql,$values);

		//模板属性
		$active="control";
		$conten_header="计算机信息系统修改-申请内容";
		$smarty->assign('active',$active);
		$smarty->assign('c_header',$conten_header);
		$smarty->assign('rows',select($lastid));

		if($lastid!=0){
			$smarty->display('shenqing.tpl');
		}
		}
		else {
		echo '单据重复提交';
		};
break;
//任务页面-处理方法
case "chuli":
	
	//修改数据
		$method=$_REQUEST['method'];
		$methodname=$_REQUEST['methodname'];
		$methoddate=$_REQUEST['methoddate'];
		$nowstep='2';
		$sql='update approve set method=?,methodname=?,methoddate=?,nowstep=? where appid=1';
		$values=array($method,$methodname,$methoddate,$nowstep);
		$count=update($sql,$values);

		//模板属性
		$active="control";
		$conten_header="计算机信息系统修改-处理方法";
		$smarty->assign('active',$active);
		$smarty->assign('c_header',$conten_header);
		$smarty->assign('rows',select(1));
		
		if($count!=0){
			$smarty->display('chuli.tpl');
		};
break;

//任务页面-审核
case "shenhe":
	
	//修改数据
		$approve=$_REQUEST['approve'];
		$approvename=$_REQUEST['approvename'];
		$approvedate=$_REQUEST['approvedate'];
		$nowstep='3';
		$sql='update approve set approve=?,approvename=?,approvedate=?,nowstep=? where appid=1';
		$values=array($approve,$approvename,$approvedate,$nowstep);
		$count=update($sql,$values);

		//模板属性
		$active="control";
		$conten_header="计算机信息系统修改-质量管理部审核意见";
		$smarty->assign('active',$active);
		$smarty->assign('c_header',$conten_header);
		$smarty->assign('rows',select(1));

		if($count!=0){
			$smarty->display('shenhe.tpl');
		};
break;

//任务页面-结果
case "jieguo":
	
	//修改数据
		$result=$_REQUEST['result'];
		$resultname=$_REQUEST['resultname'];
		$resultdate=$_REQUEST['resultdate'];
		$nowstep='4';
		$sql='update approve set result=?,resultname=?,resultdate=?,nowstep=? where appid=1';
		$values=array($result,$resultname,$resultdate,$nowstep);
		$count=update($sql,$values);

		//模板属性
		$active="control";
		$conten_header="计算机信息系统修改-处理结果";
		$smarty->assign('active',$active);
		$smarty->assign('c_header',$conten_header);
		$smarty->assign('rows',select(1));

		if($count!=0){
			$smarty->display('jieguo.tpl');
		};
break;

//任务页面-查询所有任务
case "renwu_all":
	$active="renwu";
	$conten_header="计算机信息系统修改-任务查询";
    $all_task=select_all();
	
	$smarty->assign('active',$active);
	$smarty->assign('c_header',$conten_header);
	$smarty->assign('all_task',$all_task);
	
	$smarty->display('renwu.tpl');
break;
//申请页面-条件查询
case "renwu_tiaojian":
//获取FORM值
	$appno=$_REQUEST['appno'];
	$egroup=$_REQUEST['egroup'];
	$eno=$_REQUEST['eno'];
	$ename=$_REQUEST['ename'];
	
	$sql="select * from approve where appno like CONCAT(?,'%') and egroup like CONCAT(?,'%') and eno like CONCAT(?,'%') and ename like CONCAT(?,'%')";
	$values=array($appno,$egroup,$eno,$ename);
	
	$active="renwu";
	$conten_header="计算机信息系统修改-任务查询";
    $all_task=select_query($sql,$values);
	
	$smarty->assign('active',$active);
	$smarty->assign('c_header',$conten_header);
	$smarty->assign('all_task',$all_task);
	
	$smarty->display('renwu.tpl');
break;
//任务页面-我的任务
case "renwu_me":
	
	$ename='吴丽霞';
	
	$sql="select * from approve where ename =? ";
	$values=array($ename);
	
	$active="renwu";
	$conten_header="计算机信息系统修改-任务查询";
    $all_task=select_query($sql,$values);
	
	$smarty->assign('active',$active);
	$smarty->assign('c_header',$conten_header);
	$smarty->assign('all_task',$all_task);
	
	$smarty->display('renwu.tpl');
break;

//任务页面-我的任务
case "renwu_me":
	
	$ename='吴丽霞';
	
	$sql="select * from approve where ename =? ";
	$values=array($ename);
	
	$active="renwu";
	$conten_header="计算机信息系统修改-任务查询";
    $all_task=select_query($sql,$values);
	
	$smarty->assign('active',$active);
	$smarty->assign('c_header',$conten_header);
	$smarty->assign('all_task',$all_task);
	
	$smarty->display('renwu.tpl');
break;

//任务页面-我的任务
case "renwu_me":
	
	$ename='吴丽霞';
	
	$sql="select * from approve where ename =? ";
	$values=array($ename);
	
	$active="renwu";
	$conten_header="计算机信息系统修改-任务查询";
    $all_task=select_query($sql,$values);
	
	$smarty->assign('active',$active);
	$smarty->assign('c_header',$conten_header);
	$smarty->assign('all_task',$all_task);
	
	$smarty->display('renwu.tpl');
break;

//任务页面-我的任务
case "renwu_xiangqing":
 
        $appid=$_REQUEST['appid'];
		$active="xiangqing";
		$conten_header="计算机信息系统修改-详细情况";
		$smarty->assign('active',$active);
		$smarty->assign('c_header',$conten_header);
		$smarty->assign('rows',select($appid));
		$smarty->display('xiangqing.tpl');
break;

default:
    echo "错误页面";
break;

}






//显示设置
// $smarty->display('shenqing.tpl');