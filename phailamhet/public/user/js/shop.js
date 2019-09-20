var local_link = "http://localhost/Laravel/Ai_template/aisuphu-banhang/phailamhet/public/";
var so_hinh = 0;
function shop_add_to_cart(id) {
    console.log(id);
    $.ajax({
        url: local_link + "user/addtocart/" + id, 
        dataType: 'json',
        type: 'get',
        success: function(response) {
            
        }
    });
    return false;
}


function function_name(argument) {
    var data_file = this_input.files;
    var token = $('meta[name="csrf-token"]').attr('content');
    var form_data = new FormData();
    form_data.append('_token', token);
    $.each(data_file, function(index, value) {
        form_data.append('file[]', value);
    });
    var content_img = "";
    var status_img = "";
    $.ajax({
        url: local_link + "admin/product/uploadimage", 
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function(response) {
            var danhsach_images = response;
            $.each(danhsach_images, function(index, value) {
                content_img = '<div style="margin-bottom: 60px;" onclick="xoa_ajax_multi_Image(' + value + ')">';
                content_img += '<img src="'+ local_link + value + '" width="200">';
                content_img += '<input type="text" name="file[image]['+dem+'][src]" value="' + value + '"/>';
                content_img += '</div>';
                status_img += value + '<br>';
                $('#them_img').append(content_img);
                dem++;
            });
        }
    });
    return false;
}