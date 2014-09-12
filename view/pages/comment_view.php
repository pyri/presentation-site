<?php $comments = Model::readComment();?>	
				
				<div class="content border">
				
					<div class="desk inline-right">
					
						<?php $i=0;?>
						<?php foreach($comments as $comment):?>
							<?php $i++;?>
							<div id="cerror" class="msg border">
								<p id="msg-date" class="inline-right partition-dashed"><?php echo $comment->data;?></p>
								<p id="msg-name" class="inline-left partition-dashed"><?php echo $comment->name." (".$comment->mail.")";?></p>							
								<p id="msg-text" class="inflow-left font-green"><?php echo $comment->text;?></p>
							</div>
						<?php endforeach;?>	

						<?php $number = ceil($i/3);?>
						<?php while ($number != 0):?>						
							<div class="font-tnr">
								<a href="/?page=comment" class="msg-pagenumber inline-right border-solid"><?php echo $number;?></a>
							</div>
							<?php $number--;?>
						<?php endwhile;?>
					</div>	
					
					<div class="form">
						<form action="#" method="POST" enctype="multipart/form-data" name="addcom" id="addcom" onSubmit="return false">
							<h2>Имя</h2>
							<input type="text" placeholder="Введите свое имя" name="author" class="font-vernara font-black">
							
							<h2>Адрес электронной почты</h2>
							<input type="text"  placeholder="Укажите свой e-mail" name="e-mail" class="font-vernara font-black">
							
							<h2>Ваше сообщение</h2>
							<textarea name="text" placeholder="Текст сообщения" class="font-vernara font-black"></textarea>
							
							<input type="submit" onclick="doLoad(document.getElementById('addcom'))" class="btn inline-right font-vernara" name="send" id="send" value="Отправить!" />
						<form>
					</div>
		
				</div>