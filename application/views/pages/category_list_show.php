


    <h1 style="color: deeppink; text-align: center ">Product Category</h1>

    <table class="table table-bordered">

        <thead>

        <tr>
            <th style="color: #97310e">Category ID</th>
            <th style="color: #97310e">Category Name</th>
            <th style="color: palegreen">Category Long Des</th>
            <th style="color: firebrick">Category Short DeS</th>
            <th style="color: indigo">Category Status</th>
            <th style="color: mediumseagreen">Action</th>
        </tr>
        </thead>
        <tbody>

        <?php
        foreach ($categoryDetails as $categoryDetails):

          //  $categoryDetailsID=$categoryDetails['category_id'];

           $categoryDetailsID=$categoryDetails->category_id;

        ?>

        <tr>

          <!--===================<td style="color: #0e90d2"><?php echo $categoryDetails->category_id?></td>================== -->
            <td style="color: #0e90d2"><?php echo $categoryDetailsID?></td>

            <td style="color: #0e90d2"><?php echo $categoryDetails->category_name?></td>

            <td style="color: #985f0d"><?php echo $categoryDetails->category_long_description?></td>

            <td style="color: slateblue"><?php echo $categoryDetails->category_short_description?>

            <td>
                <?php if ($categoryDetails->category_status==1) {
                    echo 'Active';
                }
                else if ($categoryDetails->category_status==2){
                    echo 'Inactive';
                }
                else if ($categoryDetails->category_status==3){
                    echo 'Deleted';
                }
                ?>

            </td>

            <td>
                <?php if ($categoryDetails->category_status==1 || $categoryDetails->category_status==3){?>
                    <a class="btn btn-success" href="<?php echo base_url("change-category-status/2/$categoryDetailsID")?>">
                    <!-- As i am passing tho variable into base_url so there must should double quotation""
                     (Because single quoatation will not work for double value passing)-->
                    <i class="halflings-icon thumbs-up"></i>
                </a>

                <?php  } else if (($categoryDetails->category_status==2)) { ?>
                    <a class="btn btn-danger" href="<?php echo base_url("change-category-status/1/$categoryDetailsID")?>">
                    <i class="halflings-icon thumbs_down"></i>
                </a>
                <?php  }?>

                
                <a class="btn btn-info" href="<?php echo base_url("edit-category/$categoryDetailsID")?>">
                    <i class="halflings-icon icon-edit"></i>Update
                </a>
                <?php if (($categoryDetails->category_status!=3)) { ?>
                <a class="btn btn-danger"  href="<?php echo base_url("change-category-status/3/$categoryDetailsID")?>" title="Delete">
                    <i class="halflings-icon white trash"></i>Delete
                </a>
            <?php } ?>
            </td>
         </tr>

         <?php endforeach; ?>

        </tbody>

    </table>

