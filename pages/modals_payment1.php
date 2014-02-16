<style>
.modelbo{
	height:32px !important;
}</style>

<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
	<h3><?php echo CONFERM ?></h3>
</div>
<div class="modal-body">
	<div class="tab-content">
		<div class="tab-pane active" id="">
			<p><?php echo DO_YOU_WANT_TO ?></p>
		</div>
	</div>
</div>
<div class="modal-footer">
	<button type="button" data-dismiss="modal" class="btn"><?php echo NO ?></button>
	<button type="button" data-dismiss="modal" class="btn" onclick="redirect1()"><?php echo BUY_NOW ?></button>
</div>