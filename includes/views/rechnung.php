<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <title>Rechnung SmartChimp</title>
</head>
<body>
<div class="btn-group">
    <button type="button" class="glyphicon glyphicon-print"></button>
    <button type="button" class="glyphicon glyphicon-floppy-save"></button>
    <button type="button" class="glyphicon glyphicon-duplicate"></button>
</div>
<div class ="container">
    <div class ="OwnAddress">
        <address>
            <strong>SmartChimp AG</strong><br>
            Kufsteinerstraße 32<br>
            83059 Kolbermoor<br>
            Deutschland<br>
            <abbr title="Telefonnummer">Tel.:</abbr> (012) 345678-44
            <div class="Ansprechpartner">
                <address>
                    <strong>Ansprechpartner:</strong><br>
                    Hans-Peter Selfhtml<br>
                    <a href="mailto:#">rootuser@gmx.de</a>
                </address>
            </div>
        </address>
        <br><br>
        <address>
            <strong>Kunde</strong><br>
            Rechnungsnummer: 0001<br>
            Kundenvorname Kundennachname<br>
            Kundenstraße NR<br>
            PLZ<br>
            Kundenort<br>
        </address>
        <br>
    </div>
    <h3>Rechnung</h3>
    <br>
    <table class="table">
        <tr>
            <th>Pos.</th>
            <th>Beschreibung:</th>
            <th>Betrag</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Gadget 1</td>
            <td>5400,00 €</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Gadget 2</td>
            <td>33,44 €</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Gadget 3</td>
            <td>12,99 €</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Gadget 4</td>
            <td>798,00 €</td>
        </tr>
        <tr>
            <th>Gesamtsumme:</th>
            <th></th>
            <th>6.244,43 €</th>

        </tr>
    </table>
    <br><br>
    <div class="greetings">
        <p>
        <h4> Bitte überweisen Sie den Gesamtbetrag auf folgendes Konto:
            <br><br><br>
            <address id="Bank">
                <strong>Commerzbank München</strong><br>
                SmartChimp AG<br>
                Bankleitzahl 340 300 22<br>
                Kontonummer 12345667<br>
                Verwendungszweck: R0001
            </address>
            <br><br><br>
            Mit freundlichen Grüßen
            <br><br><br><br>
            Hans Peter Selfhtml

        </h4>
        </p>
    </div>
</div>
</body>
</html>