$(document).ready(function () {
    $('#country').on('change', function (e) {
        var cid = $('#country option:selected').data('cid');

        $.ajax({
            url: "chose/country",
            type: "GET",
            data: {id: cid},
            success: function (data) {
              //  data.each(function () {
                for (var i = 0; i < data.length; i++) {

                    $('#town').append('<option data-tid="' + data[i].tid + '">' + data[i].town + '</option>');
                    //  });
                }
            },
            dataType: 'json'
        });
    });
});