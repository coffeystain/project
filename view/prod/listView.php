
      <!-- page content -->
      <div class="span9">
        <div class="pageContent">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Qty</th>
                    </tr>
                </thead>
                <tbody>
<?php

    foreach ( $product as $key => $item ) {?>

                <tr>
                    <td></php print $item["prod_name"]; ?></td>
                    <td></php print $item["prod_description"]; ?></td>
                    <td></php print $item["prod_price"]; ?></td>
                    <td></php print $item["prod_qty"]; ?></td>
                </tr>
                </tbody>
<?php }

?>

            </table>

        </div><!--/well-->
      </div><!--/span-->
      <!-- End page content -->