<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <title>Login Y Registro- CrediWeb</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <main>

         <div class="contenedor_todo">  

               <div class="caja_trasera">  
                      <div class="caja_trasera_login">  
                           <h3>¿Ya tienes una cuenta?</h3>
                          <p>Inicia sesion para entrar en la pagina</p>
                           <button id="btn_iniciar_sesion">Iniciar Sesion</button>
                      </div>  

                      <div class="caja_trasera_register">  
                        <h3>¿Aun no tienes cuenta?</h3>
                       <p>Registrate  para que puedas iniciar sesion </p>
                        <button id="btn_registrarse">Registrarse</button>
                   </div> 
              </div>  
              <div class="contenedor_login_register">  
                    <form action="php/login.php" method="POST" class="formulario_login">
                        <h2>Iniciar sesion</h2>
                        <input type="text" placeholder="Correo electronico" name="correo" > 
                         <input type="password" placeholder="Contraseña" name="contraseña">
                         <button>Entrar</button>
                         
                        
                    </form>
                        <form action="php/registro_usuario_be.php" method="POST"  class="formulario_register">
                            <h2>Registrarse</h2>
                            <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                            <input type="text" placeholder="Correo electronico" name= "correo">
                            <input type="text" placeholder="Usuario" name="usuario">
                            <input type="password" placeholder="Contraseña" name= "contraseña">
                             <button>Registrarse</button>
                        </form>
              </div> 
         </div>  
 </main>
<script src="./js/script.js"></script>
</body>
</html>
