<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 * @ Release on : 24.03.2018
 * @ Website    : http://EasyToYou.eu
 */

$FileNameExtension = basename(strtok($_SERVER["REQUEST_URI"], "?"));
$fileName = explode("/", $_SERVER["SCRIPT_FILENAME"]);
$activePage = str_replace(".php", "", end($fileName));
$streamData = "";
$configFileCheck = webtvpanel_checkFilePermission("configuration.php");
function webtvpanel_date_sort($a, $b)
{
    if (strtotime($time1) < strtotime($time2)) {
        return 1;
    }
    if (strtotime($time2) < strtotime($time1)) {
        return -1;
    }
    return 0;
}
function webtvpanel_CallApiRequest($ApiLinkIs = "")
{
    $returnData = "0";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $ApiLinkIs);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    if (curl_exec($ch) === false) {
        return array("result" => "error", "data" => "Invalid Host Url");
    }
    $Result = json_decode(curl_exec($ch));
    if (!empty($Result)) {
        $returnData = $Result;
        return array("result" => "success", "data" => $returnData);
    }
    return array("result" => "error");
}
function webtvpanel_checkFilePermission($fileName = "")
{
    if (file_exists($fileName)) {
        $Permission = substr(sprintf("%o", fileperms($fileName)), -4);
        if ($Permission == "0644" || $Permission == "0755" || $Permission == "0777") {
            return array("result" => "success", "permission" => $Permission);
        }
        return array("result" => "error");
    }
}
function webtvpanel_CheckstreamLine($username = "", $password = "", $hostURL = "")
{
    $returnData = "0";
    $bar = "/";
    if (substr($hostURL, -1) == "/") {
        $bar = "";
    }
    $Servername = $hostURL . $bar;
    $ApiLinkIs = $Servername . "player_api.php?username=" . $username . "&password=" . $password;
    $CallApi = webtvpanel_callapirequest($ApiLinkIs);
    if (!empty($CallApi) && $CallApi["result"] == "success") {
        if (isset($CallApi["data"]->user_info->auth) && $CallApi["data"]->user_info->auth != 0 && $CallApi["data"]->user_info->status == "Active") {
            $returnData = "1";
        }
    } else {
        $returnData = "0";
    }
    return $returnData;
}
function webtvpanel_CheckLicense($licensekey, $localkey = "")
{
    $whmcsurl = "https://www.whmcssmarters.com/clients/";
    $licensing_secret_key = "webpanel8333";
    $localkeydays = 7;
    $allowcheckfaildays = 5;
    $check_token = time() . md5(mt_rand(1000000000, 9999999999.0) . $licensekey);
    $checkdate = date("Ymd");
    $domain = $_SERVER["SERVER_NAME"];
    $usersip = isset($_SERVER["SERVER_ADDR"]) ? $_SERVER["SERVER_ADDR"] : $_SERVER["LOCAL_ADDR"];
    $dirpath = dirname(__FILE__);
    $verifyfilepath = "modules/servers/licensing/verify.php";
    $localkeyvalid = false;
    if ($localkey) {
        $localkey = str_replace("\n", "", $localkey);
        $localdata = substr($localkey, 0, strlen($localkey) - 32);
        $md5hash = substr($localkey, strlen($localkey) - 32);
        if ($md5hash == md5($localdata . $licensing_secret_key)) {
            $localdata = strrev($localdata);
            $md5hash = substr($localdata, 0, 32);
            $localdata = substr($localdata, 32);
            $localdata = base64_decode($localdata);
            $localkeyresults = unserialize($localdata);
            $originalcheckdate = $localkeyresults["checkdate"];
            if ($md5hash == md5($originalcheckdate . $licensing_secret_key)) {
                $localexpiry = date("Ymd", mktime(0, 0, 0, date("m"), date("d") - $localkeydays, date("Y")));
                if ($localexpiry < $originalcheckdate) {
                    $localkeyvalid = true;
                    $results = $localkeyresults;
                    $validdomains = explode(",", $results["validdomain"]);
                    if (!in_array($_SERVER["SERVER_NAME"], $validdomains)) {
                        $localkeyvalid = false;
                        $localkeyresults["status"] = "Invalid";
                        $results = array();
                    }
                    $validips = explode(",", $results["validip"]);
                    if (!in_array($usersip, $validips)) {
                        $localkeyvalid = false;
                        $localkeyresults["status"] = "Invalid";
                        $results = array();
                    }
                    $validdirs = explode(",", $results["validdirectory"]);
                    if (!in_array($dirpath, $validdirs)) {
                        $localkeyvalid = false;
                        $localkeyresults["status"] = "Invalid";
                        $results = array();
                    }
                }
            }
        }
    }
    if (!$localkeyvalid) {
        $responseCode = 0;
        $postfields = array("licensekey" => $licensekey, "domain" => $domain, "ip" => $usersip, "dir" => $dirpath);
        if ($check_token) {
            $postfields["check_token"] = $check_token;
        }
        $query_string = "";
        foreach ($postfields as $k => $v) {
            $query_string .= $k . "=" . urlencode($v) . "&";
        }
        if (function_exists("curl_exec")) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $whmcsurl . $verifyfilepath);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $query_string);
            curl_setopt($ch, CURLOPT_TIMEOUT, 30);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $data = curl_exec($ch);
            $responseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
        } else {
            $responseCodePattern = "/^HTTP\\/\\d+\\.\\d+\\s+(\\d+)/";
            $fp = @fsockopen($whmcsurl, 80, $errno, $errstr, 5);
            if ($fp) {
                $newlinefeed = "\r\n";
                $header = "POST " . $whmcsurl . $verifyfilepath . " HTTP/1.0" . $newlinefeed;
                $header .= "Host: " . $whmcsurl . $newlinefeed;
                $header .= "Content-type: application/x-www-form-urlencoded" . $newlinefeed;
                $header .= "Content-length: " . @strlen($query_string) . $newlinefeed;
                $header .= "Connection: close" . $newlinefeed . $newlinefeed;
                $header .= $query_string;
                $data = $line = "";
                @stream_set_timeout($fp, 20);
                @fputs($fp, $header);
                $status = @socket_get_status($fp);
                while (!@feof($fp) && $status) {
                    $line = @fgets($fp, 1024);
                    $patternMatches = array();
                    if (!$responseCode && preg_match($responseCodePattern, trim($line), $patternMatches)) {
                        $responseCode = empty($patternMatches[1]) ? 0 : $patternMatches[1];
                    }
                    $data .= $line;
                    $status = @socket_get_status($fp);
                }
                @fclose($fp);
            }
        }
        if ($responseCode != 200) {
            $localexpiry = date("Ymd", mktime(0, 0, 0, date("m"), date("d") - ($localkeydays + $allowcheckfaildays), date("Y")));
            if ($localexpiry < $originalcheckdate) {
                $results = $localkeyresults;
            } else {
                $results = array();
                $results["status"] = "Invalid";
                $results["description"] = "Remote Check Failed";
                return $results;
            }
        } else {
            preg_match_all("/<(.*?)>([^<]+)<\\/\\1>/i", $data, $matches);
            $results = array();
            foreach ($matches[1] as $k => $v) {
                $results[$v] = $matches[2][$k];
            }
        }
        if (!is_array($results)) {
            exit("Invalid License Server Response");
        }
        if ($results["md5hash"] && $results["md5hash"] != md5($licensing_secret_key . $check_token)) {
            $results["status"] = "Invalid";
            $results["description"] = "MD5 Checksum Verification Failed";
            return $results;
        }
        if ($results["status"] == "Active") {
            $results["checkdate"] = $checkdate;
            $data_encoded = serialize($results);
            $data_encoded = base64_encode($data_encoded);
            $data_encoded = md5($checkdate . $licensing_secret_key) . $data_encoded;
            $data_encoded = strrev($data_encoded);
            $data_encoded = $data_encoded . md5($data_encoded . $licensing_secret_key);
            $data_encoded = wordwrap($data_encoded, 80, "\n", true);
            $results["localkey"] = $data_encoded;
        }
        $results["remotecheck"] = true;
    }
    unset($postfields);
    unset($data);
    unset($matches);
    unset($whmcsurl);
    unset($licensing_secret_key);
    unset($checkdate);
    unset($usersip);
    unset($localkeydays);
    unset($allowcheckfaildays);
    unset($md5hash);
    return $results;
}
function webtvpanel_getLoggedInCategories()
{
    $username = $_SESSION["webTvplayer"]["username"];
    $password = $_SESSION["webTvplayer"]["password"];
    $hostURL = $_SESSION["webTvplayer"]["username"];
}
function getLiveVideoLink($streamID = "", $streamType = "")
{
}
function webtvpanel_starRating($rating = "")
{
    if (is_float($rating)) {
        $floatVal = explode(".", $rating);
        $j = 0;
        for ($i = 0; $i < $floatVal[0]; $i++) {
            $j++;
            echo "<span class=\"fa fa-star\"></span>";
        }
        if (5 <= $floatVal[1] || $floatVal[1] <= 5) {
            $j++;
            echo "<span class=\"fa fa-star-half\"></span>";
        }
        for ($remainigStar = 5 - intval($j); $j < 5; $j++) {
            echo "<span class=\"fa fa-star-o\"></span>";
        }
    } else {
        $j = 0;
        for ($i = 0; $i < $rating; $i++) {
            $j++;
            echo "<span class=\"fa fa-star\"></span>";
        }
        for ($remainigStar = 5 - intval($j); $j < 5; $j++) {
            echo "<span class=\"fa fa-star-o\"></span>";
        }
    }
}
function webtvpanel_checkPlayer()
{
    if (isset($_COOKIE["settings_array"]) && !empty($_COOKIE["settings_array"])) {
        $sessionArray = json_decode($_COOKIE["settings_array"]);
        return $sessionArray;
    }
}
function webtvpanel_baseEncode($Text = "")
{
    $returnData = "";
    if ($Text != "") {
        $returnData = base64_encode($Text);
    }
    return $returnData;
}
function webtvpanel_baseDecode($Text = "")
{
    $returnData = "";
    if ($Text != "") {
        $returnData = base64_decode($Text);
    }
    return $returnData;
}
function webtvpanel_parentcondition($Text = "")
{
    $returnData = 0;
    $parentenable = "";
    $parentpassword = "";
    if (isset($_COOKIE["settings_array"])) {
        $SessionStroedUsername = $_SESSION["webTvplayer"]["username"];
        $SettingArray = json_decode($_COOKIE["settings_array"]);
        if (isset($SettingArray->{$SessionStroedUsername}) && !empty($SettingArray->{$SessionStroedUsername})) {
            $parentenable = $SettingArray->{$SessionStroedUsername}->parentenable;
            $parentpassword = $SettingArray->{$SessionStroedUsername}->parentpassword;
        }
    }
    if ($parentenable == "on" && (webtvpanel_like_match("%adults%", $Text) == 1 || webtvpanel_like_match("%adult%", $Text) == 1 || webtvpanel_like_match("%Adults%", $Text) == 1 || webtvpanel_like_match("%XXX%", $Text) == 1 || webtvpanel_like_match("%Porn%", $Text) == 1 || webtvpanel_like_match("%xxx%", $Text) == 1 || webtvpanel_like_match("%Sexy%", $Text) == 1 || webtvpanel_like_match("%foradults%", $Text) == 1 || webtvpanel_like_match("%ADULTE%", $Text) == 1 || webtvpanel_like_match("%adulte%", $Text) == 1)) {
        $returnData = 1;
    }
    return $returnData;
}
function webtvpanel_like_match($pattern, $subject)
{
    $pattern = str_replace("%", ".*", preg_quote($pattern, "/"));
    return (bool) preg_match("/^" . $pattern . "\$/i", $subject);
}

?>