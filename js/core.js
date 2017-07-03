$(document).ready(function () {

// für Click auf Konto erstellen
    $('.newAccount').click(function () {

        dataToSend = {cmd: "getKontoHinzufuegen"};

        $.ajax({
            url: 'klugeDatei.php',
            method: "post",
            data: dataToSend,
            success: function (dataReceived) {
                //console.log(dataReceived);

                var myModal = $('#test2');

                myModal.find('.modal-body').html(dataReceived.view);

                $('#test2').modal('show');

            }
        });

    });

// für Click auf Rechnung erstellen oder bearbeiten
    $('.editBill, .newBill').click(function () {
        var billId = $(this).attr('data-id');

        dataToSend = [{name: "cmd", value: "getBillView"}];

        //if there is an id given...
        if (typeof billId !== 'undefined') {
            dataToSend.push({name: "id", value: billId});
        }

        $.ajax({
            url: 'klugeDatei.php',
            method: "post",
            data: dataToSend,
            success: function (dataReceived) {
                //console.log(dataReceived);

                var myModal = $('#test2');

                if (typeof billId !== 'undefined') {
                    myModal.find('.modal-title').html('Rechnung Nummer ' + billId + ' bearbeiten');
                } else {
                    myModal.find('.modal-title').html('Neue Rechnung erstellen');
                }

                myModal.find('.modal-body').html(dataReceived.view);


                $('#test2').modal('show');

            }
        });
        //console.log($(this).attr('data-id'));
    });

    // zum Löschen von Rechnungen
    $('.deleteBill').click(function () {
        var billId = $(this).attr('data-id');

        dataToSend = [{name: "cmd", value: "deleteBill"}];

        //if there is an id given...
        if (typeof billId !== 'undefined') {
            dataToSend.push({name: "id", value: billId});
        }


        $.ajax({
            url: 'klugeDatei.php',
            method: "post",
            data: dataToSend,
            success: function (dataReceived) {
                console.log(dataReceived);
                location.reload();

            }
        });


    });


});

