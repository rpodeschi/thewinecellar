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
<div class="new-button"><?php echo $this->Html->link(__('New Producer'), array('action' => 'add')); ?></div>
<div class="producers index">
	<h2><?php echo __('Producers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('producer_name');?></th>
			<th><?php echo $this->Paginator->sort('country_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($producers as $producer): ?>
	<tr>
		<td><?php echo h($producer['Producer']['producer_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($producer['Country']['country_name'], array('controller' => 'countries', 'action' => 'view', $producer['Country']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link($this->Html->image('view.gif', array('alt' => __('View'),'title' => __('View'),)), array('action' => 'view', $producer['Producer']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link($this->Html->image('edit.gif', array('alt' => __('Edit'),'title' => __('Edit'))), array('action' => 'edit', $producer['Producer']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink($this->Html->image('delete.gif', array('alt' => __('Delete'),'title' => __('Delete'))), array('action' => 'delete', $producer['Producer']['id']),array('escape' => false), __('Are you sure you want to delete # %s?', $producer['Producer']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
<?php echo $this->element('paginator'); ?>
</div>