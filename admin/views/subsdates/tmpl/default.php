<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_aps
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<form action="index.php?option=com_reference&view=subsdates" method="post" id="adminForm" name="adminForm">
	<div id="j-sidebar-container" class="span2">
    <?php echo $this->sidebar; ?>
	</div>
	<div id="j-main-container" class="span10">
	<table class="table table-striped table-hover">
		<thead>
		<tr>
	 		<th width="10%">
				<?php echo JText::_('COM_REFERENCE_SUBSSUMMARY_YEAR') ;?>
				</th>
				<th width="10%">
				<?php echo JText::_('COM_REFERENCE_SUBSSUMMARY_SUBSSTARTDATE') ;?>
				</th>
				<th width="10%">
				<?php echo JText::_('COM_REFERENCE_SUBSSUMMARY_SUBSENDDATE') ;?>
				</th>
				<th width="10%">
				<?php echo JText::_('COM_REFERENCE_SUBSSUMMARY_SUBSPAYBYDATE') ;?>
				</th>
				<th width="10%">
				<?php echo JText::_('COM_REFERENCE_SUBSSUMMARY_SUBSPAIDRESET') ;?>
				</th>
				<th width="10%">
				<?php echo JText::_('COM_REFERENCE_SUBSSUMMARY_SUBSALLOCATED') ;?>
				</th>
                       
		</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="6">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
			<?php if (!empty($this->items)) : ?>
				<?php foreach ($this->items as $i => $row) :
					$link = JRoute::_('index.php?option=com_reference&task=subsdate.edit&id=' . $row->id);
				?>
					<tr>
						<td>
        							<a href="<?php echo $link; ?>"><?php echo $row->subsyear; ?></a>
        				</td>
        				<td>
        							<?php echo $row->subsstartdate; ?>
        				</td>
        				<td>
        							<?php echo $row->subsenddate; ?>
        				</td>
        				<td>
        							<?php echo $row->subpaybydate; ?>
        				</td>
        				<td>
        							<?php echo $row->SubsPaidReset; ?>
        				</td>
        				<td>
        							<?php echo $row->SubsAllocated; ?>
        				</td>
        				
        				</tr>
            	<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>
        <input type="hidden" name="task" value=""/>
	<input type="hidden" name="boxchecked" value="0"/>
	<?php echo JHtml::_('form.token'); ?>
</div>
</form>