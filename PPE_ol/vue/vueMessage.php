<div class="banniere">
<h3>Messages</h3>
</div>


<center>
<div class='col-md-6'>
	<table class="table table-striped table-dark">
		
		<tr><td>Nom</td><td>Prenom</td><td>Date du Message</td><td>E-mail</td><td>Thème</td><td>Message</td></tr>

		<?php

		foreach($afficher_message as $unmessage){
			echo"
				<tr>
					<td>".$unmessage['nom']."</td>
					<td>".$unmessage['prenom']."</td>
					<td>".$unmessage['dateMessage']."</td>
					<td>".$unmessage['email']."</td>
					<td>".$unmessage['theme']."</td>
					<td>".$unmessage['message']."</td>
				</tr>
				";
			}
		?>
	</table>
</div>
</center>