<?php

// Protection to avoid direct call of template
if (empty($conf) || ! is_object($conf))
{
	print "Error, template page can't be called as URL";
	exit;
}

$form = new Form($db);


llxHeader();

$linkback='';
print load_fiche_titre($langs->trans("ECommerceDashboard"), $linkback, 'eCommerceTitle@ecommerceext');

print '<br>';

if (count($sites)): ?>
	<div class="div-table-responsive">
	<table class="noborder" width="100%">
		<tr class="liste_titre">
			<td><?php print $langs->trans('ECommerceSite') ?></td>
			<td><?php print $langs->trans('ECommerceLastUpdate') ?></td>
			<td colspan="2">&nbsp;</td>
		</tr>
<?php
$var=!$var;
	foreach ($sites as $site)
	{ ?>
		<tr <?php print $bc[$var] ?>>
			<td><?php print $site->name ?></td>
			<td>
				<?php
					if ($site->last_update)
					{
					    //print $site['last_update'];
						print dol_print_date($site->last_update, 'dayhour');
					}
					else
						print $langs->trans('ECommerceNoUpdateSite');
				?>
			</td>
			<td>
				<div style="inline-block">
					<a class="button" 
						href="<?php print dol_buildpath('/custom/ecommerceext/site.php',1); ?>?id=<?php echo $site->id ?><?php echo GETPOST('to_date','int')?'&to_date='.GETPOST('to_date','int'):''; ?>"
						><?php print $langs->trans('ECommerceUpdateSite') ?></a>
					<a class="button" 
						href="<?php print dol_buildpath('/custom/ecommerceext/site.php', 1); ?>?id=<?php echo $site->id; ?><?php echo GETPOST('to_date','int')?'&to_date='.GETPOST('to_date','int'):''; ?>"
						><?php print $langs->trans('ECommerceUpdateAll') ?></a>
				</div>
			</td>
			<td>
				<?php $url=$site->getFrontUrl(); print $langs->trans("FrontOffice").': <a href="'.$url.'" target="_frontsite">'.$url.'</a>'; ?>
				<?php $url=$site->getBackUrl();
				print '<br>';
				print $form->textwithpicto($langs->trans("BackOffice"), $langs->trans("SeeECommerceConfFileIfKo"));
				print ': <a href="'.$url.'" target="_backsite">'.$url.'</a>'; ?>
			</td>
		</tr>
	<?php } ?>
	</table>
	</div>
<?php else: ?>
<p><?php $langs->trans('ECommerceNoSite') ?></p>
<?php endif;
llxFooter();