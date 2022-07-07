<?php 

function render($core, $file, $data = [])	{

    $data = array_merge($data, [
        'mainPage' => $file
    ]);

    if(method_exists($core,'sessionMsg')) {
        $data['sessionMsg']	= $core->sessionMsg();
    }

    // if($core->session->get('apiData')) {
    //     $data['apiData']	= $core->session->get('apiData');
    // }
    echo view('layout/index', $data);
}
