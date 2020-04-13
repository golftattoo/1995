<?php 
  $access_token = 't66in5nY2E8DPyCotQBDNTNSXCtbuihos4Xk+cvkp3nBxc1iBARpKcExXs5m4UJeQTDR7zuH+E6Ud6moeQpZrHoVvQDsB8DbNKfXy66BuDYjkTPZaiOAmfCKS5GWw7CnosF1CZQvXxQfGgadwmoo/gdB04t89/1O/w1cDnyilFU=';
  $url = 'https://api.line.me/v1/oauth/verify';
  $headers = array('Authorization: Bearer ' . $access_token);
  $ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  $result = curl_exec($ch);curl_close($ch);
  echo $result;
