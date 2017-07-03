<?php


class BillModel
{
    public static function getByPk($id)
    {
        $db = new Database();
        $sql = "SELECT * FROM rechnung WHERE rnnr=".$db->escapeString($id);

        $result = $db->query($sql);

        return $db->fetchAssoc($result);
    }

    public static function deleteBill($id)
    {
        $message = "Rechnung".$id."wurde gelöscht!";

        $db = new Database();
        $sql = "DELETE FROM rechnung WHERE rnnr=".$db->escapeString($id);

        $db->query($sql);

        return $message;
    }

    public static function createBill($data)
    {
        $db = new Database();
        $vname= $db->escapeString($data['vname']);
        $nname = $db->escapeString($data['nname']);
        $straße = $db->escapeString($data['straße']);
        $nummer = $db->escapeString($data['nummer']);
        $plz = $db->escapeString($data['plz']);
        $ort = $db->escapeString($data['ort']);
        $beschreibung = $db->escapeString($data['beschreibung']);
        $betrag = $db->escapeString($data['betrag']);
        $kontoid = $db->escapeString($data['kontoid']);


        $sql = "INSERT INTO `rechnung`(`vname`,`nname`,`straße`,`nummer`,`plz`,`ort`,`beschreibung`,`betrag`,`kontoid`) VALUES('".$vname."','".$nname."','".$straße."','".$nummer."','".$plz."','".$ort."','".$beschreibung."','".$betrag."','".$kontoid."')";
        $db->query($sql);
    }

    public static function saveBill($data)
    {
        $db = new Database();

        $sql = "UPDATE rechnung SET vname='".$db->escapeString($data['vname'])."',nname='".$db->escapeString($data['nname'])."',straße='".$db->escapeString($data['straße'])."',nummer='".$db->escapeString($data['nummer'])."',plz='".$db->escapeString($data['plz'])."',ort='".$db->escapeString($data['ort'])."',beschreibung='".$db->escapeString($data['beschreibung'])."',betrag='".$db->escapeString($data['betrag'])."',kontoid='".$db->escapeString($data['kontoid'])."' 
        WHERE rnnr=".intval($data['rnnr']);
        $db->query($sql);

    }


}