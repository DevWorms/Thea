<?php
	
	//CLASE QUE IMPRIMIR� LA RESPUESTA DEL API; SI HAY UN ERROR, TAMBI�N SE MOSTRAR�. ESTA CLASE ES PADRE DE XML Y JSON PARA SU CONSUMO

	abstract class VistaApi	{
		
	    public $estado;
	    public abstract function imprimir($cuerpo);

	}
?>