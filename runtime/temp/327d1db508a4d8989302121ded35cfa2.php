<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:80:"/home/wwwroot/guanjia.jutui.org/public/../application/admin/view/team/index.html";i:1554866207;s:72:"/home/wwwroot/guanjia.jutui.org/application/admin/view/public/title.html";i:1551945361;}*/ ?>
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
 </style>
</head>
<body>
<div class="layui-fluid" class="layui-form">
  <div class="layui-card">
    <div class="layui-tab layui-tab-brief">
      <crmblok>
          <div style="position: relative;">
            <button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon"></i>批量删除</button>
            <button class="layui-btn layui-btn-normal" onclick="crm_admin_show('添加员工','<?php echo url('team/add'); ?>')"><i class="layui-icon">&#xe608;</i>添加员工</button>
            <form class="layui-form" method="post" style="display:inline-block;position: absolute;right: 0;">
              <div class="layui-input-inline">
                <select name="type">
                  <option value="1">姓名</option>
                  <option value="2">工号</option>
                  <option value="3">身份证</option>
                  <option value="4">员工电话</option>
                </select>
              </div>
              <div class="layui-input-inline">
                <input type="text" name="value" class="layui-input" style="background-color:#eee;border:none;">
              </div>
              <button class="layui-btn layui-btn-normal" type="submit"><i class="layui-icon layui-icon-search"></i>搜索</button>
            </form>
          </div>
        </crmblok>
        <table class="layui-table">
          <thead>
            <tr>
              <th width="25" align="center">
                <div class="layui-unselect header layui-form-checkbox" lay-skin="primary"><i class="layui-icon">&#xe605;</i></div>
              </th>
              <th align="center" style="width:80px;">工号</th>
              <th align="center">姓名</th>
              <th align="center">部门</th>
              <th align="center">职位</th>
              <th align="center">汇报对象</th>
              <th align="center">手机号</th>
              <th align="center">微信</th>
              <th align="center" style="width:50px;">类型</th>
              <th align="center" style="width:100px;">角色权限</th>
              <th align="center" style="width:60px;">员工状态</th>
              <th align="center" style="width:60px;">账号状态</th>
              <th align="center" style="width:50px;">详情</th>
              <th align="center" style="width:220px;">操作</th>
            </tr>
          </thead>
          <tbody>
          <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
            <tr align="center" style="height:500px;"><td colspan="11">暂无员工</td></tr>
          <?php else: foreach($list as $l): ?>
              <tr>
                <td>
                  <div class="layui-unselect layui-form-checkbox" lay-skin="primary" data-id='<?php echo $l['id']; ?>'><i class="layui-icon">&#xe605;</i></div>
                </td>
                <td><?php echo $l['staff_num']; ?></td>
                <td><?php echo $l['user_name']; ?></td>
                <td><?php echo $l['sectors']; ?></td>
                <td><?php echo $l['quarters']; ?></td>
                <td><?php echo $l['sectors_author']; ?></td>
                <td><?php echo $l['staff_tel']; ?></td>
                <td><?php echo $l['staff_wechat']; ?></td>
                <td><?php if($l['firm_type'] == 1): ?>全职<?php else: ?>兼职<?php endif; ?></td>
                <td><?php echo $l['role_name']; ?></td>
                <td>
                  <?php switch($l['staff_status']): case "1": ?><span style="color:#757272;">在职</span><?php break; case "2": ?><span style="color:#E51C23;">离职</span><?php break; case "3": ?><span style="color:#FF9800;">休假</span><?php break; endswitch; ?>
                </td>
                <td>
                  <?php if($l['user_status'] == 1): ?>
                    <span style="color:#8BC34A;">正常</span>
                  <?php else: ?>
                    <span style="color:#E51C23;">冻结</span>
                  <?php endif; ?>
                </td>
                <td><button class="layui-btn layui-btn-normal layui-btn-sm" onclick="crm_admin_show('查看员工信息','<?php echo url('team/show',['id'=>$l['id']]); ?>')">查看</button></td>
                <td>
                	<button class="layui-btn layui-btn-normal layui-btn-sm" onclick="crm_admin_show('编辑员工信息','<?php echo url('team/edit',['id'=>$l['id']]); ?>')">编辑</button>
                  <button class="layui-btn layui-btn-normal layui-btn-sm" onclick="crm_admin_show('考核','<?php echo url('team/scoring',['id'=>$l['id']]); ?>')">考核</button>
                  <button class="layui-btn layui-btn-normal layui-btn-sm" onclick="crm_admin_show('账号','<?php echo url('team/medias',['id'=>$l['id']]); ?>')">账号</button>
                  <button class="layui-btn layui-btn-normal layui-btn-sm" onclick="del('<?php echo $l['id']; ?>')">删除</button>
                </td>
              </tr>
            <?php endforeach; endif; ?>
          </tbody>
        </table>
    </div>
    </div>
  </div>
  <script>
  	function del(id)
  	{
  		layer.confirm("您确定删除该人员吗？",function(){
  			$.ajax({
  				url:"<?php echo url('team/del'); ?>",
  				data:{id:id},
  				type:'post',
  				success:function(data)
  				{
  					var status = JSON.parse(data);
  					layer.msg(status.msg,{icon:status.icon,time:1000},function(){
  						window.location.reload();
  					});
  				}
  			});
  		});
  	}
    function delAll()
    {
      var datas = tableCheck.getData();
      layer.confirm("确认删除选择的人员吗？",function(){
        $.ajax({
          url:"<?php echo url('team/del'); ?>",
          data:{id:datas},
          type:'post',
          success:function(data){
            var status = JSON.parse(data);
            layer.msg(status.msg,{icon:status.icon,time:1000},function(){
              window.location.reload();
            });
          }
        });
      });
    }
  </script>
</body>
</html>
