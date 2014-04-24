<?php
include_once('functions/library.php');
$html = new Html_5('Formulario');
$html->body_I();
$html->links('CSS','css/foundation.css');
$html->links('JS','js/vendor/modernizr.js');
// Formulario: Datos para Caracterización de Muertes Maternas
echo '<br>';
echo '<div id="contenedor" class="row callout radius">';
    echo '<h3 class="text-center columns">Sistema para el Censo Nacional de Cómites de Bioética (SCNCB)</h3>';
    // Inicio del Menu Principal
    $menu = new Menu();
    
    // Domingo Ilarreta Ingresa Contenido aquí
    echo '<div class="large-6 columns">';
?>
<ul class="example-orbit" data-orbit>
  <li>
    <img src="img/img1.jpg" alt="Imagen 1" />
    <div class="orbit-caption">
      Lorem ipsum dolor sit amet, consectetur.
    </div>
  </li>
  <li>
    <img src="img/img2.jpg" alt="Imagen 2" />
    <div class="orbit-caption">
      Lorem ipsum dolor sit amet, consectetur.
    </div>
  </li>
</ul>
    <div class="panel text-justify">
        <p>Tiene por objetivo <b>actualizar la información sobre el universo de Comités de Bioética u organizaciones afines</b>, que hacen la vida en los servicios prestadores de salud y centros de investigación existentes a nivel nacional.</p>
        <p>En esta <b>primera etapa</b> el proceso de recolección de información estará dirigido a:</p>
        <ol>
            <li>Servicios prestados de salud públicos a partir del tercer nivel de atención.</li>
            <li>Servicios privados de atención en salud.</li>
            <li>Centros de investigación adscritos al Ministerio del Poder Popular para la Salud</li>
        </ol>
    </div>
<?php
    echo '</div>';
    echo '<div class="large-6 columns">';
?>
    <dl class="accordion" data-accordion>
  <dd>
    <a href="#panel1">Solicitar una Cuenta</a>
    <div id="panel1" class="content">
        <?php
      $crear = new Formulario('Solicitar una Cuenta');
      //form_I($method,$action,$name,$onsubmit,$atributo)
      $crear->form_I('post','functions/actions.php','crear','return validar();','data-abide');
      // nombre
      echo '<div class="large-12">';
      $crear->label('nombre', 'Nombre(s)', '');
      $crear->input('nombre','text','Ingrese el o los Nombres','pattern="alpha" required');
      echo '</div>';    
      // apellido
      echo '<div class="large-12">';
      $crear->label('apellido', 'Apellido(s)', '');
      $crear->input('apellido','text','Ingrese el o los Apellidos','pattern="alpha" required');
      echo '</div>'; 
      // cedula
      echo '<div class="large-12">';
      $crear->label('cedula', 'Cédula de Indentidad', '');
      $crear->input('cedula','text','Ingrese su número de cédula','pattern="integer" required');
      echo '</div>';  
      // Nacionalidad
      echo '<div class="large-12">';
      $crear->label('nacionalidad','Nacionalidad','');
      $crear->select('nacionalidad','required');
      echo '</div>';
      // correo
      echo '<div class="large-12">';
      //label($for, $title, $atributo);
      $crear->label('sol[]', 'Correo Electrónico', '');
      //input($name,$type,$placeholder,$atributo);
      $crear->input('sol[]','email','Ingrese un Correo Válido','pattern="email" required');
      echo '</div>';
      // teléfono
      echo '<div class="large-12">';
      $crear->label('sol[]', 'Teléfono', '');
      $crear->input('sol[]','text','Ingrese un número telefónico','pattern="integer" required');
      echo '</div>';
      
      echo '<button class="button small tiny" type="submit" name="accion" value="solicitar">Solicitar</button>';
      
      $crear->form_F();
      
      ?>
    </div>
  </dd>
  <dd>
    <a href="#panel2">Acceder</a>
    <div id="panel2" class="content active">
      <?php
      $acceder = new Formulario('Acceso al Censo de Comites de Bioética');
      //form_I($method,$action,$name,$onsubmit,$atributo)
      $acceder->form_I('post','mVI.php','acceder','','data-abide novalidate="novalidate"');
      
      echo '<div class="large-12">';
      //label($for, $title, $atributo);
      $acceder->label('cedula', 'Cédula', '');
      //input($name,$type,$placeholder,$atributo);
      $acceder->input('cedula','text','Ingrese Correo ó Usuario','required');
      echo '</div>';
      
      echo '<div class="large-12">';
      $acceder->label('pass', 'Contraseña', '');
      $acceder->input('pass','password','Ingrese su contraseña','required');
      echo '</div>';
      
      echo '<button class="button small tiny" type="submit">Acceder</button>';
      
      $acceder->form_F();    
      ?>
    </div>
  </dd>
  <dd>
    <a href="#panel3">¿Olvidó su contraseña?</a>
    <div id="panel3" class="content">
      <?php
      $acceder = new Formulario('Recuperar Contraseña');
      //form_I($method,$action,$name,$onsubmit,$atributo)
      $acceder->form_I('post','#','recuperar','','data-abide novalidate="novalidate"');
      
      echo '<div class="large-12">';
      //label($for, $title, $atributo);
      $acceder->label('correo', 'Correo Electrónico', '');
      //input($name,$type,$placeholder,$atributo);
      $acceder->input('correo','email','Ingrese el Correo Electrónico','pattern="email" required');
      echo '</div>';
      
      echo '<button class="button success tiny" type="submit">Enviar Contraseña al Correo</button>';
      
      $acceder->form_F();    
      ?>
    </div>
  </dd>
</dl>
<?php
    echo '</div>';
    echo '<h5 class="text-center panel large-12 columns">Todos los Derechos reservados &copy;<small></small></h5>';
echo '</div>';
$html->links('JS','js/foundation/foundation.js');
$html->links('JS','js/foundation/foundation.abide.js');
$html->links('JS','js/vendor/jquery.js');
$html->links('JS','js/foundation.min.js');
echo '<script>
      $(document).foundation();
    </script>';
$html->body_F();

?>



