<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Basic CRUD Application - jQuery EasyUI CRUD Demo</title>
    <link rel="stylesheet" type="text/css" href="./easyui/themes/bootstrap/easyui.css">
    <link rel="stylesheet" type="text/css" href="./easyui/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="./easyui/demo/demo.css">
    <link rel="stylesheet" type="text/css" href="Bootmetro/css/bootmetro-icons.css">
    <script type="text/javascript" src="./easyui/jquery-1.6.min.js"></script>
    <script type="text/javascript" src="./easyui/jquery.easyui.min.js"></script>
</head>
<body onLoad="openw()">
    <h2>Company Manage Application</h2>
    <div class="demo-info" style="margin-bottom:10px">
        <div class="demo-tip icon-tip">&nbsp;</div>
        <div>จัดการข้อสถานประกอบการ</div>
    </div>
    
    <table id="dg" title="My Users" class="easyui-datagrid" style="width:950px;height:300px"
            url="get_users.php"
            toolbar="#toolbar" pagination="true"
            rownumbers="true" fitColumns="true" singleSelect="true">
        <thead>
            <tr>
                <th field="Cid" width="50">รหัสสถานประกอบการ</th>
                <th field="id" width="50">รหัสผู้ให้ข้อมูล</th>
                <th field="Cname" width="50">ชื่อสถานประกอบการ</th>
                <th field="time" width="50">เวลาที่ข้อมูลถูกเพิ่ม</th>
                <th field="Cactive" width="30">สถานะ</th>
                <th field="Check" width="10"><input type="checkbox" name="chk"> </th>
               
            </tr>
        </thead>
    </table>
<div id="toolbar"><a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Remove Company</a></div>
<script type="text/javascript">
        var url;
        function newUser(){
            $('#dlg').dialog('open').dialog('setTitle','New User');
            $('#fm').form('clear');
            url = 'save_user.php';
        }
        function editUser(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $('#dlg').dialog('open').dialog('setTitle','Edit User');
                $('#fm').form('load',row);
                url = 'update_user.php?id='+row.id;
            }
        }
        function saveUser(){
            $('#fm').form('submit',{
                url: url,
                onSubmit: function(){
                    return $(this).form('validate');
                },
                success: function(result){
                    var result = eval('('+result+')');
                    if (result.errorMsg){
                        $.messager.show({
                            title: 'Error',
                            msg: result.errorMsg
                        });
                    } else {
                        $('#dlg').dialog('close');        // close the dialog
                        $('#dg').datagrid('reload');    // reload the user data
                    }
                }
            });
        }
        function destroyUser(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $.messager.confirm('ตกลง','คุณแน่ใจหรือไม่ที่จะลบข้อมูลสถานประกอบการนี้?',function(r){
                    if (r){
                        $.post('destroy_user.php',{id:row.id},function(result){
                            if (result.success){
                                $('#dg').datagrid('reload');    // reload the user data
                            } else {
                                $.messager.show({    // show error message
                                    title: 'Error',
                                    msg: result.errorMsg
                                });
                            }
                        },'json');
                    }
                });
            }
        }
    </script>
     <div id="dlg-buttons">
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onclick="saveUser()">Approve</a>
    </div>
	<style type="text/css">
        #fm{
            margin:0;
            padding:10px 30px;
        }
        .ftitle{
            font-size:14px;
            font-weight:bold;
            padding:5px 0;
            margin-bottom:10px;
            border-bottom:1px solid #ccc;
        }
        .fitem{
            margin-bottom:5px;
        }
        .fitem label{
            display:inline-block;
            width:80px;
        }
    </style>
    <SCRIPT type="text/javascript">
function openw()
{
var a=window.open("", "newwin",
"height=300,width=500")
a.document.write("<HTML>")

a.document.write("</HTML>")
}
</SCRIPT>
   <div class="demo-info">
    <div id="w" class="easyui-window" title="ข้อมูล สถานประกอบการ" data-options="modal:true,closed:true,iconCls:'icon-save'" style="width:600px;height:450px;padding:10px;">
    <!--ข้อมูลรายละเอียดสถานประกอบการ -->
    <table width="500"  align="center">
  <tr>
    <td width="25%">สถานประกอบการ :</td>
    <td>บริษัท DSS จำกัดมหาชน</td>
   
  </tr>
  <tr>
    <td>ที่อยู่ :<br>
<br>
</td>
    <td>มหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน วิทยาเขตขอนแก่น <br>
ที่อยู่ 150 ถ.ศรีจันทร์ ต.ในเมือง อ.เมือง จ.ขอนแก่น 40000<br> 
043-336370-1 fax.043-237483</a></td>

  </tr>
   <tr>
    <td>คุณสมบัติที่จำเป็น :</td>
    <td>- น.ศ. ชั้นปีที่ 3 -4<br>
		- มีความสามารถในการเขียนโปรแกรมภาษา PHP</td>

  </tr>
  <tr>
    <td>จำนวนนักศึกษาฝึกงาน :</td>
    <td>2 คน</td>

  </tr>
   <tr>
    <td>สวัสดีการ :</td>
    <td>- 200บาท/วัน<br>
- ฟรีอาหารกลางวัน</td>

  </tr>
  
  <tr>
    <td><span class="icon-pictures"></span>  คลังรูปภาพ :</a></td>
    <td><a href="gallery.php" target="new">คลิ้กเพื่อดูรปภาพ</td>

  </tr>
</table>
    </div>
<script>

	

		function getData(){

			var rows = [];
			openw()
			for(var i=1; i<=80; i++){
				var amount = Math.floor(Math.random()*1000);
				var price = Math.floor(Math.random()*10);
				my_date = new Date( "June 22, 2008 23:48:52" );
				rows.push({
					id: 'Stu'+i,
					Cid: '<a href="javascript:void(0)" class="easyui-linkbutton" onclick="$(\'#w\').window(\'open\')">Cid'+i+'</a>',
					Cname: 'ชื่อ'+i,
					CnameEng: 'Name '+i,
					Caddress: price+'/'+amount,
					Ccontact: 'email'+amount+'@gmail.com',
					time: my_date,
					Cpic: './'+amount+'.jpg',
					Cactive: '<select><option value="Not Aceept">Aceept</option><option value="saab">Not Aceept</option>',
					Check: '<input type="checkbox" name="chk1">'
					
				});
			}
			return rows;
		}
		
		function pagerFilter(data){
			if (typeof data.length == 'number' && typeof data.splice == 'function'){	// is array
				data = {
					total: data.length,
					rows: data
				}
			}
			var dg = $(this);
			var opts = dg.datagrid('options');
			var pager = dg.datagrid('getPager');
			pager.pagination({
				onSelectPage:function(pageNum, pageSize){
					opts.pageNumber = pageNum;
					opts.pageSize = pageSize;
					pager.pagination('refresh',{
						pageNumber:pageNum,
						pageSize:pageSize
					});
					dg.datagrid('loadData',data);
				}
			});
			if (!data.originalRows){
				data.originalRows = (data.rows);
			}
			var start = (opts.pageNumber-1)*parseInt(opts.pageSize);
			var end = start + parseInt(opts.pageSize);
			data.rows = (data.originalRows.slice(start, end));
			return data;
		}
		
		$(function(){
			$('#dg').datagrid({loadFilter:pagerFilter}).datagrid('loadData', getData());
		});
	</script>
</body>
</html>