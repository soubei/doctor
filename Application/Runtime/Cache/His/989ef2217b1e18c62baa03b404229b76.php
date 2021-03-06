<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <link href="/Public/home/favicon.ico" rel="shortcut icon">
    <title><?php echo C('TITLE');?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="/Public/his/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/his/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/Public/his/vendor/linearicons/style.css">
    <link rel="stylesheet" href="/Public/his/vendor/chartist/css/chartist-custom.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="/Public/his/css/main.css?<?php echo time();?>">
    <!-- <link rel="stylesheet" type="text/css" href="http://www.zzw0527.com/testlist/main.css?<?php echo time();?>"> -->
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="/Public/his/css/demo.css?<?php echo time();?>">
    <!-- public -->
    <link rel="stylesheet" href="/Public/his/css/public.css?<?php echo time();?>">

    <!-- ICONS >
    <link rel="apple-touch-icon" sizes="76x76" href="/Public/his/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="__PUBLIC_ROBOT__/img/favicon.png"-->
    <link rel="stylesheet" type="text/css" href="/Public/his/vendor/datetimepicker/jquery.datetimepicker.css"/>

    <script src="/Public/his/vendor/jquery/jquery.min.js"></script>
    <script src="/Public/his/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/his/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/Public/his/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="/Public/his/vendor/chartist/js/chartist.min.js"></script>
    <script src="/Public/his/scripts/klorofil-common.js"></script>
    <script src="/Public/his/vendor/datetimepicker/jquery.datetimepicker.js"></script>
    <script src="/Public/his/js/public.js?<?php echo time();?>"></script>
    <script src="/Public/his/js/check.form.js?<?php echo time();?>"></script>
    <script src="/Public/his/vendor/layer/layer.js"></script>
    <!--<script src="/Public/his/js/echarts.min.js"></script>-->


</head>
<body>


<!-- WRAPPER -->
    <!-- MAIN -->
<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="pd10 panel mb20 clearfix">
                <div class="fublBox mr10"><span>在线咨询：</span>
                    <input type="text" class="form-control form-itmeB" name="search" placeholder="">
                </div>
                <button type="button" class="btn btn-primary r supplierAdd">咨询</button>
            </div>
            <div class="panel">
                <div class="pd10">
                    <table class="table drugsTable ftc">
                        <thead>
                        <tr>
                            <th>序号</th>
                           
                            <th>标题</th>
                            <th>类型</th>
                             <!-- <th>来源</th> -->
                            
                           
                            <th>审核</th>
                            <!-- <th>置顶</th> -->
                            <th>创建日期</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody id="tbodyApp">
                        <?php if(is_array($res)): foreach($res as $key=>$val): ?><input type="hidden" id="uid" value="<?php echo ($val["id"]); ?>">
                        <tr>
                        <td><?php echo ($val["id"]); ?></td>
                        <td><?php echo ($val["title"]); ?></td>
                        <td><?php echo ($val["type"]); ?></td>
                        <!-- <td><?php echo ($val["socure"]); ?></td> -->
                      
                      
                        <td><?php if($val["process"] == 1): ?>已审核<?php else: ?>未审核<?php endif; ?></td>
                        <!-- <td><?php echo ($val["top"]); ?></td> -->
                        <td><?php echo (date('Y-m-d',$val["createtime"])); ?></td>
                        <td><button type="button" class="btn btn-primary btn-sm mr10 supplierEdit" data-sid="<?php echo ($val["id"]); ?>">编辑</button><button type="button" class="btn btn-default btn-sm delete" data-sid="<?php echo ($val["id"]); ?>">删除</button>
                        </td>
                        </tr><?php endforeach; endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="paging mt20 mb20 ftc" id="supplier_pager_box">

                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>

