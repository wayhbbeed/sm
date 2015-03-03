   $(".ystep").loadStep({
      size: "large",
      color: "blue",
      steps: [{
        title: "发起",
        content: "实名用户/公益组织发起项目"
      },{
        title: "审核",
        content: "乐捐平台工作人员审核项目"
      },{
        title: "募款",
        content: "乐捐项目上线接受公众募款"
      },{
        title: "执行",
        content: "项目执行者线下开展救护行动"
      },{
        title: "结项",
        content: "项目执行者公示善款使用报告"
      }]
    });
	
	$(".ystep").setStep(3);