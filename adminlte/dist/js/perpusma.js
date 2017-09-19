//Date picker
$(function() {
$('#datepicker2,#datepicker1').datepicker({
    // changeMonth:true,
    // changeYear:true,
    // yearRange:'1980:+0',
    defaultViewDate:"today",
    todayHighlight:"true",
    dateFormat:"yy-mm-dd",
    // autoclose: true
});
});

//untuk data tabel
$(function () {
    $("#data_table").DataTable();
    $('#table_biasa').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
    });
});
$(function () {
    $('#table_peminjaman').DataTable({order: [[0, 'desc']]});
});
$(function () {
    $('#table_buku').DataTable({"lengthMenu": [ [2, 4, 8, -1], [2, 4, 8, "All"] ],"pageLength": 2});
});

//script untuk membuat menu yang  dengan jquery situs:http://gawibowo.com/menandai-highlight-halaman-aktif-di-menu-menggunakan-jquery.htm
$(function() {
    $('.treeview-menu a[href~="' + location.href + '"]').parents('li').addClass('active');
});

//anggotaAutocomplete (Ajax)
function anggotaAutoComplete() {
    var min_length = 0;//min caracters display autocomplete
        var keywords = $('#search_anggota').val();
        if (keywords.length >= min_length) {
            $.ajax({
                url:'http://perpusma.com/peminjaman/anggota_auto_complete',
                type: 'POST',
                data:{keywords:keywords},
                success:function (data) {
                    $('#anggota_list').show();
                    $('#anggota_list').html(data);
                }
            });
        }else {
            $('#anggota_list').hide();
        }
}

//bukuAutocomplete (Ajax)
function bukuAutoComplete() {
    var min_length = 0;//min caracters display autocomplete
    var keywords = $('#search_buku').val();
    if (keywords.length >= min_length) {
        $.ajax({
            url:'http://perpusma.com/peminjaman/buku_auto_complete',
            type: 'POST',
            data: {keywords:keywords},
            success:function (data) {
                $('#buku_list').show();
                $('#buku_list').html(data);
            }
        });
    } else {
        $('#buku_list').hide();
    }
}

// setItem : Change the value of input when "clicked"
function setItemAnggota(item) {
    //change input value
    $('#search_anggota').val(item);
    $('#anggota_list').hide();
}

function setItemBuku(item) {
    //change input value
    $('#search_buku').val(item);
    $('#buku_list').hide();
}

// Create input "id_anggota" if not exist
function makeHiddenIdAnggota(nilai) {
    if ($("#id_anggota").length > 0) {
        $("#id_anggota").attr('value',nilai);
    } else {
        str = '<input type="hidden" id="id-anggota" name="id_anggota" value="'+nilai+'" />';
        $("#form-peminjaman").append(str);
    }
}

//Create input "id_buku" if not exist
function makeHiddenIdBuku(nilai) {
    if ($("#id-buku").length > 0) {
        $("#id-buku").attr('value',nilai);
    } else {
        str = '<input type="hidden" id="id-buku" name="id_buku" value="'+nilai+'" />';
        $("#form-peminjaman").append(str);
    }
}
