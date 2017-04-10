<div class="container">
	<br><br>
	<table id='example' class="table table-striped table-bordered center" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th class="center" >ID</th>
                <th class="center">Title</th>
                <th class="center">Slug</th>
                <th class="center">Text</th>
            </tr>
        </thead>
        
        <tbody>
        	<?php 
				//var_dump($newsdata);
				foreach($getalldata as $news) 
				{
				?>	
            <tr>
                <td class="center"><?=$news->id;?></td>
                <td class="center"><?=$news->title;?></td>
                <td class="center"><?=$news->slug;?></td>
                <td class="center"><?=$news->text;?></td>
            </tr>
            	<?php	
				}
				?>
        </tbody>
    </table>

</div>


