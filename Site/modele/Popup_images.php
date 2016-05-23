<!DOCTYPE html>
<html>
	<head>
		<div id="light1" class="white_content">
			<h2 id="titre1"></h2> 
		  	<form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		    <fieldset>
		    <legend>Images 1 :</legend>
					<p>
					<label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Selectionner le fichier :</label>
					<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_SIZE; ?>" />
					<input name="fichier" type="file" id="fichier_a_uploader" />
					<input type="submit" name="submit" value="Uploader" />
					</p>
				</fieldset>
				<fieldset>
				<legend>Images 2 :</legend>
					<p>
					<label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Selectionner le fichier :</label>
					<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_SIZE; ?>" />
					<input name="fichier" type="file" id="fichier_a_uploader" />
					<input type="submit" name="submit" value="Uploader" />
					</p>
				</fieldset>
				<fieldset>
				<legend>Images 3 :</legend>
					<p>
					<label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Selectionner le fichier :</label>
					<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_SIZE; ?>" />
					<input name="fichier" type="file" id="fichier_a_uploader" />
					<input type="submit" name="submit" value="Uploader" />
					</p>
				</fieldset>
				<fieldset>
				<legend>Images 4 :</legend>
					<p>
					<label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Selectionner le fichier :</label>
					<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_SIZE; ?>" />
					<input name="fichier" type="file" id="fichier_a_uploader" />
					<input type="submit" name="submit" value="Uploader" />
					</p>
				</fieldset>
				<fieldset>
				<legend>Images 5 :</legend>
					<p>
					<label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Selectionner le fichier :</label>
					<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_SIZE; ?>" />
					<input name="fichier" type="file" id="fichier_a_uploader" />
					<input type="submit" name="submit" value="Uploader" />
					</p>
				</fieldset>
			</form>
			<a href = "javascript:void(0)" onclick = "document.getElementById('light1').style.display='none';document.getElementById('fade').style.display='none'"><h5>CLOSE<h5></a>
		</div>


		<div id="light2" class="white_content">
		  	<h2 id="titre2"></h2> 
		  	<form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		    	<fieldset>
		    	<legend>Image</legend>
		      	<p>
		      	<label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Selectionner le fichier :</label>
		      	<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_SIZE; ?>" />
		      	<input name="fichier" type="file" id="fichier_a_uploader" />
		      	<input type="submit" name="submit" value="Uploader" />
		      	</p>
		    </fieldset>
		  </form>
		  <a href = "javascript:void(0)" onclick = "document.getElementById('light2').style.display='none';document.getElementById('fade').style.display='none'"><h5>CLOSE<h5></a>
		</div>
		<div id="fade" class="black_overlay"></div>
		</div>

		<div id="light3" class="white_content">
		  	<h2 id="titre3"></h2>
			<form action='' method="post" enctype="multipart/form-data">
				<input type="submit" name="modifier "value="Modifier" />
				<input type="submit" name="supprimer" value="Supprimer" />
			</form>
		  	<a href = "javascript:void(0)" onclick = "document.getElementById('light3').style.display='none';document.getElementById('fade').style.display='none'"><h5>CLOSE<h5></a>
		</div>
		<div id="fade" class="black_overlay"></div>
		</div>
	<html>
<head>





