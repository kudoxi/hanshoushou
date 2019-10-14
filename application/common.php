<?php
use Think\DB;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once $_SERVER['DOCUMENT_ROOT'].'/hanshou/extend/PHPMailer/src/Exception.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/hanshou/extend/PHPMailer/src/PHPMailer.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/hanshou/extend/PHPMailer/src/SMTP.php';
// 公共助手函数

if (!function_exists('__'))
{

    /**
     * 获取语言变量值
     * @param string    $name 语言变量名
     * @param array     $vars 动态变量值
     * @param string    $lang 语言
     * @return mixed
     */
    function __($name, $vars = [], $lang = '')
    {
        if (is_numeric($name) || !$name)
            return $name;
        if (!is_array($vars))
        {
            $vars = func_get_args();
            array_shift($vars);
            $lang = '';
        }
        return think\Lang::get($name, $vars, $lang);
    }
    /*
     * 获取语言类型
     */
    function get_language_type(){
    	$l = DB::name('language')->select();
    	$arr = array();
    	foreach($l as $k=>$v){
    		$arr[] = ['id' => $v['id'], 'name' => $v['name']];
    	}
    	return $arr;
    }
	//发送邮箱验证码
    function send_email($title,$body,$to)
    {
        $toemail = $to;//'wangxi@refineit.com.cn';//定义收件人的邮箱

        $mail = new PHPMailer();

        $mail->isSMTP();// 使用SMTP服务
        $mail->CharSet = "utf8";// 编码格式为utf8，不设置编码的话，中文会出现乱码
        $mail->Host = "smtp.exmail.qq.com";// 发送方的SMTP服务器地址
        $mail->SMTPAuth = true;// 是否使用身份验证
        $mail->Username = "wangxi@refineit.com.cn";// 发送方的QQ邮箱用户名，就是自己的邮箱名
        $mail->Password = "Q13CDYAvgnW2Bvlo";// 发送方的邮箱密码，不是登录密码,是qq的第三方授权登录码,要自己去开启,在邮箱的设置->账户->POP3/IMAP/SMTP/Exchange/CardDAV/CalDAV服务 里面
        $mail->SMTPSecure = "ssl";// 使用ssl协议方式,
        $mail->Port = 465;// QQ邮箱的ssl协议方式端口号是465/587

        $mail->setFrom("wangxi@refineit.com.cn","hanshoushou");// 设置发件人信息，如邮件格式说明中的发件人,
        $mail->addAddress($toemail,'我');// 设置收件人信息，如邮件格式说明中的收件人
        //$mail->addReplyTo("xxxxx@qq.com","Reply");// 设置回复人信息，指的是收件人收到邮件后，如果要回复，回复邮件将发送到的邮箱地址
        //$mail->addCC("xxx@163.com");// 设置邮件抄送人，可以只写地址，上述的设置也可以只写地址(这个人也能收到邮件)
        //$mail->addBCC("xxx@163.com");// 设置秘密抄送人(这个人也能收到邮件)
        //$mail->addAttachment("bug0.jpg");// 添加附件
        $mail->Subject = $title;// 邮件标题
        $mail->Body = $body;// 邮件正文
        //$mail->AltBody = "This is the plain text纯文本";// 这个是设置纯文本方式显示的正文内容，如果不支持Html方式，就会用到这个，基本无用
		if(!$mail->send()){// 发送邮件
            // "Message could not be sent.";
            return "Mailer Error: ".$mail->ErrorInfo;// 输出错误信息
        }else{
            return '发送成功';
        }
    }
}

if (!function_exists('format_bytes'))
{

    /**
     * 将字节转换为可读文本
     * @param int $size 大小
     * @param string $delimiter 分隔符
     * @return string
     */
    function format_bytes($size, $delimiter = '')
    {
        $units = array('B', 'KB', 'MB', 'GB', 'TB', 'PB');
        for ($i = 0; $size >= 1024 && $i < 6; $i++)
            $size /= 1024;
        return round($size, 2) . $delimiter . $units[$i];
    }

}

if (!function_exists('datetime'))
{

    /**
     * 将时间戳转换为日期时间
     * @param int $time 时间戳
     * @param string $format 日期时间格式
     * @return string
     */
    function datetime($time, $format = 'Y-m-d H:i:s')
    {
        $time = is_numeric($time) ? $time : strtotime($time);
        return date($format, $time);
    }

}

if (!function_exists('human_date'))
{

    /**
     * 获取语义化时间
     * @param int $time 时间
     * @param int $local 本地时间
     * @return string
     */
    function human_date($time, $local = null)
    {
        return \fast\Date::human($time, $local);
    }

}

if (!function_exists('cdnurl'))
{

    /**
     * 获取上传资源的CDN的地址
     * @param string $url 资源相对地址
     * @return string
     */
    function cdnurl($url)
    {
        return preg_match("/^https?:\/\/(.*)/i", $url) ? $url : think\Config::get('upload.cdnurl') . $url;
    }

}


