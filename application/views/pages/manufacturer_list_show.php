
<h1 style="color: deeppink; text-align: center ">Manufacturer List</h1>
<table class="table table-bordered">

    <thead>
    <tr>

        <th style="color: blue">Manufacturer ID</th>
        <th style="color: #97310e">Manufacturer Name</th>
        <th style="color: red">Manufacturer Long Des</th>
        <th style="color: firebrick">Manufacturer Short DeS</th>
        <th style="color: greenyellow">Action</th>

    </tr>
    </thead>
    <tbody>

    <?php

    foreach ($manufacturer_details as $manufacturer_details):


        // $categoryDetailsID=$categoryDetails['category_id'];
       // $categoryDetailsID=$categoryDetails->category_id;
        ?>
        <tr>
            <td style="color: #0e90d2"><?php echo $manufacturer_details->manufacturer_id?></td>

            <td style="color: #0e90d2"><?php echo $manufacturer_details->manufacturer_name?></td>

            <td style="color: #985f0d"><?php echo $manufacturer_details->manufacturer_long_description?></td>

            <td style="color: slateblue"><?php echo $manufacturer_details->manufacturer_short_description?></td>
            <td>
                <a class="btn btn-info" href="<?php echo base_url("edit-manufacturer/$manufacturer_details->manufacturer_id")?>">
                    <i class="halflings-icon icon-edit"></i>Update
                </a>

                    <a class="btn btn-danger"  href="#" title="Delete">
                        <i class="halflings-icon white trash"></i>Delete
                    </a>

            </td>

        </tr>

    <?php endforeach; ?>

    </tbody>

</table>

