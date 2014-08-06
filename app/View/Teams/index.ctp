<div>
	<?php
		echo $this->Form->create('Teams', array('url' => array('controller' => 'Teams', 
                                                                  'action' => 'index'),
												'type'=>'file'
                                    ));
	?>
		<fieldset>
			<div>
				<p>
					<label>Team Name:</label>
					<input type="text" id="name" value="" name="name" />
				</p>
				
				<p>
                      <label>Upload Team Logo : </label>
                      <input type="file" name="photoimg" id="photoimg" class="file required" />
                     
                </p>
                <p>
					<input type="submit" value="ADD" />
				</p>
			</div>
		</fieldset>

	</form>
</div>

<?php echo $this->Session->flash('form1'); ?>