
		<form method="get" action="index.php">
		  <fieldset>
		    <legend>Mon formulaire :</legend>
		    <p>
                      <input type='hidden' name='action' value='created'>
		      <label for="immat_id">Immatriculation</label> :
		      <input type="text" placeholder="Ex : 256AB34" name="immatriculation" id="immat_id" required/>
		    </p>
		    <p>
		      <label for="color_id">Couleur</label> :
		      <input type="text" placeholder="Ex : Vert" name="couleur" id="color_id" required/>
		    </p>
		    <p>
		      <label for="mark_id">Marque</label> :
		      <input type="text" placeholder="Ex : Audi" name="marque" id="mark_id" required/>
		    </p>
		    <p>
		      <input type="submit" value="Envoyer" />
		    </p>
		  </fieldset> 
		</form>
