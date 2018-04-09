


    <h1>Product Category</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Category Name</th>
            <th>Category Long Des</th>
            <th>Category Short DeS</th>
            <th>Category Status</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($categoryDetails as $categoryDetails):
        ?>
        <tr>

            <td><?php echo $categoryDetails['category_name']?></td>
            <td><?php echo $categoryDetails['category_long_description']?></td>
            <td><?php echo $categoryDetails['category_short_description']?></td>
            <td><?php echo $categoryDetails['category_status']?></td>
        </tr>

        <?php endforeach; ?>

        </tbody>

    </table>




