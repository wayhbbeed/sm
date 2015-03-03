<?php 
// format var_dump 测试显示函数
    function p($var, $echo=true,$label=null, $strict=true)
    {
        echo "<br>";
        $label = ($label===null) ? '' : rtrim($label).' ';
        if(!$strict) {
            if (ini_get('html_errors')) {
                $output = print_r($var, true);
                $output = "<pre>".$label.htmlspecialchars($output,ENT_QUOTES)."</pre>";
            } else 
            { 
                $output = $label . " : " . print_r($var, true);        
            }    
        }else {
            ob_start();
            var_dump($var);
            $output = ob_get_clean();
            if(!extension_loaded('xdebug')) {
                $output = preg_replace("/\]\=\>\n(\s+)/m", "] => ", $output);
                $output = '<pre>'. $label. htmlspecialchars($output, ENT_QUOTES). '</pre>';
            }
        }
        if ($echo) {
            echo($output);
            return null;
        }else 
            return $output;
    }

//PHP独特发明，自动加载类
function autoload($classname){
    
    $filename = str_replace('\\', '/', $classname) . '.class.php';
    // class类
    $filepath = AUTO_CLASS.$filename;

    if (file_exists($filepath)) {
        return include $filepath;
    }else{
        //仅对Class仅支持一级子目录
        //如果子目录中class文件与CLASS根下文件同名，则子目录里的class文件将被忽略

        $handle=opendir(AUTO_CLASS);
        
        while (false !== ($file = readdir($handle))) {
            if (is_dir(AUTO_CLASS. "/" . $file)) {
                $filepath=AUTO_CLASS."/".$file."/".$filename;
                if (file_exists($filepath)) {
                    return include $filepath;
                }
            }
        }
    }
    //lib库文件
    $filepath = AUTO_CLASS.$filename;
    if (file_exists($filepath)) {
        return include $filepath;
    }

    throw new Exception( $filepath . ' NOT FOUND!');
}
spl_autoload_register('autoload');

/**
 * 跳转操作
 */
//成功
function SUCCESS_COM($s,$jumpUrl){
            $s->assign('singer',_SIN_SUCCESS);
            $s->assign('message',_SUC_MEG);
            $s->assign('jumpUrl',$jumpUrl);
            $s->display('pages/dispatch_jump.tpl');
            exit;
    };
//操作失败
function ERROR_COM($s,$jumpUrl){
        //错误跳转
            $s->assign('singer',_SIN_ERROR);
            $s->assign('message',_ERR_MEG);
            $s->assign('jumpUrl',$jumpUrl);
            $s->display('pages/dispatch_jump.tpl'); 
            exit;
    };
function SUCCESS_LOGIN($smarty,$jumpUrl){
    //进行跳转
            $smarty->assign('singer',_SIN_SUCCESS);
            $smarty->assign('message',_SUC_LOGIN);
            $smarty->assign('jumpUrl',$jumpUrl);
            $smarty->display('pages/dispatch_jump.tpl');
            //确保重定向后，后续代码不会被执行 
            exit;
}