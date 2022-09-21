<?php
wh_log('log', '--------------------------');
wh_log('log', '--------NEW REQUEST-------');
wh_log('log', 'Start page loading');
function wh_log($log_filename, $log_msg)
{
    $log_msg = date('Y-m-d h:i:sa') . ': ' . $log_msg;
    if (!file_exists($log_filename)) {
        // create directory/folder uploads.
        mkdir($log_filename, 0777, true);
    }
    $log_file_data = $log_filename . '.log';
    file_put_contents($log_file_data, $log_msg . "\n", FILE_APPEND);
}
?>

<?php
wh_log('log', 'Send access token request');
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
wh_log('log', 'Recieve access token request');
wh_log('log', 'Start GET data request');
function get_account_data($access_token,$account_id)
{

    $curls = curl_init();
    curl_setopt_array($curls, array(
        CURLOPT_URL => 'https://zeustrare.my.salesforce.com/services/apexrest/DashboardAccountData/'.$account_id.'/?limitRecords=1000',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer ' . $access_token,
        ),
    ));
    $response = curl_exec($curls);
    $Account_Data = json_decode($response);

    curl_close($curls);

    return $Account_Data;
}

function get_graph_data($access_token,$account_id) //Api graph
{

    $curls = curl_init();
    curl_setopt_array($curls,array(
        CURLOPT_URL => 'https://zeustrare.my.salesforce.com/services/apexrest/DashboardAccountData/'.$account_id.'/?limitRecords=1000&selectedData=investAct',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer ' . $access_token,
        ),
    ));
    $response = curl_exec($curls);
    $graph_data = json_decode($response);

    curl_close($curls);

    return $graph_data;
}

function get_graph_year_data($access_token,$account_id) //Api graph_year
{

    $curls = curl_init();
    curl_setopt_array($curls,array(
        CURLOPT_URL => 'https://zeustrare.my.salesforce.com/services/apexrest/DashboardAccountData/'.$account_id.'/?limitRecords=1000&selectedData=investAct&startYear=2012&endYear=2020',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer ' . $access_token,
        ),
    ));
    $response = curl_exec($curls);
    $graph_year_data = json_decode($response);

    curl_close($curls);

    return $graph_year_data;
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
$Account_Data = get_account_data($access_token,$_GET['account_id']); //0016e00002zuFq9AAE
$graph_data = get_graph_data($access_token,$_GET['account_id']);
$graph_year_data = get_graph_year_data($access_token,$_GET['account_id']);
$property_data = get_property_data($access_token,$_GET['account_id']); //0016e00002zuFq9AAE

wh_log('log', 'Retrieve GET data request');


if (is_array($Account_Data) && isset($Account_Data[0]->errorCode) &&$Account_Data[0]->errorCode === 'INVALID_SESSION_ID') {
    echo 'error code found';
    die;
}

?>

