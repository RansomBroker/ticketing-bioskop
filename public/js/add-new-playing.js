// untuk menampilkan studio
$("#theater-select").change(function () {
    if ($(this).val() != 0) {
        $.ajax({
            type: 'GET',
            url: '/get-studio/'+$(this).val(),
            data: {},
            async: false,
            success: function (data) {
                $("#add-new-playing-btn").hide();
                $('#studio-container').hide();
                if (data.length > 0 ) {
                    $("#add-new-playing-btn").show();
                    $("#no-studio-alert").html('');
                    $('#studio-container').show();
                    $("#studio-select").html('');
                    $("#studio-select").append('<option value="" selected>--Pilih Studio--</option>')
                    data.forEach(function (i) {
                        console.log(i.id)
                        $("#studio-select").append('<option value='+i.id+'>'+i.name+'</option>')
                    })
                } else {
                    $("#add-new-playing-btn").hide();
                    $("#theater-container").append('<p class="text-red-500 mt-3" id="no-studio-alert">Theater Ini Tidak Memiliki Studio Silahkan Pilih Theater Lain</p>')
                }
            }
        });
    }
});
