<?php 

function render($core, $file, $data = [], $layout = "full")
{

    $data = array_merge($data, [
        'mainPage' => $file
    ]);
    

    if(method_exists($core,'sessionMsg')) {
        $data['sessionMsg']	= $core->sessionMsg();
    }



    // if($core->session->get('apiData')) {
    //     $data['apiData']	= $core->session->get('apiData');
    // }
    $data['breadcrumb'] = array_filter($data['breadcrumb'], 'strlen');
    $data['v_breadcrumb'] = view('layout/breadcrumb', $data);

    if ($layout == "full") {
        echo view('layout/index', $data);
    } else if ($layout == "blank") {
        echo view('layout/index2', $data);
    } else {
        echo view('layout/index', $data);
    }
}
