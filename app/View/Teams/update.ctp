<div>
	<?php
		echo $this->Form->create('Teams', array('url' => array('controller' => 'Teams', 
                                                                  'action' => 'update')
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
					<input type="submit" value="Select" />
				</p>
				<div id="selected_team">
				</div>

	</form>
</div>
<script type="text/javascript">
</script>

