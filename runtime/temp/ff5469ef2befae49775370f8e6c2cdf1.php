<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"/home/wwwroot/guanjia.jutui.org/public/../application/index/view/index/order.html";i:1555732235;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>巨推管家</title>
  <link rel="stylesheet" href="/static/layuiadmin/layui/css/layui.css" media="all">
  <link rel="stylesheet" href="/static/layuiadmin/style/admin.css" media="all">
  <script src="/static/admin/js/jquery.min.js"></script>
  <script src="/static/layuiadmin/layui/layui.js"></script>
  <script src="/static/admin/js/admin.js"></script>
</head>
<body onload="last()">
  <div class="layui-fluid">
    <div class="layui-row layui-col-space15">
      <div class="layui-col-md12">
        <div class="layui-card">
          <!-- <div class="layui-card-header">添加订单</div> -->
          <div class="layui-form layui-card-body" pad15>
            <div class="layui-form-item layui-form-text">
              <h3 style="text-align:center;width: 80px;height: 40px;line-height: 40px;border-bottom: 2px solid #1E9FFF;margin: 0 auto;">客户信息</h3>
            </div>
            <div class="layui-form-item">
              <div class="layui-col-md12">
                <div class="layui-col-md3">
                  <label class="layui-form-label" for="name">客户名称</label>
                  <div class="layui-input-block">
                    <input type="text" name="name" id="name" class="layui-input" placeholder="客户姓名">
                  </div>
                </div>
                <div class="layui-col-md3">
                  <label class="layui-form-label" for="phone">客户电话</label>
                  <div class="layui-input-block">
                    <input type="text" name="phone" id="phone" class="layui-input" placeholder="客户电话">
                  </div>
                </div>
                <div class="layui-col-md3">
                  <label class="layui-form-label" for="sex">客户性别</label>
                  <div class="layui-input-block">
                    <select class="layui-input" name="sex">
                      <option value="1">男</option>
                      <option value="2">女</option>
                    </select>
                  </div>
                </div>
                <div class="layui-col-md3">
                  <label class="layui-form-label" for="type">客户类型</label>
                  <div class="layui-input-block">
                    <select class="layui-input" name="type">
                      <option value="1">私企</option>
                      <option value="2">国企</option>
                      <option value="3">上市</option>
                      <option value="4">个人</option>
                      <option value="5">政府</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="layui-form-item">
              <label class="layui-form-label" for="city-picker">所属城市</label>
              <div class="layui-input-block">
                <input type="text" autocomplete="on" class="layui-input" id="city-picker" name="city" readonly="readonly" data-toggle="city-picker" placeholder="请选择">
              </div>
            </div>

            <div class="layui-form-item">
              <div class="layui-col-md12">
                <div class="layui-col-md3">
                  <label class="layui-form-label" for="wechat">客户微信</label>
                  <div class="layui-input-block">
                    <input type="text" name="wechat" id="wechat" class="layui-input" placeholder="客户微信">
                  </div>
                </div>
                <div class="layui-col-md3">
                  <label class="layui-form-label" for="qq">客户QQ</label>
                  <div class="layui-input-block">
                    <input type="text" name="qq" id="qq" class="layui-input" placeholder="客户QQ">
                  </div>
                </div>
                <div class="layui-col-md3">
                  <label class="layui-form-label" for="email">客户邮箱</label>
                  <div class="layui-input-block">
                    <input type="text" name="email" id="email" class="layui-input" placeholder="客户邮箱">
                  </div>
                </div>
                <div class="layui-col-md3">
                  <label class="layui-form-label" for="quarters">岗位职称</label>
                  <div class="layui-input-block">
                    <input type="text" name="quarters" id="quarters" class="layui-input" placeholder="岗位职称">
                  </div>
                </div>
              </div>
            </div>

            <!-- <div class="layui-form-item">
              <label class="layui-form-label">结束时间</label>
              <div class="layui-input-block">
                <input type="text" name="end_time" id="endtime" class="layui-input">
              </div>
            </div> -->

            <div class="layui-form-item layui-form-text">
              <h3 style="text-align:center;width: 80px;height: 40px;line-height: 40px;border-bottom: 2px solid #1E9FFF;margin: 0 auto;">兴趣爱好</h3>
            </div>

            <div class="layui-form-item">
              <label class="layui-form-label" for="interests">选择兴趣</label>
              <div class="layui-input-block">
                <input type="checkbox" name="interests" value="旅游" title="旅游">
                <input type="checkbox" name="interests" value="阅读" title="阅读">
                <input type="checkbox" name="interests" value="电影" title="电影">
                <input type="checkbox" name="interests" value="聚会" title="聚会">
                <input type="checkbox" name="interests" value="唱歌" title="唱歌">
                <input type="checkbox" name="interests" value="交友" title="交友">
                <input type="checkbox" name="interests" value="摄影" title="摄影">
                <input type="checkbox" name="interests" value="球类" title="球类">
                <input type="checkbox" name="interests" value="逛街" title="逛街">
                <input type="checkbox" name="interests" value="爬山" title="爬山">
                <input type="checkbox" name="interests" value="宅家" title="宅家">
                <input type="checkbox" name="interests" value="下棋" title="下棋">
                <input type="checkbox" name="interests" value="书画" title="书画">
                <input type="checkbox" name="interests" value="荣誉" title="荣誉">
                <input type="checkbox" name="interests" value="面子" title="面子">
                <input type="checkbox" name="interests" value="喝酒" title="喝酒">
                <input type="checkbox" name="interests" value="喝茶" title="喝茶">
                <input type="checkbox" name="interests" value="吃货" title="吃货">
                <input type="checkbox" name="interests" value="运动" title="运动">
                <input type="checkbox" name="interests" value="美容" title="美容">
                <input type="checkbox" name="interests" value="钱财" title="钱财">
                <input type="checkbox" name="interests" value="美女" title="美女">
                <input type="checkbox" name="interests" value="收藏" title="收藏">
                <input type="checkbox" name="interests" value="集邮" title="集邮">
                <input type="checkbox" name="interests" value="游戏" title="游戏">
                <input type="checkbox" name="interests" value="瑜伽" title="瑜伽">
                <input type="checkbox" name="interests" value="舞蹈" title="舞蹈">
                <input type="checkbox" name="interests" value="跑步" title="跑步">
                <input type="checkbox" name="interests" value="武术" title="武术">
              </div>
            </div>

            <div class="layui-form-item layui-form-text">
              <h3 style="text-align:center;width: 80px;height: 40px;line-height: 40px;border-bottom: 2px solid #1E9FFF;margin: 0 auto;">公司信息</h3>
            </div>

            <div class="layui-form-item">
              <div class="layui-col-md12">
                <div class="layui-col-md3">
                  <label class="layui-form-label" for="sitename">公司名称</label>
                  <div class="layui-input-block">
                    <input type="text" name="sitename" id="sitename" class="layui-input" placeholder="公司名称">
                  </div>
                </div>
                <div class="layui-col-md3">
                  <label class="layui-form-label" for="website">公司官网</label>
                  <div class="layui-input-block">
                    <input type="text" name="website" id="website" class="layui-input" placeholder="公司官网">
                  </div>
                </div>
                <div class="layui-col-md3">
                  <label class="layui-form-label" for="siteaddress">公司地址</label>
                  <div class="layui-input-block">
                    <input type="text" name="siteaddress" id="siteaddress" class="layui-input" placeholder="公司地址">
                  </div>
                </div>
                <div class="layui-col-md3">
                  <label class="layui-form-label" for="industry">所属行业</label>
                  <div class="layui-input-block">
                    <select class="layui-input" name="industry" id="industry" lay-filter="industry">
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="layui-form-item">
              <div class="layui-col-md12">
                <div class="layui-col-md3">
                  <label class="layui-form-label" for="brand">主营业务</label>
                  <div class="layui-input-block">
                    <input type="text" name="brand" id="brand" class="layui-input" placeholder="主营业务">
                  </div>
                </div>
                <div class="layui-col-md3">
                  <label class="layui-form-label" for="busi">产品品牌</label>
                  <div class="layui-input-block">
                    <input type="text" name="busi" id="busi" class="layui-input" placeholder="产品品牌">
                  </div>
                </div>
              </div>
            </div>

            <div class="layui-form-item layui-form-text">
              <h3 style="text-align:center;width: 80px;height: 40px;line-height: 40px;border-bottom: 2px solid #1E9FFF;margin: 0 auto;">需求信息</h3>
            </div>
            <div class="layui-form-item">
              <div class="layui-col-md12">
                <div class="layui-col-md3">
                  <label class="layui-form-label" for="project_id">所属项目</label>
                  <div class="layui-input-block">
                    <select class="layui-input" name="project_id" id="project_id" lay-filter="project_id">

                    </select>
                  </div>
                </div>
                <div class="layui-col-md3">
                  <label class="layui-form-label" for="staff_idcard">业务类型</label>
                  <div class="layui-input-block">
                    <select class="layui-input" name="business" id="business" lay-filter="business">
                    </select>
                  </div>
                </div>
                <div class="layui-col-md3">
                  <label class="layui-form-label" for="stage">前期状态</label>
                  <div class="layui-input-block">
                    <select class="layui-input" name="stage">
                      <option value="1">有</option>
                      <option value="0">无</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="layui-form-item" id="services">
              <label class="layui-form-label" for="service">选择服务</label>
              <div class="layui-input-block" id="service">
              </div>
            </div>
            <div class="layui-form-item">
              <div class="layui-col-md12">
                <div class="layui-col-md3">
                  <label class="layui-form-label" for="budget">预算金额</label>
                  <div class="layui-input-block">
                    <input type="text" name="budget" id="budget" class="layui-input" placeholder="预算金额">
                  </div>

                </div>
                <!-- <div class="layui-col-md3">
                  <label class="layui-form-label" for="makemoney">成交金额</label>
                  <div class="layui-input-block">
                    <input type="text" name="makemoney" id="makemoney" class="layui-input" placeholder="成交金额">
                  </div>
                </div> -->
                <div class="layui-col-md3">
                  <label class="layui-form-label" for="moneystate">预算说明</label>
                  <div class="layui-input-block">
                    <select class="layui-input" name="moneystate">
                      <option value="1">全款</option>
                      <option value="2">年付</option>
                      <option value="3">季付</option>
                      <option value="4">月付</option>
                      <option value="5">5:5</option>
                      <option value="6">5:2:3</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label" for="remark">备注说明</label>
              <div class="layui-input-block">
                <textarea name="remark" id="remark" class="layui-textarea"></textarea>
              </div>
            </div>

            <div class="layui-form-item">
              <div class="layui-input-block">
                <label class="layui-form-label"><button class="layui-btn" lay-submit lay-filter="add">添加客户信息</button></label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="/static/layuiadmin/layui_exts/city-picker/city-picker.data.js"></script>
  <link href="/static/layuiadmin/layui_exts/city-picker/city-picker.css" rel="stylesheet" />
  <script type="text/javascript">
  $.get("<?php echo url('index/index/addserviceindex'); ?>", {}, function(data) {
    data =  JSON.parse(data);
    data_list = data.data;
    var list_str = '';
    for(var i=0;i<data_list['project'].length;i++){
      list_str += '<option value="'+data_list['project'][i]['id']+'">'+data_list['project'][i]['name']+'</option>';
    }
    $('#project_id').html(list_str);
    layui.use(['form'], function() {
      var form = layui.form;
      form.render('select');
    });
  });
  $.post("<?php echo url('admin/AjaxAction/industryAction'); ?>", {}, function(data) {
    $('#industry').html(data);
    layui.use(['form'], function() {
      var form = layui.form;
      form.render('select');
    });
  });
  layui.config({
    base: '/static/layuiadmin/layui_exts/' //静态资源所在路径
  }).extend({
    citypicker: 'city-picker/city-picker' // {/}的意思即代表采用自有路径，即不跟随 base 路径
  }).use(['citypicker'], function() {
    var $ = layui.$,
      cityPicker = layui.citypicker;
    var currentPicker = new cityPicker("#city-picker", {
      provincename: "provinceId",
      cityname: "cityId",
      districtname: "districtId",
      level: 'districtId', // 级别
    });
  });
  //获取多选框value值，拼接成逗号分隔的字符串
  function returnCheckboxItem(name) {
    var adIds = "";
    $('input:checkbox[name="' + name + '"]:checked').each(function(i) {
      if (0 == i) {
        adIds = $(this).val();
      } else {
        adIds += ("," + $(this).val());
      }
    });
    return adIds;
  }
  //页面加载默认一个三级联动
  function last() {
    //一级联动
    var yewuid = $("#project_id option:first").val();
    layui.use(['form', 'element'], function() {
      var form = layui.form,element = layui.element;
      $.ajax({
        url: "<?php echo url('admin/AjaxAction/business'); ?>",
        data: {
          id: yewuid
        },
        type: 'post',
        success: function(data) {
          $("#business").html(data);
          //二级联动
          var business = $("#business option:first").val();
          $.ajax({
            url: "<?php echo url('admin/AjaxAction/service'); ?>",
            data: {
              id: business
            },
            type: 'post',
            success: function(data) {
              if (data == '暂无服务') {
                $("#services").css({
                  'display': 'none'
                });
              } else {
                $("#services").css({
                  'display': 'block'
                });
                $("#service").html(data);
              }
              form.render('checkbox');
            }
          });
          form.render('select');
        }
      });
    });
    var sources = $("#source option:first").val();
    layui.use(['form', 'element'], function() {
      var form = layui.form,element = layui.element;
      $.ajax({
        url: "<?php echo url('admin/AjaxAction/source'); ?>",
        data: {
          id: sources
        },
        type: 'post',
        success: function(data) {
          $("#sourcelist").html(data);
          form.render('checkbox');
        }
      });
    });
  }
  layui.use(['form', 'upload', 'rate'], function() {
    var form = layui.form,upload = layui.upload;
    //三级联动下拉
    form.on('select(project_id)', function(data) {
      var areaId = data.value;
      $.ajax({
        url: "<?php echo url('admin/AjaxAction/business'); ?>",
        data: {
          id: areaId
        },
        type: 'post',
        success: function(data) {
          $("#business").html(data);
          var business = $("#business option:first").val();
          $.ajax({
            url: "<?php echo url('admin/AjaxAction/service'); ?>",
            data: {
              id: business
            },
            type: 'post',
            success: function(data) {
              if (data == '暂无服务') {
                $("#services").css({
                  'display': 'none'
                });
              } else {
                $("#services").css({
                  'display': 'block'
                });
                $("#service").html(data);
              }
              form.render('checkbox');
            }
          });
          form.render('select');
        }
      });
    });
    //渠道下拉联动
    form.on('select(ditch_id)', function(data) {
      var areaId = data.value;
      $.ajax({
        url: "<?php echo url('admin/AjaxAction/source'); ?>",
        data: {
          id: areaId
        },
        type: 'post',
        success: function(data) {
          $("#source_id").html(data);
          form.render('select');
        }
      });
    });
    //渠道下拉联动
    form.on('select(source_id)', function(data) {
      var areaId = data.value;
      $.ajax({
        url: "<?php echo url('admin/AjaxAction/Tools'); ?>",
        data: {
          id: areaId
        },
        type: 'post',
        success: function(data) {
          $("#tools_ids").html(data);
          form.render('checkbox');
        }
      });
    });
    //业务下拉联动
    form.on('select(business)', function(data) {
      var areaId = data.value;
      $.ajax({
        url: "<?php echo url('admin/AjaxAction/service'); ?>",
        data: {
          id: areaId
        },
        type: 'post',
        success: function(data) {
          if (data == '暂无服务') {
            $("#services").css({
              'display': 'none'
            });
          } else {
            $("#services").css({
              'display': 'block'
            });
            $("#service").html(data);
          }
          form.render('checkbox');
        }
      });
    });
    //提交
    form.on('submit(add)', function(data) {
      var level = $("#test4").children("span").html();
      // data.field.level      = level.substr(0,level.length-1);
      data.field.interests = returnCheckboxItem("interests");
      data.field.tools_ids = returnCheckboxItem("tools_ids");
      data.field.service = returnCheckboxItem("service");
      $.ajax({
        type: 'POST',
        url: '<?php echo url("index/index/addservice"); ?>',
        data: {
          data: data.field
        },
        success: function(data) {
          var status = JSON.parse(data);
          if (status.icon == 6) {
            layer.msg(status.msg, {
              icon: status.icon,
              time: 1000
            }, function() {
              // location.href = "<?php echo url('service/myorder'); ?>";
            });
          } else {
            layer.msg(status.msg, {
              icon: status.icon,
              time: 1000
            }, function() {
              window.location.reload();
            });
          }
        }
      });
      return false;
    });
  });
  </script>
</body>

</html>
