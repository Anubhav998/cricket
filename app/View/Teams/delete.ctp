<div>
	<?php
		echo $this->Form->create('Teams', array('url' => array('controller' => 'Teams', 
                                                                  'action' => 'delete')
                                    ));
	?>
				<p>
					<?php
							$tnm[]='select';
							//echo "<pre>"; print_r($teamname); exit;
							foreach ($teamname as $key => $value) {
								
				 				$tnm[$key]=$value;
							}
							/*echo "<pre>"; print_r($tnm); exit;*/
							echo $this->Form->input('teamname',array('label'=>'Select Team:','type'=>'select','options'=>$tnm));
					?>
				</p>
				<p>
					<input type="submit" value="Delete" />
				</p>

	</form>
</div>

<?php echo $this->Session->flash('form1'); ?>