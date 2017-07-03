<?php

class AccountModel
{
    public static function getAllAccounts()
    {
        $liste = array();

        $db = new Database();
        $sql = "SELECT kontoid, kontoname FROM konto;";
        $result = $db->query($sql);
        while ($konto = $db->fetchObject($result)) {


            $sql = "SELECT * FROM rechnung WHERE kontoid=".$konto->kontoid;
            $result2 = $db->query($sql);

            $rechnungen = array();

            while($rechnung = $db->fetchObject($result2))
            {
                $rechnungen[] = $rechnung;
            }

            $konto->rechnungen = $rechnungen;

            $sql = "SELECT SUM(betrag) AS summe FROM rechnung WHERE kontoid=".$konto->kontoid;
            $result3 = $db->query($sql);

            $summen = array();

            while($betrag = $db->fetchObject($result3))
            {
                $summen[] = $betrag;
            }

            $konto->summen = $summen;

          $liste[] = $konto;
        }

        return $liste;
    }


    public static function createAccount($data)
    {
        $db = new Database();
        $kontoname = $db->escapeString($data['kontoname']);
        $straße = $db->escapeString($data['straße']);
        $nummer = $db->escapeString($data['nummer']);
        $plz = $db->escapeString($data['plz']);
        $ort = $db->escapeString($data['ort']);
        $stnummer = $db->escapeString($data['stnummer']);
        $email = $db->escapeString($data['email']);


        $sql = "INSERT INTO `konto`(`kontoname`,`straße`,`nummer`,`plz`,`ort`,`stnummer`,`email`) VALUES('".$kontoname."','".$straße."','".$nummer."','".$plz."','".$ort."','".$stnummer."','".$email."')";
        $db->query($sql);
    }

}