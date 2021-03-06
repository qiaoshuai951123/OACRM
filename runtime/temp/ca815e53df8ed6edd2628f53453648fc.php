<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:84:"/home/wwwroot/guanjia.jutui.org/public/../application/admin/view/business/index.html";i:1550124236;s:72:"/home/wwwroot/guanjia.jutui.org/application/admin/view/public/title.html";i:1551945361;}*/ ?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
<title>巨推管家</title>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="stylesheet" href="/static/layuiadmin/layui/css/layui.css" media="all">
<link rel="stylesheet" href="/static/layuiadmin/style/admin.css" media="all">
<script src="/static/admin/js/jquery.min.js"></script>
<script src="/static/layuiadmin/layui/layui.js"></script>
<script src="/static/admin/js/admin.js"></script>
<style media="screen">
  .layui-form-checked[lay-skin="primary"] i{
    border-color:#1E9FFF;
    background-color:#1E9FFF;
    color:#fff;
  }
  .layui-form-checkbox[lay-skin="primary"]:hover i {
    border-color:#1E9FFF;
    color:#fff;
  }
  .layui-form-radio > i:hover, .layui-form-radioed > i {
      color: #1E9FFF;
  }
</style>

 <style media="screen">
   .layui-table tbody tr:hover{
     background-color: #fff;
   }
   .layui-form-select{
     width: 100px;
   }
   .layui-unselect{
     background-color: #eee;
   }
   .layui-form-selected dl{
     background-color: #eee;
   }
 </style>
</head>
<body>
<div class="layui-fluid" class="layui-form">
  <div class="layui-card">
    <div class="layui-tab layui-tab-brief">
        <crmblok>
          <div style="position: relative;">
            <button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon"></i>批量删除</button>
            <button class="layui-btn layui-btn-normal" onclick="crm_admin_show('添加业务','<?php echo url('business/add'); ?>')"><i class="layui-icon">&#xe608;</i>添加业务</button>
            <form class="layui-form" method="post" style="display:inline-block;position: absolute;right: 0;">
              <div class="layui-input-inline">
                <select name="search_id">
                    <option value="1" selected>业务名称</option>
                    <option value="2">业务链接</option>
                    <option value="3">负责销售</option>
                    <option value="4">负责客服</option>
                </select>
              </div>
              <div class="layui-input-inline">
                <input type="text" name="value" class="layui-input" style="background-color:#eee;border:none;">
              </div>
              <button class="layui-btn layui-btn-normal" type="submit"><i class="layui-icon layui-icon-search"></i>搜索</button>
            </form>
          </div>
        </crmblok>
        <table class="layui-table layui-form" >
          <thead>
            <tr>
              <th width="25" align="center">
                <div class="layui-unselect header layui-form-checkbox" lay-skin="primary"><i class="layui-icon">&#xe605;</i></div>
              </th>
              <th align="center">业务名称</th>
              <th align="center">所属项目</th>
              <th align="center">客服电话</th>
              <th align="center">客服微信</th>
              <th align="center">客服QQ</th>
              <th align="center">负责客服</th>
              <th align="center">负责销售</th>
              <th align="center">业务详情</th>
              <th width="60" align="center">状态</th>
              <th width="100" align="center">操作</th>
            </tr>
          </thead>
          <tbody>
          <?php if(empty($business) || (($business instanceof \think\Collection || $business instanceof \think\Paginator ) && $business->isEmpty())): ?>
              <tr align="center" style="height:500px;"><td colspan="11">暂无业务</td></tr>
          <?php else: if(is_array($business) || $business instanceof \think\Collection || $business instanceof \think\Paginator): $i = 0; $__LIST__ = $business;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pro): $mod = ($i % 2 );++$i;?>
              <tr>
                <td>
                  <div class="layui-unselect layui-form-checkbox" lay-skin="primary" data-id='<?php echo $pro['id']; ?>'><i class="layui-icon">&#xe605;</i></div>
                </td>
                <td><?php echo $pro['name']; ?></td>
                <td><?php echo $pro['project']; ?></td>
                <td><?php echo $pro['firm_tel']; ?></td>
                <td><?php echo $pro['firm_wechat']; ?></td>
                <td><?php if($pro['firm_qq'] == 0): ?>暂无<?php else: ?><?php echo $pro['firm_qq']; endif; ?></td>
                <td><?php echo $pro['firm_answer']; ?></td>
                <td><?php echo $pro['firm_sale']; ?></td>
                <td><button class="layui-btn layui-btn-normal layui-btn-xs" onclick="crm_admin_show('业务详情','<?php echo url('business/show',array('id'=>$pro['id'])); ?>')">详情</button></td>
                <td>
                  <?php switch($pro['firm_status']): case "1": ?><button class="layui-btn layui-btn-normal layui-btn-xs">运行</button><?php break; case "2": ?><button class="layui-btn layui-btn-warm layui-btn-xs">筹备</button><?php break; case "0": ?><button class="layui-btn layui-btn-danger layui-btn-xs">暂停</button><?php break; endswitch; ?>
                </td>
                <td>
                  <button class="layui-btn layui-btn-normal layui-btn-sm" onclick="crm_admin_show('编辑业务','<?php echo url('business/edit',array('id'=>$pro['id'])); ?>')"><i class="layui-icon"></i></button>
                  <button class="layui-btn layui-btn-normal layui-btn-sm" onclick="del(<?php echo $pro['id']; ?>)"><i class="layui-icon"></i></button>
                </td>
              </tr>
            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
          </tbody>
        </table>
        <script type="text/javascript">
          function delAll () {
            var data = tableCheck.getData();
            layer.confirm('确认要删除'+data+'吗？',function(index){
              $.get("<?php echo url('business/del'); ?>?id="+data,function(data){
                var message = JSON.parse(data);
                if (message.icon == 6){
                    layer.msg(message.msg,{icon: message.icon,time:1000},function () {
                        location.href=location.href
                   });
                } else {
                    layer.msg(message.msg,{icon: message.icon,time:1000});
                }
              })
            });
          }

          function del(id){
            layer.confirm('确认要删除吗？',function(){
              $.get("<?php echo url('business/del'); ?>?id="+id,function(data){
                var message = JSON.parse(data);
                if (message.icon == 6){
                    layer.msg(message.msg,{icon: message.icon,time:1000},function () {
                        location.href=location.href
                   });
                } else {
                    layer.msg(message.msg,{icon: message.icon,time:1000});
                }
              })
            })
          }
        </script>
    </div>
    </div>
  </div>
</body>
</html>
