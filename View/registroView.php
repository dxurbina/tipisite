
<form class="form-box" action="?c=User&a=AddUser" method="POST" enctype="multipart/form-data" onsubmit="return valform();">
    <div class = "box box-primary">
        <div class="header" id ="color-header" style = "margin-bottom: 15px;">
            <h2>CREA UNA CUENTA</h2>
        </div>
        <div class="row-fluid">
        
            <div class = "col-xs-6">
                <div class= "form-group">
                    <input name = "name" class = "form-control" type="text" placeholder="Nombre"  onKeyDown="return valtexto(event);"></input>
                    <span id="textAlert1"></span>
                </div>
            </div>
            
            <div class = "col-xs-6">            
                <div class= "form-group">
                    <input name = "lastName"  class = "form-control" type="text" placeholder="Apellido" onKeyDown="return valtexto(event);"></input>
                    <span id="textAlert2"></span>
                </div>
            </div>
            
        </div>

        <div class = "row-fluid" style = "margin-left: 15px; margin-right: 15px;">
            
                <div class= "form-group">
                    <input name = "email" class = "form-control" type="text" placeholder="Correo"></input>
                    <span id="textAlert3"></span>
                </div>
            
        </div>

        <div class="row-fluid">
            <div class = "col-xs-6">
                <div class= "form-group">
                    <input name = "nickName" class ="form-control" type="text" placeholder="usuario"></input>
                    <span id="textAlert4"></span>
                </div>
            </div>
            
            <div class = "col-xs-6">
                <div class= "form-group">
                    <input name = "passWord" class="form-control" type="password" placeholder="Contraseña"></input>
                    <span id="textAlert5"></span>
                </div>
            </div>

        </div>
        <div class = "row-fluid">
            
                <div class= "form-group" style = "margin-left: 15px; margin-right: 15px;">
                    <input name = "tel"  class="form-control" type="text" placeholder="telefono" onkeyPress="return valnum(event);"></input>
                    <span id="textAlert6"></span>
                </div>
            
        </div>

        <div class="row-fluid">
            <div class="form-group">
                <center>Avatar: </center>
                <div class="inputModificado">
                    <input name ="" class="inputImagen" id="archivo1" disabled/>
                    
                        <input type="file" name = "archivo[]"  id="archivo_oculto1"/>
                        <div class="btn btns" onclick="document.getElementById('archivo_oculto1').click();">Examinar</div>    
                           
                </div>
            </div>
        </div>

        <div class="col-xs-4" style="float: none; margin: 0 auto;">
            <input  style = "margin-bottom: 15px;" type="submit" value="Registrar" class="btn btn-success" onclick="validar();"></input>
        </div>
        
        
    </div>
</form>
