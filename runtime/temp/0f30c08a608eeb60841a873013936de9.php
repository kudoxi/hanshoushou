<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:89:"D:\UPUPW_AP7.0\htdocs\hanshou\public/../application/admin\view\study\vocabulary\edit.html";i:1571016965;s:72:"D:\UPUPW_AP7.0\htdocs\hanshou\application\admin\view\layout\default.html";i:1571016974;s:69:"D:\UPUPW_AP7.0\htdocs\hanshou\application\admin\view\common\meta.html";i:1571016970;s:71:"D:\UPUPW_AP7.0\htdocs\hanshou\application\admin\view\common\script.html";i:1571016970;}*/ ?>
<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">

<link rel="shortcut icon" href="/hanshou/public/assets/img/favicon.ico" />
<!-- Loading Bootstrap -->
<link href="/hanshou/public/assets/css/backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/hanshou/public/assets/js/html5shiv.js"></script>
  <script src="/hanshou/public/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config:  <?php echo json_encode($config); ?>
    };
</script>
    </head>

    <body class="inside-header inside-aside <?php echo defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''; ?>">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    <?php echo __('Dashboard'); ?>
                                    <small><?php echo __('Control panel'); ?></small>
                                </h1>
                            </section>
                            <?php if(!IS_DIALOG): ?>
                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
                                </ol>
                                <ol class="breadcrumb pull-right">
                                    <?php foreach($breadcrumb as $vo): ?>
                                    <li><a href="javascript:;" data-url="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                            <!-- END RIBBON -->
                            <?php endif; ?>
                            <div class="content">
                                <form id="add-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">
    <div class="form-group">
        <label for="c-name" class="control-label col-xs-12 col-sm-2"><?php echo __('Name'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="name" data-rule="required" class="form-control" name="name" type="text" value="<?php echo $row['name']; ?>" data-rule="required">
        </div>
    </div>
    <div class="form-group">
        <label for="c-name" class="control-label col-xs-12 col-sm-2"><?php echo __('Language type'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <?php echo build_select('language', $lang_list, "$row[language]", ['class'=>'form-control selectpicker', 'data-rule'=>'required']); ?>
        </div>
    </div>
    <div class="form-group">
		<label for="c-avatar" class="control-label col-xs-12 col-sm-2"><?php echo __('Tape'); ?>:</label>
		<div class="col-xs-12 col-sm-8">
			<div class="input-group">
				<input id="c-avatar" data-rule="required" class="form-control" size="50" name="url" type="text" value="<?php echo $row['url']; ?>">
				<div class="input-group-addon no-border no-padding">
					<span><button type="button" id="plupload-avatar" class="btn btn-danger plupload" data-input-id="c-avatar" data-mimetype="audio/mpeg3,audio/x-mpeg-3,video/mpeg,video/x-mpeg,audio/amr,audio/mpeg" data-multiple="false" data-preview-id="p-avatar"><i class="fa fa-upload"></i><?php echo __('Upload'); ?></button></span>
					<span><button type="button" id="fachoose-avatar" class="btn btn-primary fachoose" data-input-id="c-avatar" data-mimetype="audio/*" data-multiple="false"><i class="fa fa-list"></i><?php echo __('Select'); ?></button></span>
				</div>
				<span class="msg-box n-right" for="c-avatar"></span>
			</div>
			<!--<ul class="row list-inline plupload-preview" id="p-avatar"></ul>-->
		</div>
	</div>
	<div class="form-group">
		<label for="c-avatar" class="control-label col-xs-12 col-sm-2"><?php echo __('Memo'); ?>:</label>
		<div class="col-xs-12 col-sm-8">
			<div class="input-group">
				<textarea name="remark" class="editor"><?php echo $row['remark']; ?></textarea>
			</div>
		</div>
	</div>
    <div class="form-group layer-footer">
        <label class="control-label col-xs-12 col-sm-2"></label>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-success btn-embossed disabled"><?php echo __('OK'); ?></button>
            <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
        </div>
    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/hanshou/public/assets/js/require.js" data-main="/hanshou/public/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo $site['version']; ?>"></script>
    </body>
</html>