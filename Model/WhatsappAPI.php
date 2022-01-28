<?php
class WhatsappAPI{

  private $id = 2161; //Please change it with your ID
  private $key = "45c372b34f5842e226be963b002652495858e329";

  public function send($send_to, $message_body){
    
    $data = array('to' => $send_to, 'msg' => urlencode($message_body));

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
