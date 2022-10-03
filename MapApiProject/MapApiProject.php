<?php
function get_access_token()
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://login.salesforce.com/services/oauth2/token',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => 'client_id=3MVG9vrJTfRxlfl5L8ZSRvMxQwgviGFFcPMMEI5Fa3UcZk3dICNpfmwqxQ826v4iqhjR1ABsxNpLmViiOYpvF&grant_type=password&client_secret=579D6C87D5A0FA99D233DB4E88F24FF9403429235D68FECA80344ABDA18B32E4&username=makarim%40osloop.com%0A%0A%0A&password=OsLoop5161',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/x-www-form-urlencoded',
            'Cookie: BrowserId=UPDHfCxhEe2H50eLU4XbnA; CookieConsentPolicy=0:0; LSKey-c$CookieConsentPolicy=0:0'
        ),
    ));

    $respons = curl_exec($curl);
    $AccessToken_Data = json_decode($respons);
    curl_close($curl);
    return $AccessToken_Data->access_token;

}

function get_property_data($access_token,$account_id) //Api Property
{

    $curls = curl_init();
    curl_setopt_array($curls,array(
        CURLOPT_URL => 'https://zeustrare.my.salesforce.com/services/apexrest/DashboardAccountProperties/'.$account_id.'/0015A00002H1tf4QAB?pn=2&ps=50',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer ' . $access_token,
        ),
    ));
    $response = curl_exec($curls);
    $property_data = json_decode($response);

    curl_close($curls);

    return $property_data;
}

$access_token = get_access_token();
$property_data = get_property_data($access_token,$_GET['account_id']); //0016e00002zuFq9AAE

echo json_encode($property_data);


