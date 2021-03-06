<?php 
/**
    This file is part of TWC - The Wine Cellar Application.

    TWC - The Wine Cellar is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    TWC - The Wine Cellar is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with TWC - The Wine Cellar.  If not, see <http://www.gnu.org/licenses/>.
 */
?>
<div class="countries form">
<?php echo $this->Form->create('Country');?>
	<fieldset>
		<legend><?php echo $theAction . ' ' . __('Country'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('country_name',array('size'=>'45','title'=>__('Enter the country name',true)));
		echo $this->Form->input('country_code',array('size'=>'2','title'=>__('Enter the country code',true)));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>