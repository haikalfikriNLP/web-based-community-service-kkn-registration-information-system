$(document).ready(function() {
    $('.datatable').DataTable({
        language: {
            'paginate': {
                'previous': '<i class="fas fa-angle-left"></i>',
                'next': '<i class="fas fa-angle-right"></i>'
            }
        }
    });
});

function showTelahKembali(id) {
    $('#status_id').val(id);
    $('#modelTelahKembali').modal('show');
}

function showHapus(id) {
    $('#hapus_id').val(id);
    $('#modelHapus').modal('show');
}
