<div class="">
    <div class="col-lg-12 well">
        <div class="row">
            <form id="rechnungErstellen-form" action="billForm" method="post" role="form">
                <div class="col-sm-12">
                    <div class="form-group" style="display: none;">
                        <label for="rnnr">Rechnungsnummer</label>
                        <input type="text" placeholder="Rn Nr" name="rnnr" class="form-control" id="rnnr"
                               value="<?php echo $this->rnnr; ?>">
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="vname">Vorname</label>
                            <input type="text" placeholder="Vorname" name="vname" class="form-control" id="vname"
                                   value="<?php echo $this->vname; ?>">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="nname">Nachname</label>
                            <input type="text" placeholder="Nachname" name="nname" class="form-control" id="nname"
                                   value="<?php echo $this->nname; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="straße">Straße</label>
                            <input type="text" placeholder="Straße" name="straße" class="form-control" id="straße"
                                   value="<?php echo $this->straße; ?>">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="nummer">Hausnummer</label>
                            <input type="text" placeholder="Hausnummer" name="nummer" class="form-control" id="nummer"
                                   value="<?php echo $this->nummer; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="plz">PLZ</label>
                            <input type="text" placeholder="PLZ" name="plz" class="form-control" id="plz"
                                   value="<?php echo $this->plz; ?>">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="ort">Ort</label>
                            <input type="text" placeholder="Ort" name="ort" class="form-control" id="ort"
                                   value="<?php echo $this->ort; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="beschreibung">Beschreibung</label>
                        <input type="text" placeholder="Beschreibung" name="beschreibung" class="form-control" id="beschreibung"
                               value="<?php echo $this->beschreibung; ?>">
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="betrag">Betrag</label>
                            <input type="text" placeholder="Betrag" name="betrag" class="form-control" id="betrag"
                                   value="<?php echo $this->betrag; ?>">
                        </div>
                    </div>

                    <div class="form-group" style="display: none">
                        <label for="kontoid">KontoId</label>
                        <input type="text" class="form-control" name="kontoid" id="kontoid" value="<?php echo $this->kontoid; ?>">
                    </div>

                    <div class="Buttons">
                        <input type="reset" class="btn btn-lg btn-info" value="Abbrechen" data-dismiss="modal">
                        <input type="submit" class="btn btn-lg btn-info" value="Speichern">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">

    /*if ($('#kontoid').value == ''))
    {
        //$('#kontoid').value =
    }*/

    $('#rechnungErstellen-form').submit(function (e) {
        e.preventDefault(); //Submit abgefangen


        var urlToSendFormularTo = $(this).attr('action');
        var variablesFromFormular = $(this).serialize(); //nice function which gets all fields from the form for us


        $.ajax({
            url: urlToSendFormularTo,
            method: "post",
            data: variablesFromFormular,
            success: function (dataReceived) {
                //check values in dataReceived to see if everything was fine
                console.log(dataReceived);

                location.reload();

            }
        });
    })
    ;
</script>