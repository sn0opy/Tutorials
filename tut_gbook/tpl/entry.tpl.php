<div class="entryBox">
	<div class="entryHead">
		<div class="entryName"><?=htmlentities($result['entryName'])?></div>
		<div class="entryDate"><?=htmlentities(date('d.m.y, H:i', $result['entryDate']))?></div>
	</div>
	<div class="entryText">
		<?=nl2br(htmlentities($result['entryText']))?>
	</div>
</div>