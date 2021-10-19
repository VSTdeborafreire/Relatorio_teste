<?php
namespace Source\App\controllers;
set_time_limit(4000000);
date_default_timezone_set("America/Sao_Paulo");
require_once __DIR__ . "/../../../vendor/autoload.php";

use Twilio\Rest\Client;
use Source\app\template\Page;
use Source\app\database\Sql;

class Msgs_Twilio
{
    // public function get_Messages()
    // {
    //     $result = array();

    //     $twilio = new Client(ACCOUNT_SID, AUTH_TOKEN);

    //     $messages = $twilio->messages
    //                         ->read([
                                
    //                             "dateSentBefore" => new \DateTime("28-09-2021T15:00:00Z"),
    //                             "dateSentAfter" => new \DateTime("28-09-2021T05:00:00Z")
    //                         ],300000);
    //         foreach($messages as $key => $value)
    //         {
    //             $body = $value->body;
    //             $date = (array)$value->dateCreated;
    //             $stat = $value->status;
    //             $dir = $value->direction;
    //             $sid = $value->sid;
                
                
                
    //             if(stripos($body, "Olá, o(a)") !== false)
    //             {
    //                 $date = (array)$value->dateCreated;
    //                 $data = new \DateTime($date["date"]);
    //                 $intervalo = new \DateInterval("PT3H");
    //                 $sub = $data->sub($intervalo);
    //                 $dia = $data->format("d-m-Y");
    //                 $hora = $sub->format("H:i:s");
    //                 $result[] = [
    //                     "data" => $dia, 
    //                     "hora" => $hora,
    //                     "sid" => $sid,
    //                     "body" => ["msg" => $body]
    //                 ];
    //             }
    //         }
            
    //         $sql = new Sql();

    //         $newList;
    //         $contagem = count($result);
    //         foreach ($result as $key1 => $value1)
    //         {
    //             $newList = $value1;
    //         }
    //         $response = $sql->query("INSERT INTO dia (data_envio, qtde_dia) VALUES('".$newList['data']."', $contagem)"); 

    //         if($response == true)
    //         {
    //             $last_id = $sql->select("SELECT
    //             max(d.id) AS id
    //             FROM
    //             dia d");
    //             foreach($last_id as $key)
    //             {
    //                 $last_insert_id = $key['id'];
    //             }

    //             $response2 = $sql->query("INSERT INTO infos (sid, horario, fk_infos_dia) VALUES('".$newList['sid']."', '".$newList['hora']."', $last_insert_id)");
                
                
    //             foreach($result as $chave => $val)
    //             {  
    //                 $ms1 = $val['body']['msg'];
    //                 $sid1 = $val['sid'];
    //                 $hora1 = $val['hora'];
    //                 $query = "INSERT INTO msgs (body, sid, horario, fk_dia_msg) VALUES('$ms1', '$sid1', '$hora1', $last_insert_id)";
                    
    //                 $sql->query("INSERT INTO msgs (body, sid, horario, fk_dia_msg) VALUES('$ms1', '$sid1', '$hora1', $last_insert_id)");
    //             }
                
    //         }
    //     return $result;
    // }

    public function makeView()
    {
        $page = new Page();

        // $msgs = $this->get_Messages();

        // $cont = count($msgs);

        $page->setTpl("body");
    }
}