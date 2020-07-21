$(function () {
    $('.js-basic-example').DataTable({
        responsive: true,

        pageLength:5,
        'order': [[ 0, 'asc' ]],
        "language": {
            "lengthMenu": "Hiện _MENU_ tin trong mỗi trang",
            "zeroRecords": "Không tìm thấy",
            "info": "Đang hiện trang _PAGE_ trong _PAGES_ trang",
            "infoEmpty": "Không có dòng nào",
            "infoFiltered": "(Lọc trong _MAX_ tin)",
            "search": "Tìm kiếm:",
            "paginate":{"first":"<<","last":">>","next":">","previous":"<"},
        }
     

        // pageLength:8,
        //language: {
        //    paginate: {
        //        previous: " < ",
        //        next:" > "
        //    }
        //}
    });

    //Exportable table
    $('.js-exportable').DataTable({
        dom: 'Bfrtip',
        responsive: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});