

 function brand(id) {

    var brand_id=$("#brand").val(id);

    cat_brand_filter();
      // alert('hi');

    }


function category(id) {

    var cat_id= $("#category").val(id);
    cat_brand_filter();

    }


 function cat_brand_filter() {

     var brand_id=$("#brand").val();

     var cat_id= $("#category").val()

    // alert(url);

     var total=brand_id+cat_id;

    // alert(total);

     $.ajax({

         url:'welcome/brand_cat_filter',

         method:"POST",

         data:{'b_id':brand_id,'c_id':cat_id},//b_id & c_id are the datas that passes in controller which is

          success:function (data) {

           console.log(data);



         }
     })




 }
