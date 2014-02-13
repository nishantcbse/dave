<?php include_once('classes/generic.class.php'); ?>
<?php include_once('classes/admin/manage_products.class.php'); ?>
<?php include_once('classes/admin/functions-products.php'); ?>

<script src="js/admin/manage_product.js"></script>


                    <div class="row-fluid products-list" id='products-list-candidateinfo'>
						<div class="span12">
                            <div class="box">
    							<div class="box-title">
                                    <h3 id="products-candidateinfo-label"></h3>  
<!--                                    <div class="actions" id='list-actions'>
                                        <a class="btn btn-mini" id="products-add" href="#">
                                            <i class="icon-plus"></i>
                                        </a>
                                    </div>
-->    							</div>
    							<div class="box-content">
                                    <?php list_manageproductscandidateinfo(); ?>
    							</div>
  						    </div>

						</div>
					</div>


