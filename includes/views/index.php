<?php
echo $this->header;
?>
    <div class="container">
        <header>
            <div class="page-header">
                <h1>SmartChimp
                    <small style="font-size: 12px;">logged in as</small>
                    <span class="user"><?php echo $this->username; ?></span>
                    <button type="button" class="btn btn-default btn-circle floatR newAccount" title="Konto erstellen">
                        <span class="glyphicon glyphicon-plus"></span>
                    </button>
                    <span style="font-size: 15px; float: right; margin: 10px;">Neues Konto</span>
                </h1>

            </div>
        </header>

        <?php

        foreach ($this->liste as $wert):

            ?>


            <div class="well">
                <button type="button" class="glyphicon glyphicon-chevron-right arrow collapsed" data-toggle="collapse"
                        data-target="#<?php echo $wert->kontoid; ?>"></button>
                <span class="kontobox"><?php echo $wert->kontoname; ?></span>
                <button type="button" class="btn btn-default btn-circle newBill" data-toggle="tooltip"
                        data-placement="auto"
                        title="Rechnung erstellen">
                    <span class="glyphicon glyphicon-plus"></span>
                </button>
                <div class="kontobetrag1"><?php foreach ($wert->summen as $summe) {
                        echo $summe->summe;
                    } ?> €
                </div>


            </div>
            <div class="collapse" id="<?php echo $wert->kontoid; ?>">
                <table class="table table-hover">

                    <tbody>
                    <?php foreach ($wert->rechnungen as $rechnung): ?>
                        <tr>
                            <td class="icons"><span class="glyphicon glyphicon-pencil editBill"
                                                    data-id="<?php echo $rechnung->rnnr; ?>"></span><span
                                        class="glyphicon glyphicon-trash deleteBill"
                                        data-id="<?php echo $rechnung->rnnr; ?>"></span></td>
                            <td class="number"><?php echo $rechnung->rnnr; ?></td>
                            <td class="content"><?php echo $rechnung->beschreibung; ?></td>
                            <td class="price"><?php echo $rechnung->betrag; ?> €</td>

                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endforeach; ?>


        <div class="panel panel-default">
            <div class="panel-footer" style="text-align: right">
                <div class="floatL">
                    <a href="logout" class="btn btn-info btn-lg">
                        <span class="glyphicon glyphicon-log-out"></span> Abmelden
                    </a>
                </div>
                <a href="" style="padding-right: 4px; border-right: 1px solid #c9c9c9">link 1</a>
                <a href="" style="padding-right: 4px; border-right: 1px solid #c9c9c9">link 2</a>
                <a href="">link 3</a>
            </div>
        </div>
    </div>


    <!--Modal test2 -->
    <div class="modal fade container" id="test2" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Konto hinzufügen</h4>
                </div>
                <div class="modal-body" style="height: 436px;">
                </div>
            </div>
        </div>
    </div>


<?php
echo $this->footer;
?>