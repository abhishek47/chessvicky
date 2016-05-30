 $(function () {

        for (i = new Date().getFullYear() ; i > 1900; i--) {
            $('#years').append($('<option />').val(i).html(i));
        }

        for (i = 1; i < 13; i++) {
            $('#months').append($('<option />').val(i).html(i));
        }

        
       
         $('#days').append($('<option />').val('Day').html('Day')); 
         for (i = 1; i < 32; i++) {
            $('#days').append($('<option />').val(i).html(i));
        }


    });

    function updateNumberOfDays() {
        $('#days').html('');
        month = $('#months').val();
        year = $('#years').val();
        days = daysInMonth(month, year);
         

        for (i = 1; i < days + 1 ; i++) {
            $('#days').append($('<option />').val(i).html(i));
        }

    }

    function daysInMonth(month, year) {
        return new Date(year, month, 0).getDate();
    }