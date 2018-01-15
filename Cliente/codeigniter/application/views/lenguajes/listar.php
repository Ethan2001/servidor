
<div class="container">
<table class="table table-bordered">

	<tr><th>nombre</th><th>accion</th></tr>
	
	
	
		<?php foreach ($leng as $lengs): ?>
			<tr>
			 <td><?=$lengs->nombre ?></td>
			 <td><button class=" glyphicon glyphicon-edit "/>
			 <button class="glyphicon glyphicon-remove"/></td>
			 </tr>
			 
         <?php endforeach; ?>
		 </table>

	</div>
