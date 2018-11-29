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
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="pd10 panel mb20 clearfix">
                <div class="fublBox mr10"><span>制单号：</span>
                    <input type="text" class="form-control form-itmeB" name="search" placeholder="输入制单号">
                </div>
                <div class="fublBox mr10"><span>审核状态：</span>
                    <select class="form-control form-itmeB" name="batches_of_inventory_status">
                        <option value="">全部</option>
                        <option value="2">已审核</option>
                        <option value="1">未审核</option>
                    </select>
                </div>
                <div class="fublBox mr10"><span>供应商：</span>
                    <select class="form-control form-itmeB" name="supplier_id">
                        <option value="">全部</option>
                        <?php if(is_array($supplier)): foreach($supplier as $key=>$vo): ?><option value="<?php echo ($vo["sid"]); ?>"><?php echo ($vo["supplier_name"]); ?></option><?php endforeach; endif; ?>
                    </select>
                </div>
                <div class="fublBox mr10"><span>采购日期：</span><input type="text"
                                                                   class="form-control form-itmeB dateTime startTime"
                                                                   name="start_time" placeholder=""><i
                        class="fa fa-calendar"></i></div>
                <div class="fublBox"><span class="mr10">-</span><input type="text"
                                                                       class="form-control form-itmeB dateTime endTime"
                                                                       name="end_time" placeholder=""><i
                        class="fa fa-calendar"></i></div>
            </div>
            <div class="panel">
                <div class="pd10">
                    <table class="table drugsTable ftc">
                        <thead>
                        <tr>
                            <th>序号</th>
                            <th>制单号</th>
                            <th>采购人</th>
                            <th>采购金额</th>
                            <th>采购日期</th>
                            <th>审核人</th>
                            <th>审核日期</th>
                            <th>供应商</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody class="list_box">

                        </tbody>
                    </table>
                </div>
                <div class="paging mt20 mb20 ftc list_page_box">

                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
