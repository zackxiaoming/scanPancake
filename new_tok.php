<?php

$pancake_router = "0x10ed43c718714eb63d5aa57b78b54704e256024e";
$this_api = array("APNQMIRRSD3RK1KPICPXN9N85S7SQ251U4","HRGG1G8DT4S5BN7XWABA7ZJP4B8DQ82ZXU","YK8UTRX31H5X3K5XTJC5BSU1J5P4AWKNAV","1H832RIWHYBBPMI1Y88WTF5HJF3FMIM2E7");

shuffle($this_api);
$my_api = $this_api[0];

$current_block = "https://api.bscscan.com/api?module=proxy&action=eth_blockNumber&apikey=$my_api";
$block_data = file_get_contents($current_block);
$this_block = json_decode($block_data,true);
$this_block_no = hexdec($this_block['result']);
$start_block_no = $this_block_no - 500;


shuffle($this_api);
$my_api = $this_api[0];

$url = "https://api.bscscan.com/api?module=account&action=txlist&address=$pancake_router&startblock=$start_block_no&endblock=99999999&page=1&offset=200&sort=asc&apikey=$my_api";

$json_data = file_get_contents($url);
$this_data = json_decode($json_data,true);


print_r($this_data);


?>