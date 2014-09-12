<?php $person = Model::readPersonInfo(); 
	$work = Model::readWork(); ?>	
				
				<div class="content border">
				
					<?php foreach($person as $item):?>
						<h2 id="padding-more"><?php echo $item->full_name; ?></h2>	
						
						<?php if(!empty($item->person_desc)):?>
						<p><?php echo $item->person_desc; ?></p>
						<?php endif; ?>
						
						<?php if(!empty($item->education)):?>
						<h2>Образование</h2>	
						<p>
							<?php echo $item->education; ?>
						</p>				
						<?php endif; ?>
						
						<h2>Дополнительная информация</h2>
						<?php if(!empty($item->add_info)):?>
						<p>
							<?php echo $item->add_info; ?>
						</p>
						<?php endif; ?>
						
					<?php endforeach; ?>
					
					
					<h2>Рабочий стаж</h2>				
					<table>
						<tr>
							<th class="table-border font-tnr bold">Место работы</th>
							<th class="table-border font-tnr bold">Период работы</th>
							<th class="table-border font-tnr bold">Должность</th>
						</tr>
						<?php foreach($work as $item):?>	
						<tr>
							<td class="table-border font-tnr"><?php echo $item->org; ?></td>
							<td class="table-border font-tnr"><?php echo $item->period; ?></td>
							<td class="table-border font-tnr"><?php echo $item->post; ?></td>
						</tr>
						<?php endforeach; ?>
					</table>
				</div>