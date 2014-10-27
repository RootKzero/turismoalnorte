
<center><h2>Experiencias Arboledas</h2></center>
<script LANGUAGE=JavaScript>
//aqui pones todas las direcciones de las fotos que quieras
var imagenes= new Array("images/banco_imag/1.jpg","images/banco_imag/2.jpg","images/banco_imag/3.jpg","images/banco_imag/4.jpg","images/banco_imag/5.jpg","images/banco_imag/6.jpg","images/banco_imag/7.jpg","images/banco_imag/8.jpg","images/banco_imag/9.jpg","images/banco_imag/10.jpg","images/banco_imag/11.jpg","images/banco_imag/12.jpg","images/banco_imag/13.jpg","images/banco_imag/14.jpg","images/banco_imag/15.jpg","images/banco_imag/16.jpg","images/banco_imag/17.jpg","images/banco_imag/18.jpg","images/banco_imag/19.jpg","images/banco_imag/20.jpg","images/banco_imag/21.jpg","images/banco_imag/22.jpg","images/banco_imag/23.jpg","images/banco_imag/24.jpg","images/banco_imag/25.jpg","images/banco_imag/26.jpg","images/banco_imag/27.jpg","images/banco_imag/28.jpg","images/banco_imag/29.jpg","images/banco_imag/30.jpg","images/banco_imag/31.jpg","images/banco_imag/32.jpg","images/banco_imag/33.jpg","images/banco_imag/34.jpg" );

var numero=0;
var cuantas=imagenes.length-1;

function siguiente(dato){
if (dato==0){
numero++;
if (numero>cuantas){
numero=0;}}

if (dato==1){
numero--;
if (numero<0){
numero=cuantas;}}

var poner= imagenes[numero];
foto.src=poner;
}

</script>

<form name="forma">
<input type=button value=siguiente name=boton onclick=siguiente(0);>
<input type=button value=anterior name=boton onclick=siguiente(1);>
</form>

<IMG id=foto name=foto src="images/banco_imag/34.jpg"></td></tr>