<script>
    $(function () {
        var d = new Date();
        var today = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate();
        var _list_page = 1, pagesize = 10, search = $("input[name=search]").val() ? $("input[name=search]").val() : '', batches_of_inventory_status = $("select[name=batches_of_inventory_status] option:selected").val() ? $("select[name=batches_of_inventory_status] option:selected").val() : '', supplier_id = $("select[name=supplier_id] option:selected").val() ? $("select[name=supplier_id] option:selected").val() : '', start_time = $("input[name=start_time]").val() ? $("input[name=start_time]").val() : '', end_time = $("input[name=end_time]").val() ? $("input[name=end_time]").val() : '';
        //初始化
        getBatchesOfInventoryList(_list_page, pagesize, search, batches_of_inventory_status, supplier_id, start_time, end_time);
        //获取列表
        function getBatchesOfInventoryList(page, pagesize, search, status, supplier_id, start_time, end_time) {
            $.post("<?php echo U('/BatchesOfInventory/getBatchesOfInventoryList');?>", {
                p: page,
                pagesize: pagesize,
                search: search,
                batches_of_inventory_status: status,
                supplier_id: supplier_id,
                start_time: start_time,
                end_time: end_time
            }, function (res) {
                $(".list_box").html('');
                if (res.status == 'success') {
                    if (res.data.list.length > 0) {
                        var str = '';
                        $.each(res.data.list, function (i, n) {
                            str += '<tr>';
                            str += '<td>' + (Number(i) + 1) + '</td>';
                            str += '<td>' + n.batches_of_inventory_number + '</td>';
                            str += '<td>' + n.user_name + '</td>';
                            str += '<td>' + n.batches_of_inventory_total_money + '</td>';
                            str += '<td>' + n.batches_of_inventory_date + '</td>';
                            str += '<td>' + n.name + '</td>';
                            if(n.batches_of_inventory_verifier_date){
                                str += '<td>' + timeToDate(new Date(Number(n.batches_of_inventory_verifier_date)*1000))  + '</td>';
                            }else{
                                str += '<td>' + "" + '</td>';
                            }
                            str += '<td>' + n.supplier_name + '</td>';
                            if (n.batches_of_inventory_status == 1) {
                                str += '<td>未审核</td>';
                            } else if (n.batches_of_inventory_status == 2) {
                                str += '<td>已审核</td>';
                            }
                            str += '<td>';
                            str += '<a class="btn btn-primary btn-sm mr10" href="<?php echo U("His/BatchesOfInventory/purchase_list" );?>/batches_of_inventory_id/' + n.batches_of_inventory_id + '/status/' + n.batches_of_inventory_status + '">查看</a>';
                            str += '<a class="btn btn-primary btn-sm mr10" href="<?php echo U("His/Inventory/purchase" );?>/batches_of_inventory_id/' + n.batches_of_inventory_id + '">再次入库</a>';
                            str += '<button type="button" class="btn btn-default btn-sm delete_batches_of_inventory" batches_of_inventory_id = "' + n.batches_of_inventory_id + '">删除</button>';
                            str += '</td>';
                            str += '</tr>';
                        })
                        _list_page = res.data.page;
                        $(".list_box").html(str);
                        if (res.data.pager_str.length > 0) {
                            $(".list_page_box").html(res.data.pager_str);
                        } else {
                            $(".list_page_box").html('');
                        }
                    } else {
                        $(".list_box").html('<tr><td colspan="10" height="30" align="center" class="f_red" >暂无数据</td></tr>');
                        $(".list_page_box").html('');
                    }
                } else {
                    remindBox(res.msg);
                }
            }, 'json')
        }

        //分页
        //列表分页
        $(".list_page_box").on('click', '.item', function () {
            var tag = $(this)[0].tagName.toLowerCase();
            if (tag == 'i') {
                if ($(this).hasClass('next')) {
                    _list_page = parseInt(_list_page) + 1;
                } else {
                    _list_page = parseInt(_list_page) - 1;
                }
            } else {
                _list_page = parseInt($(this).html());
            }
            search = $("input[name=search]").val();
            batches_of_inventory_status = $("select[name=batches_of_inventory_status] option:selected").val();
            supplier_id = $("select[name=supplier_id] option:selected").val();
            start_time = $("input[name=start_time]").val();
            end_time = $("input[name=end_time]").val();
            getBatchesOfInventoryList(_list_page, pagesize, search, batches_of_inventory_status, supplier_id, start_time, end_time);
        });
        //搜索
        //制单号
        $(document).on("input", "input[name=search]", function () {
            if($(this).val()){
                if (!isDigits($(this).val())) {
                    remindBox("只能输入数字");
                    return false;
                }
            }
            search_info();
        })
        $(document).on('change', "select[name=batches_of_inventory_status]", function () {
            search_info();
        })
        $(document).on('change', "select[name=supplier_id]", function () {
            search_info();
        })
        $('input[name=start_time]').datetimepicker({
            lang: 'ch',
            timepicker: false,
            format: 'Y-m-d',
            validateOnBlur: false,
            onChangeDateTime: function (i) {
                search_info();
            },
            validateOnBlur: false,
            maxDate:today
        });
        $('input[name=end_time]').datetimepicker({
            lang: 'ch',
            timepicker: false,
            format: 'Y-m-d',
            validateOnBlur: false,
            onChangeDateTime: function (i) {
                search_info();
            },
            validateOnBlur: false,
            maxDate:today
        });

        function search_info() {
            search = $("input[name=search]").val();
            batches_of_inventory_status = $("select[name=batches_of_inventory_status] option:selected").val();
            supplier_id = $("select[name=supplier_id] option:selected").val();
            start_time = $("input[name=start_time]").val();
            end_time = $("input[name=end_time]").val();
            if (search || batches_of_inventory_status || supplier_id || start_time || end_time) {
                _list_page = 1;
            }
            getBatchesOfInventoryList(_list_page, pagesize, search, batches_of_inventory_status, supplier_id, start_time, end_time);
        }

        //删除
        $(document).on("click", ".delete_batches_of_inventory", function () {
            var _self = $(this);
            var batches_of_inventory_id = _self.attr('batches_of_inventory_id');
            $.post("<?php echo U('/BatchesOfInventory/delete_batches_of_inventory');?>", {batches_of_inventory_id: batches_of_inventory_id}, function (res) {
                if(res.status == "success"){
                    window.location.reload();
                }else{
                    remindBox(res.msg);
                }
            }, 'json')
        })
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