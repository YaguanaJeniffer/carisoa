<?php
$url = (isset($_POST['buscar']) ? "models/acceder.php?buscar=".$_POST['buscar'] : "models/acceder.php");
?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Basic CRUD Application - jQuery EasyUI CRUD Demo</title>
        <link rel="stylesheet" type="text/css" href="easyui/themes/black/easyui.css">
        <link rel="stylesheet" type="text/css" href="easyui/themes/icon.css">
        <link rel="stylesheet" type="text/css" href="easyui/themes/color.css">
        <link rel="stylesheet" type="text/css" href="easyui/demo/demo.css">
        <script type="text/javascript" src="easyui/jquery.min.js"></script>
        <script type="text/javascript" src="easyui/jquery.easyui.min.js"></script>
    </head>
    <body>
        <h2>Basic CRUD Application</h2>
        <p>Click the buttons on datagrid toolbar to do crud actions.</p>
        
        <table id="dg" title="Estudiantes" class="easyui-datagrid" style="width:700px;height:250px"
                url="<?php echo $url ?>"
                toolbar="#toolbar" pagination="true"
                rownumbers="true" fitColumns="true" singleSelect="true">
            <thead>
                <tr>
                    <th field="EST_CEDULA" width="50">Cedula</th>
                    <th field="EST_NOMBRE" width="50">Nombre</th>
                    <th field="EST_APELLIDO" width="50">Apellido</th>
                    <th field="EST_DIRECCION" width="50">Direccion</th>
                    <th field="EST_TELEFONO" width="50">Telefono</th>
                </tr>
            </thead>
        </table>
        <div id="toolbar">
            <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">Nuevo Estudiante</a>
            <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Editar Estudiante</a>
            <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Borrar Estudiante</a>
        </div>
        
        <div id="dlg" class="easyui-dialog" style="width:400px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons'">
            <form id="fm" method="post" novalidate style="margin:0;padding:20px 50px">
                <h3>Ingrese Informacion Estudiante</h3>
                <div style="margin-bottom:10px">
                    <input name="EST_CEDULA" class="easyui-textbox" required="true" label="Cedula:" style="width:100%">
                </div>
                <div style="margin-bottom:10px">
                    <input name="EST_NOMBRE" class="easyui-textbox" required="true" label="Nombre:" style="width:100%">
                </div>
                <div style="margin-bottom:10px">
                    <input name="EST_APELLIDO" class="easyui-textbox" required="true" label="Apellido:" style="width:100%">
                </div>
                <div style="margin-bottom:10px">
                    <input name="EST_DIRECCION" class="easyui-textbox" required="true" label="Direccion:" style="width:100%">
                </div>
                <div style="margin-bottom:10px">
                    <input name="EST_TELEFONO" class="easyui-textbox" required="true"  label="Telefono:" style="width:100%">
                </div>
            </form>
        </div>
        <div id="dlg-buttons">
            <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Save</a>
            <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancel</a>
        </div>
        <script type="text/javascript">
            var url;
            function newUser(){
                $('#dlg').dialog('open').dialog('center').dialog('setTitle','New User');
                $('#fm').form('clear');
                url = 'models/guardar.php'
            }
            function editUser(){
                var row = $('#dg').datagrid('getSelected');
                console.log(row);
                if (row){
                    $('#dlg').dialog('open').dialog('center').dialog('setTitle','Edit User');
                    $('#fm').form('load',row);
                    url = 'models/modificar.php?id='+row.EST_CEDULA;
                }
            }
            function saveUser(){
                $('#fm').form('submit',{
                    url: url,
                    iframe: false,
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
                            $.post('models/eliminar.php',{id:row.EST_CEDULA},function(result){
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
    </body>
    </html>