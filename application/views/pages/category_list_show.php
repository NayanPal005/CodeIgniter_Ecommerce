


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

            $categoryDetailsID=$categoryDetails['category_id'];
        ?>
        <tr>
            <td style="color: #0e90d2"><?php echo $categoryDetails['category_id']?></td>
            <td style="color: #0e90d2"><?php echo $categoryDetails['category_name']?></td>
            <td style="color: #985f0d"><?php echo $categoryDetails['category_long_description']?></td>
            <td style="color: slateblue"><?php echo $categoryDetails['category_short_description']?></td>
            <td>
            <?php if ($categoryDetails['category_status']==1) {

                echo 'Active';

               }

                else if ($categoryDetails['category_status']==2){
                    echo 'Inactive';
                }

                else if ($categoryDetails['category_status']==3){
                    echo 'Deleted';
                }

            ?>

            </td>
           <!-- <td style="color: gold"><?php echo $categoryDetails['category_status']?></td> -->
            <td>
                <?php if ($categoryDetails['category_status']==1 || $categoryDetails['category_status']==3){?>

                <a class="btn btn-success" href="<?php echo base_url("change-category-status/2/$categoryDetailsID")?>">
                    <!-- As i am passing tho variable into base_url so there must should double quotation""
                     (Because single quoatation will not work for double value passing)-->

                    <i class="halflings-icon thumbs-up"></i>
                </a>
              <?php  } else if (($categoryDetails['category_status']==2)) { ?>

                    <a class="btn btn-danger" href="<?php echo base_url("change-category-status/1/$categoryDetailsID")?>">
                    <i class="halflings-icon thumbs_down"></i>
                </a>
                <?php  }?>

                <a class="btn btn-info" href="" title="Update" >
                    <i class="halflings-icon icon-edit"></i>Update
                </a>

                <?php if (($categoryDetails['category_status']!=3)) { ?>
                <a class="btn btn-danger"  href="<?php echo base_url("change-category-status/3/$categoryDetailsID")?>" title="Delete">
                    <i class="halflings-icon white trash"></i>Delete
                </a>
            <?php } ?>

            </td>

         </tr>

         <?php endforeach; ?>

        </tbody>

    </table>

    <!--
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                <tr>
                    <th>Category Name</th>
                    <th>Category Long Des</th>
                    <th>Category Short DeS</th>
                    <th>Category Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($categoryDetails as $categoryDetails):
                ?>
                <tr>
                    <td><?php echo $categoryDetails['category_name']?></td>
                    <td class="center">2012/01/01</td>
                    <td class="center">Member</td>
                    <td class="center">
                        <span class="label label-success">Active</span>
                    </td>
                    <td class="center">
                        <a class="btn btn-success" href="#">
                            <i class="halflings-icon white zoom-in"></i>
                        </a>
                        <a class="btn btn-info" href="#">
                            <i class="halflings-icon white edit"></i>
                        </a>
                        <a class="btn btn-danger" href="#">
                            <i class="halflings-icon white trash"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    -->