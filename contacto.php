
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantillabase.dwt.php" codeOutsideHTMLIsLocked="false" -->

<head>
<link href='image
s/1_64x64.png' rel='icon' type='image/x-icon'/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Inicio</title>
<?php $menuseleccionado = 5;?>
<!-- InstanceEndEditable -->


<meta name="keywords" content="Chrome Web Design, CSS, HTML, free template, piecemaker" />
<meta name="description" content="Chrome Web Design is a free website template integrated with PieceMaker 3D Flash Slider." />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="scripts/swfobject/swfobject.js"></script>
<script type="text/javascript">
      var flashvars = {};
      flashvars.cssSource = "css/piecemaker.css";
      flashvars.xmlSource = "piecemaker.xml";
		
      var params = {};
      params.play = "true";
      params.menu = "false";
      params.scale = "showall";
      params.wmode = "transparent";
      params.allowfullscreen = "true";
      params.allowscriptaccess = "always";
      params.allownetworking = "all";
	  
      swfobject.embedSWF('piecemaker.swf', 'piecemaker', '960', '500', '10', null, flashvars,    
      params, null);
    
    </script>

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//cdn.zopim.com/?po1srEXZPSLlQMx05Ugyhov2S4ejJZob';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->
</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>




<div id="templatemo_wrapper">

	<div id="templatemo_header">
	  <div id="site_title"><h1><a href="#" target="_parent">Free CSS Templates</a></h1></div>
   	  <div id="templatemo_menu" class="ddsmoothmenu">
           <?php include("includes/menu.php"); ?>
            
        </div> <!-- end of templatemo_menu --></div> <!-- end of header --><!-- InstanceBeginEditable name="flash" --><div id="templatemo_main">
    	<h2>Contactar:<br />
    	</h2>
        <h3>Pregúntanos lo que quieres saber</h3>
        <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
                      <table align="left">
                        <tr valign="baseline">
                          <td nowrap align="right">Nombre:</td>
                          <td><span id="sprytextfield1">
                            <input type="text" name="strNombre" value="" size="32">
                          <span class="textfieldRequiredMsg">*</span></span></td>
                        </tr>
                        <tr valign="baseline">
                          <td nowrap align="right">Email:</td>
                          <td><span id="sprytextfield2">
                          <input type="text" name="strEmail" value="" size="32">
                          <span class="textfieldRequiredMsg">*</span></span></td>
                        </tr>
                        <tr valign="baseline">
                          <td nowrap align="right">Pais:</td>
                          <td><input type="text" name="strPais" value="" size="32"></td>
                        </tr>
                        <tr valign="baseline">
                          <td nowrap align="right">Interes:</td>
                          <td><select name="intInteres">
                            <option value="1" <?php if (!(strcmp(1, ""))) {echo "SELECTED";} ?>>Arboledas</option>
                            <option value="1" <?php if (!(strcmp(1, ""))) {echo "SELECTED";} ?>>Felicitaciones</option>
                            <option value="1" <?php if (!(strcmp(1, ""))) {echo "SELECTED";} ?>>Consulta General</option>
                            </select></td>
                        </tr>
                        <tr valign="baseline">
                          <td nowrap align="right">Direccion:</td>
                          <td><input type="text" name="strDireccion" value="" size="32"></td>
                        </tr>
                        <tr valign="baseline">
                          <td nowrap align="right">Movil:</td>
                          <td><span id="sprytextfield3">
                          <input type="text" name="strMovil" value="" size="32">
                          <span class="textfieldRequiredMsg">*</span></span></td>
                        </tr>
                        <tr valign="baseline">
                          <td nowrap align="right">Poblacion:</td>
                          <td><input type="text" name="strPoblacion" value="" size="32"></td>
                        </tr>
                        <tr valign="baseline">
                          <td nowrap align="right">Provincia:</td>
                          <td><input type="text" name="strProvincia" value="" size="32"></td>
                        </tr>
                        <tr valign="baseline">
                          <td align="right" valign="top" nowrap>Comentarios:</td>
                          <td><textarea name="strComentarios" cols="32" rows="6"></textarea></td>
                        </tr>
                        <tr valign="baseline">
                          <td nowrap align="right">&nbsp;</td>
                          <td><input type="submit" value="Enviar"></td>
                        </tr>
                      </table>
                      <input type="hidden" name="MM_insert" value="form1">
          </form>
        
        <div class="col_w300 float_r">
            <div class="col_fw">	
            <h4>EJECUTIVOS</h4>
              <h6> Turismo al Norte</h6>
              <br />
              JULIE VASQUEZ:3165287059<br />
              PILAR CEPEDA:3114761458<br />
              FRANK DIAZ:3208844905<br />
            <br />
                turismo_alnorte@hotmail.com<a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"></a></div>            
            <div class="col_fw_last">
                <h4>Ubiquenos!</h4>
           <?php include("includes/ubicacion.php"); ?>
            </div>
        </div>
	    <div class="cleaner"></div>
    </div> <!-- InstanceEndEditable -->
    <div id="templatemo_main"><!-- InstanceBeginEditable name="Contenido" -->
      
    <!-- InstanceEndEditable --><!-- InstanceBeginEditable name="subcontenido" -->
    
    <!-- InstanceEndEditable -->
    <div class="cleaner"></div>
  </div>
</div>
    
    <div class="cleaner"></div>

<div id="templatemo_footer_wrapper">
    <?php include("includes/footer.php"); ?>
</div> 
  
</body>
<a href="#" title="Siguenos en Youtube" target="_blank"><img src="images/youtube.png" width="35" height="117" border="0" style="position: fixed; bottom: 285px; right: 0px;"/></a> 
<a href="http://www.facebook.com/turismo.alnorte.9" title="Siguenos en Facebook" target="_blank"><img src="images/Facebook.jpg" width="38" height="117" border="0" style="position: fixed; bottom: 160px; right: 0px;"/></a> 
<a href="https://twitter.com/turismoalnorte" title="Siguenos en Twitter" target="_blank"><img src="images/twitter.png" width="38" height="117" border="0" style="position: fixed; bottom: 30px; right: 0px;"/></a>

<!-- InstanceEnd --></html>

