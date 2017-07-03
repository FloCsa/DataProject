<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/main.css">
    <script type="text/javascript" src="../../../js/Registrierung.js"></script>
</head>
<body class="withSpace">
<div class="container">
    <h1 class="well">Registrierungsformular</h1>
    <div class="col-lg-12 well">
        <div class="row">
            <form>
                <div class="col-sm-6 form group">
                    <br>
                    <input type="radio" id="Frau" name="Anrede" value="Frau">
                    <label for="Frau">Frau</label>
                    <input type="radio" id="Herr" name="Anrede" value="Frau">
                    <label for="Herr">Herr</label>
                    <br>
                </div>
                <div class="col-sm-6 form group">
                    <br>
                    <input type="radio" id="privat" name="Konto" value="privat"  onclick="zeigeSteuernummer()">
                    <label for="privat">privat</label>
                    <input type="radio" id="gewerblich" name="Konto" value="gewerblich" onclick="zeigeSteuernummer()">
                    <label for="gewerblich">gewerblich</label>
                    <br>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <br>
                            <div id="vname">
                            <label>Vorname</label>
                            <input type="text" placeholder="Vorname" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 form-group">
                            <br>
                            <div id="nname">
                            <label>Nachname</label>
                            <input type="text" placeholder="Nachname" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Straße</label>
                            <input type="text" placeholder="Straße" class="form-control">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Hausnummer</label>
                            <input type="text" placeholder="Hausnummer" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label>Land</label>
                            <input type="text" placeholder="Land" class="form-control">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Stadt</label>
                            <input type="text" placeholder="Stadt" class="form-control">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>PLZ</label>
                            <input type="text" placeholder="PLZ" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Telefon</label>
                        <input type="text" placeholder="Telefonnummer" class="form-control">
                    </div>

                    <div class="form-group">
                        <div id="steuernr" style="display: none">
                        <label>Steuernummer</label>
                        <input type="text"  id="steuernummer" placeholder="Steuernummer" class="form-control" onclick="zeigeSteuernummer()">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>E-Mail</label>
                        <input type="text" placeholder="E-Mail Adresse" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>E-Mail bestätigen</label>
                        <input type="text" placeholder="E-Mail Adresse bestätigen" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Passwort</label>
                        <input type="password" placeholder="Passwort eingeben" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Passwort bestätigen</label>
                        <input type="password" placeholder="Passwort bestätigen" class="form-control">
                    </div>


                    <button type="button" class="btn btn-lg btn-info">Registrieren</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>