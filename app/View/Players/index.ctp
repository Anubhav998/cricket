<div>
	<?php
		echo $this->Form->create('Player', array('url' => array('controller' => 'Players', 
                                                                  'action' => 'index'),
												'type'=>'file'
                                    ));
	?>
		<fieldset>
			<div>
				<p>
					<label>Player Name:</label>
					<input type="text" id="name" value="" name="name" />
				</p>
				<p>
					<label>Player Birthdate</label>
					<input name='txtCalendar' id='idCalendar' class='inputBoxStyle' readonly>
					<img src='../img/cal.gif' align='absmiddle' onmouseover="fnInitCalendar(this, 'idCalendar')">
				</p>
				<p>
					<label>Player Role:</label>
					<input type="text" id="role" value="" name="role" />
				</p>
				
				<p>
                      <label>Upload Player Image : </label>
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