if (!function_exists('is_really_writable'))
{

    /**
     * 判断文件或文件夹是否可写
     * @param	string $file 文件或目录
     * @return	bool
     */
    function is_really_writable($file)
    {
        if (DIRECTORY_SEPARATOR === '/')
        {
            return is_writable($file);
        }
        if (is_dir($file))
        {
            $file = rtrim($file, '/') . '/' . md5(mt_rand());
            if (($fp = @fopen($file, 'ab')) === FALSE)
            {
                return FALSE;
            }
            fclose($fp);
            @chmod($file, 0777);
            @unlink($file);
            return TRUE;
        }
        elseif (!is_file($file) OR ( $fp = @fopen($file, 'ab')) === FALSE)
        {
            return FALSE;
        }
        fclose($fp);
        return TRUE;
    }

}

if (!function_exists('rmdirs'))
{

    /**
     * 删除文件夹
     * @param string $dirname 目录
     * @param bool $withself 是否删除自身
     * @return boolean
     */
    function rmdirs($dirname, $withself = true)
    {
        if (!is_dir($dirname))
            return false;
        $files = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator($dirname, RecursiveDirectoryIterator::SKIP_DOTS), RecursiveIteratorIterator::CHILD_FIRST
        );

        foreach ($files as $fileinfo)
        {
            $todo = ($fileinfo->isDir() ? 'rmdir' : 'unlink');
            $todo($fileinfo->getRealPath());
        }
        if ($withself)
        {
            @rmdir($dirname);
        }
        return true;
    }

}

if (!function_exists('copydirs'))
{

    /**
     * 复制文件夹
     * @param string $source 源文件夹
     * @param string $dest 目标文件夹
     */
    function copydirs($source, $dest)
    {
        if (!is_dir($dest))
        {
            mkdir($dest, 0755);
        }
        foreach (
        $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($source, RecursiveDirectoryIterator::SKIP_DOTS), RecursiveIteratorIterator::SELF_FIRST) as $item
        )
        {
            if ($item->isDir())
            {
                $sontDir = $dest . DS . $iterator->getSubPathName();
                if (!is_dir($sontDir))
                {
                    mkdir($sontDir);
                }
            }
            else
            {
                copy($item, $dest . DS . $iterator->getSubPathName());
            }
        }
    }

}

if (!function_exists('mb_ucfirst'))
{

    function mb_ucfirst($string)
    {
        return mb_strtoupper(mb_substr($string, 0, 1)) . mb_strtolower(mb_substr($string, 1));
    }

}


if (!function_exists('addtion'))
{

    /**
     * 附加关联字段数据
     * @param array $items 数据列表
     * @param mixed $fields 渲染的来源字段
     * @return array
     */
    function addtion($items, $fields)
    {
        if (!$items || !$fields)
            return $items;
        $fieldsArr = [];
        if (!is_array($fields))
        {
            $arr = explode(',', $fields);
            foreach ($arr as $k => $v)
            {
                $fieldsArr[$v] = ['field' => $v];
            }
        }
        else
        {
            foreach ($fields as $k => $v)
            {
                if (is_array($v))
                {
                    $v['field'] = isset($v['field']) ? $v['field'] : $k;
                }
                else
                {
                    $v = ['field' => $v];
                }
                $fieldsArr[$v['field']] = $v;
            }
        }
        foreach ($fieldsArr as $k => &$v)
        {
            $v = is_array($v) ? $v : ['field' => $v];
            $v['display'] = isset($v['display']) ? $v['display'] : str_replace(['_ids', '_id'], ['_names', '_name'], $v['field']);
            $v['primary'] = isset($v['primary']) ? $v['primary'] : '';
            $v['column'] = isset($v['column']) ? $v['column'] : 'name';
            $v['model'] = isset($v['model']) ? $v['model'] : '';
            $v['table'] = isset($v['table']) ? $v['table'] : '';
            $v['name'] = isset($v['name']) ? $v['name'] : str_replace(['_ids', '_id'], '', $v['field']);
        }
        unset($v);
        $ids = [];
        $fields = array_keys($fieldsArr);
        foreach ($items as $k => $v)
        {
            foreach ($fields as $m => $n)
            {
                if (isset($v[$n]))
                {
                    $ids[$n] = array_merge(isset($ids[$n]) && is_array($ids[$n]) ? $ids[$n] : [], explode(',', $v[$n]));
                }
            }
        }
        $result = [];
        foreach ($fieldsArr as $k => $v)
        {
            if ($v['model'])
            {
                $model = new $v['model'];
            }
            else
            {
                $model = $v['name'] ? \think\Db::name($v['name']) : \think\Db::table($v['table']);
            }
            $primary = $v['primary'] ? $v['primary'] : $model->getPk();
            $result[$v['field']] = $model->where($primary, 'in', $ids[$v['field']])->column("{$primary},{$v['column']}");
        }

        foreach ($items as $k => &$v)
        {
            foreach ($fields as $m => $n)
            {
                if (isset($v[$n]))
                {
                    $curr = array_flip(explode(',', $v[$n]));

                    $v[$fieldsArr[$n]['display']] = implode(',', array_intersect_key($result[$n], $curr));
                }
            }
        }
        return $items;
    }

}
