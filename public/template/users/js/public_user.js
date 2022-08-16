// $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
// });

// function loadMore_user()
// {
//     const page = $('#page').val();
//     $.ajax({
//         type : 'POST',
//         dataType : 'JSON',
//         data : { page },
//         url : '/laptop-selling-website/services/load-product-user',
//         success : function (result) {
//             console.log(result);
//             // if (result.html !== '') {
//             //     $('#loadProductUser').append(result.html);
//             //     $('#page').val(page + 1);
//             // } else {
//             //     alert('Đã load xong Sản Phẩm');
//             //     $('#button-loadMore').css('display', 'none');
//             // }
//         }
//     })
// }