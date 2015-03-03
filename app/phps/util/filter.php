//php ��������post,get��������
 
if (get_magic_quotes_gpc()) {
 
$_GET = stripslashes_array($_GET);
 
$_POST = stripslashes_array($_POST);
 
}
 
function stripslashes_array(&$array) {
 
while(list($key,$var) = each($array)) {
 
if ($key != 'argc' && $key != 'argv' && (strtoupper($key) != $key || ''.intval($key) == "$key")) {
 
if (is_string($var)) {
 
$array[$key] = stripslashes($var);
 
}
 
if (is_array($var)) {
 
$array[$key] = stripslashes_array($var);
 
}
 
}
 
}
 
return $array;
 
}
 
//����
 
function htmlencode($str){
 
if(empty($str)) return;
 
if($str=="") return $str;
 
$str=trim($str);
 
$str=str_replace("&","&",$str);
 
$str=str_replace(">",">",$str);
 
$str=str_replace("<","<",$str);
 
$str=str_replace(chr(32)," ",$str);
 
$str=str_replace(chr(9)," ",$str);
 
$str=str_replace(chr(9)," ",$str);
 
$str=str_replace(chr(34),"&",$str);
 
$str=str_replace(chr(39),"'",$str);
 
$str=str_replace(chr(13),"
 
",$str);
 
$str=str_replace("'","''",$str);
 
$str=str_replace("select","select",$str);
 
$str=str_replace("SCRIPT","SCRIPT",$str);
 
$str=str_replace("script","script",$str);
 
$str=str_replace("join","join",$str);
 
$str=str_replace("union","union",$str);
 
$str=str_replace("where","where",$str);
 
$str=str_replace("insert","insert",$str);
 
$str=str_replace("delete","delete",$str);
 
$str=str_replace("update","update",$str);
 
$str=str_replace("like","like",$str);
 
$str=str_replace("drop","drop",$str);
 
$str=str_replace("create","create",$str);
 
$str=str_replace("modify","modify",$str);
 
$str=str_replace("rename","rename",$str);
 
$str=str_replace("alter","alter",$str);
 
$str=str_replace("cast","cas",$str);
 
return $str;
 
}
 
//����
 
function htmldecode($str){
 
if(empty($str)) return;
 
if($str=="") return $str;
 
$str=str_replace("select","select",$str);
 
$str=str_replace("join","join",$str);
 
$str=str_replace("union","union",$str);
 
$str=str_replace("where","where",$str);
 
$str=str_replace("insert","insert",$str);
 
$str=str_replace("delete","delete",$str);
 
$str=str_replace("update","update",$str);
 
$str=str_replace("like","like",$str);
 
$str=str_replace("drop","drop",$str);
 
$str=str_replace("create","create",$str);
 
$str=str_replace("modify","modify",$str);
 
$str=str_replace("rename","rename",$str);
 
$str=str_replace("alter","alter",$str);
 
$str=str_replace("cas","cast",$str);
 
$str=str_replace("&","&",$str);
 
$str=str_replace(">",">",$str);
 
$str=str_replace("<","<",$str);
 
$str=str_replace(" ",chr(32),$str);
 
$str=str_replace(" ",chr(9),$str);
 
$str=str_replace(" ",chr(9),$str);
 
$str=str_replace("&",chr(34),$str);
 
$str=str_replace("'",chr(39),$str);
 
$str=str_replace("
 
",chr(13),$str);
 
$str=str_replace("''","'",$str);
 
return $str;
 
}
 
// ������string_filter($string, $match_type=1)
 
// ���ܣ����˷Ƿ�����
 
// ������
 
// $string ��Ҫ�����ַ���
 
// $match_type ƥ������,1Ϊ��ȷƥ��, 2Ϊģ��ƥ�䣬Ĭ��Ϊ1
 
//
 
// ���أ��зǷ����ݷ���True���޷Ƿ����ݷ���False
 
// �������Ƿ��ؼ����б�����txt�ļ���, ��Ϊ��ͨ�Ƿ��ؼ��ֺ����طǷ��ؼ��������б�
 
// ���ߣ�heiyeluren
 
// ʱ�䣺2006-1-18
 
//
 
//======================================================================
 
function lib_lawless_string_filter($string, $match_type=1)
 
{
 
//�ַ�����ֱ�ӷ���Ϊ�Ƿ�
 
$string = trim($string);
 
if (empty($string))
 
{
 
return false;
 
 
}
 
//��ȡ��Ҫ�ؼ����б����ͨ�ؼ����б�
 
$common_file = "common_list.txt"; //ͨ�ù��˹ؼ����б�
 
$signify_file = "signify_list.txt"; //��Ҫ���˹ؼ����б�
 
//����κ��б��ļ�������ֱ�ӷ���false������������ļ��б��ȡ������������
 
if (!file_exists($common_file) || !file_exists($signify_file))
 
{
 
return false;
 
}
 
$common_list = file($common_file);
 
$signify_list = file($signify_file);
 
//��ȷƥ��
 
if ($match_type == 1)
 
{
 
$is_lawless = exact_match($string, $common_list);
 
}
 
//ģ��ƥ��
 
if ($match_type == 2)
 
{
 
$is_lawless = blur_match($string, $common_list, $signify_list);
 
}
 
//�жϼ�������������Ƿ������ݣ�����У�֤���ǷǷ���
 
if (is_array($is_lawless) && !empty($is_lawless))
 
{
 
return true;
 
}
 
else
 
{
 
return false;
 
}
 
}
 
//---------------------
 
// ��ȷƥ��,Ϊ���˷���
 
//---------------------
 
function exact_match($string, $common_list)
 
{
 
$string = trim($string);
 
$string = lib_replace_end_tag($string);
 
//������ͨ���˹ؼ����б�
 
foreach($common_list as $block)
 
{
 
$block = trim($block);
 
if (preg_match("/^$string$/i", $block))
 
{
 
$blist[] = $block;
 
}
 
}
 
//�ж���û�й���������������
 
if (!empty($blist))
 
{
 
return array_unique($blist);
 
}
 
return false;
 
}
 
//----------------------
 
// ģ��ƥ��,Ϊ���˷���
 
//----------------------
 
function blur_match($string, $common_list, $signify_list)
 
{
 
$string = trim($string);
 
$s_len = strlen($string);
 
$string = lib_replace_end_tag($string);
 
//������ͨ���˹ؼ����б�
 
foreach($common_list as $block)
 
{
 
$block = trim($block);
 
if (preg_match("/^$string$/i", $block))
 
{
 
$blist[] = $block;
 
}
 
}
 
//�������ع��˹ؼ����б�
 
foreach($signify_list as $block)
 
{
 
$block = trim($block);
 
if ($s_len>=strlen($block) && preg_match("/$block/i", $string))
 
{
 
$blist[] = $block;
 
}
 
}
 
//�ж���û�й���������������
 
if (!empty($blist))
 
{
 
return array_unique($blist);
 
}
 
return false;
 
}
 
//--------------------------
 
// �滻HTMLβ��ǩ,Ϊ���˷���
 
//--------------------------
 
function lib_replace_end_tag($str)
 
{
 
if (empty($str)) return false;
 
$str = htmlspecialchars($str);
 
$str = str_replace( '/', "", $str);
 
$str = str_replace("\\", "", $str);
 
$str = str_replace(">", "", $str);
 
$str = str_replace("<", "", $str);
 
$str = str_replace("", "", $str);
 
$str = str_replace("", "", $str);
 
$str=str_replace("select","select",$str);
 
$str=str_replace("join","join",$str);
 
$str=str_replace("union","union",$str);
 
$str=str_replace("where","where",$str);
 
$str=str_replace("insert","insert",$str);
 
$str=str_replace("delete","delete",$str);
 
$str=str_replace("update","update",$str);
 
$str=str_replace("like","like",$str);
 
$str=str_replace("drop","drop",$str);
 
$str=str_replace("create","create",$str);
 
$str=str_replace("modify","modify",$str);
 
$str=str_replace("rename","rename",$str);
 
$str=str_replace("alter","alter",$str);
 
$str=str_replace("cas","cast",$str);
 
$str=str_replace("&","&",$str);
 
$str=str_replace(">",">",$str);
 
$str=str_replace("<","<",$str);
 
$str=str_replace(" ",chr(32),$str);
 
$str=str_replace(" ",chr(9),$str);
 
$str=str_replace(" ",chr(9),$str);
 
$str=str_replace("&",chr(34),$str);
 
$str=str_replace("'",chr(39),$str);
 
$str=str_replace("
 
",chr(13),$str);
 
$str=str_replace("''","'",$str);
 
$str=str_replace("css","'",$str);
 
$str=str_replace("CSS","'",$str);
 
return $str;
 
//HTML��ǩ��������Ϊ��չ����
 
/*
 
$tags = array("/html", "/head", "/body", "/div", "/span", "/DOCTYPE", "/title", "/link", "/meta", "/style", "/p", "/h1,", "/h2,", "/h3,", "/h4,", "/h5,", "/h6", "/strong", "/em", "/abbr", "/acronym", "/address", "/bdo", "/blockquote", "/cite", "/q", "/code", "/ins", "/del", "/dfn", "/kbd", "/pre", "/samp", "/var", "/br", "/a", "/img", "/area", "/map", "/object", "/param", "/ul", "/ol", "/li", "/dl", "/dt", "/dd", "/table", "/tr", "/td", "/th", "/tbody", "/thead", "/tfoot", "/col", "/colgroup", "/caption", "/form", "/input", "/textarea", "/select", "/option", "/optgroup", "/button", "/label", "/fieldset", "/legend", "/script", "/noscript", "/b", "/i", "/tt", "/sub", "/sup", "/big", "/small", "/hr" );
 
*/
 
}