<?php
class WhatsappAPI{

  private $id = 2016; //Please change it with your ID
  private $key = "d92dd7cf53066537a71e14c82b7dcf5d4f54ca51";

  public function send($send_to, $message_body){
    
    $data = array('to' => $send_to, 'msg' => $message_body);

    $url = "https://onyxberry.com/services/wapi/Client/sendMessage";
    $url = $url.'/'.$this->id.'/'.$this->key;
    $ch = curl_init( $url );
    curl_setopt( $ch, CURLOPT_POST, 1);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt( $ch, CURLOPT_HEADER, 0);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec( $ch );
    return $response;
  }
}

?>