<!-- 添加弹框 end -->
<!-- 编辑弹框 start -->
<div class="bombBox" id="editSupplierBomb" style="display: none;">
    <div class="bombContent editSupplierBomb whiteBg" style="min-width: 400px;">
        <div class="bombTit">医生文章审核<i class="fa fa-remove"></i></div>
        <div class="ftc pd10">
            <div class="input-group listSeaForm wb100">
                <span class="input-group-btn">
                    <span class="btn">审核：</span>
                    
                </span>
                未审核：<input type="radio" name="shenheid"  value="0">&nbsp;
                   已审核：  <input type="radio" name="shenheid"  value="1">
            </div>
           
            <input class="form-control" type="hidden" name="editSid">
            <a class="btn btn-primary determine wb100 mt20 edit">确认</a>
        </div>
    </div>
    <a><div class="bombMask"></div></a>
</div>
<!-- 添加弹框 end -->
<!-- END MAIN -->
<!-- Javascript -->
<!-- END MAIN -->
<script>

function UnixToDate(unixTime, isFull, timeZone) {
    if (typeof (timeZone) == 'number'){
        unixTime = parseInt(unixTime) + parseInt(timeZone) * 60 * 60;
    }
    var time = new Date(unixTime * 1000);
    var ymdhis = "";
    ymdhis += time.getUTCFullYear() + "-";
    ymdhis += (time.getUTCMonth()+1) + "-";
    ymdhis += time.getUTCDate();
    if (isFull === true){
        ymdhis += " " + time.getUTCHours() + ":";
        ymdhis += time.getUTCMinutes() + ":";
        ymdhis += time.getUTCSeconds();
    }
    return ymdhis;
}
 


    $(function () {
        $(document).on('click', '.chlinicEidt', function (){
            if ($('.clinicForm').hasClass('on')) {
                $(this).text('保存');
                $('.clinicForm').removeClass('on').find('input,textarea').removeAttr('disabled');
            } else {
                $(this).text('编辑');
                $('.clinicForm').addClass('on').find('input,textarea').attr('disabled', true);
                var major_field = $(":input[name='major_field']").val();
                var address = $(":input[name='address']").val();
                var introduction = $("#introduction").val();
                $.post("<?php echo U('/Member/myHospitalInfo');?>",
                    { "major_field": major_field,'address':address,'introduction':introduction},
                    function (data) {
                        if (data.status=='success') {
                            location.reload();
                        }
                        remindBox(data.msg);
                    },
                    "json");
            }


        });
        //编辑咨询弹框
        $(document).on('click', '.supplierEdit', function () {
           
            $('#editSupplierBomb').show(0);
            var sid = $(this).attr('data-sid');
            $("#uid").val(sid)
           // alert(sid);
            $.get("<?php echo U('/Member/doctorlist');?>",
                {'sid':sid},
                function (data) {
                  
                    
                },
            'json');
            // 取消或者关闭
            $('#editSupplierBomb .bombMask, #editSupplierBomb .fa-remove').one('click', function(event) {
                $(this).closest('#editSupplierBomb').hide(0);
                $('body').removeAttr('style');
            });
        });
        $(document).on('click', '.edit', function(){
          var uid= $("#uid").val();
          var uidlist = $("input[name='shenheid']:checked").val();
          // alert(uid);alert(uidlist);
          
            $.post("<?php echo U('/Member/doctorlist');?>",
                {"uid":uid,
               "uidlist":uidlist},
                function (data) {
                    if (data.status == 'success') {
                        // alert(00);
                        // getSupplierLists('',_supplier_page);
                        $('#editSupplierBomb').hide(0);
                    }
                    remindBox(data.msg);
                   window.location.reload();//刷新当前页面.
                },
            'json');
        });

          //删除
        $(document).on('click', '.delete', function(){
            var search = $(":input[name='search']").val();
            var sid = $(this).attr('data-sid');
            promptBox('是否确定删除？', function () {
                $.post("<?php echo U('/Member/removelist');?>",
                    {"sid": sid},

                    function (data) {
                        if (data.status == 'success') {
                            // getSupplierLists(search, _supplier_page);
                        }
                        remindBox(data.msg);
                        window.location.reload();//刷新当前页面.
                    },
                    'json');
            });
        });
    });
</script>
<!-- END WRAPPER -->

<script type="text/javascript">
    if(parent.endLoad){
        parent.endLoad();
    }
</script>
</body>
</html>