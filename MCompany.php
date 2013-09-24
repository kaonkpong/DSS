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
<body>
    <h2>Company Manage Application</h2>
    <div class="demo-info" style="margin-bottom:10px">
        <div class="demo-tip icon-tip">&nbsp;</div>
        <div>จัดการข้อสถานประกอบการ</div>
    </div>
    
    <table id="dg" title="My Users" class="easyui-datagrid" style="width:1500px;height:300px"
            url="get_users.php"
            toolbar="#toolbar" pagination="true"
            rownumbers="true" fitColumns="true" singleSelect="true">
        <thead>
            <tr>
                <th field="Cid" width="50">รหัสสถานประกอบการ</th>
                <th field="id" width="50">รหัสผู้ให้ข้อมูล</th>
                <th field="Cname" width="50">ชื่อสถานประกอบการ</th>
                <th field="CnameEng" width="50">ชื่อสถานประกอบการ Eng</th>
                <th field="Caddress" width="50">ที่อยู่สถานประกอบการ</th>
                <th field="Ccontact" width="50">ข้อมูลติดต่อ</th>
                <th field="time" width="50">เวลาที่ข้อมูลถูกเพิ่ม</th>
                <th field="Cpic" width="50">URL รูปภาพประกอบ</th>
                <th field="Cactive" width="50">สถานะ</th>
               
            </tr>
        </thead>
    </table>
    <div id="toolbar">
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">New User</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Edit User</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Remove User</a>
    </div>
    
    <div id="dlg" class="easyui-dialog" style="width:450px;height:460px;padding:10px 20px"
            closed="true" buttons="#dlg-buttons">
        <div class="ftitle">User Information</div>
        <form id="fm" method="post" novalidate>
            <div class="fitem">
                <label>รหัสสถานประกอบการ:</label>
                <input name="Cid" class="easyui-validatebox" required="true">
          </div>
            <div class="fitem">
                <label>รหัสผู้ให้ข้อมูล:</label>
                <input name="id" class="easyui-validatebox" required="true">
          </div>
            <div class="fitem">
                <label>ชื่อสถานประกอบการ:</label>
                <input name="Cname" class="easyui-validatebox" required="true">
                
          </div>
           
             <div class="fitem">
               <label>ชื่อสถานประกอบการ Eng:</label>
                <input name="CnameEng" class="easyui-validatebox" required="true">
          </div>
            <div class="fitem">
               <label>ที่อยู่สถานประกอบการ:</label>
                <input name="Caddress" class="easyui-validatebox" required="true">
          </div>
            <div class="fitem">
               <label>ข้อมูลติดต่อ:</label>
                <input name="Ccontact" class="easyui-validatebox" required="true">
          </div>
    
            <div class="fitem">
               <label>URL รูปภาพประกอบ:</label>
                <input name="Cpic" class="easyui-validatebox" >
          </div>
            <div class="fitem">
               <label>สถานะ:</label>
                <input name="Cactive" class="easyui-validatebox" required="true">
          </div>
        </form>
    </div>
    <div id="dlg-buttons">
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onclick="saveUser()">Save</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')">Cancel</a>
    </div>
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
                $.messager.confirm('Confirm','Are you sure you want to destroy this user?',function(r){
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
            width:150px;
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
			for(var i=1; i<=800; i++){
				var amount = Math.floor(Math.random()*1000);
				var price = Math.floor(Math.random()*10);
				rows.push({
					id: 'Stu'+i,
					Cid: '<a href="javascript:void(0)" class="easyui-linkbutton" onclick="$(\'#w\').window(\'open\')">Cid'+i+'</a>',
					Cname: 'ชื่อ'+i,
					CnameEng: 'Name '+i,
					Caddress: price+'/'+amount,
					Ccontact: 'email'+amount+'@gmail.com',
					time: Date(),
					Cpic: './'+amount+'.jpg',
					Cactive: 'Active',
					//Cactive: '<select>  <option value="Not Accept" selected>Not Accept</option>  <option value="saab">Aceept</option>',
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