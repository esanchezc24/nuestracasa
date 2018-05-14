<section class="module bcp"> <!--Cambiara la clase bcp segun el banco-->
	<div class="container">
		<form action="#" method="post" class="form-horizonal form">
	        <div class="form-header bcp-bg-color"> <!-- bcp-bg-color cambiara segun el banco-->
		        <i class="fa fa-circle bcp-color"></i> Datos Personales <!-- bcp-color cambiara segun el banco-->     
		    </div>
	        <input type="hidden" name="correo_asesor" id="correo_asesor" value="bcp@nuestracasa.pe">
	        <div class="form-body">
	            <div class="form-row">	                
                    <label class="subtitulo">Documento de identidad:</label>              
                    <div class="peque">
                        <select>
                            <option value="dni"> DNI </option>
                            <option value="pasaporte"> Pasaporte </option>
                        </select>
                    </div>
                    <div class="mediano">
                        <input type="text" name="num_doc" id="num_doc" placeholder="Ingresa tu número de documento de identidad" maxlength="8" minlength="8" class="form-control">
                    </div>
                </div>
	            <div class="form-row">	             
                    <label class="subtitulo">Correo electronico:</label>
                    <div class="grande">
                        <input type="text" name="correo" id="correo" placeholder="Ingresa tu correo electrónico" class="form-control">
                    </div>	               
	            </div>
	            <div class="form-row">	                
	                <label class="subtitulo">Celular:</label>	               
	                <div class="grande">
	                    <input type="text" name="celular" id="celular" placeholder="Ingresa tu número de celular" maxlength="" minlength="" class="form-control">	             
	                </div>
	            </div>
	        </div>
	        <div class="form-header bcp-bg-color"> <!-- bcp-bg-color cambiara segun el banco-->
		        <i class="fa fa-circle bcp-color"></i> Datos Financieros <!-- bcp-color cambiara segun el banco-->     
		    </div>
		    <div class="form-body">
	            <div class="form-row">	                
                    <label class="subtitulo">Tengo la cuota inicial:</label>              
                    <div class="peque">
                        <select>
                            <option value="SI"> SI </option>
                            <option value="NO"> NO </option>
                        </select>
                    </div>
                </div>
	            <div class="form-row">	             
                    <label class="subtitulo">Precio del Inmueble:</label>
                    <div class="grande">
                        <input type="text" name="precio" id="precio" placeholder="Ingresa el precio del inmueble" class="form-control">
                    </div>	               
	            </div>	            
	        </div>
            <div class="form-footer">
                    <button type="submit" class="button banco-btn bcp-bg-color">Enviar</button>
            </div>
	    </form>		
	</div>
</section>