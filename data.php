<?php 

if(isset($_POST['submit'])){
    //print_r($_POST);

    $hospitals = [
        [
            'name' => 'Mugda Medical',
            'phone' => '01723232312'
        ],
        [
            'name' => 'Mugda Medical',
            'phone' => '01723232312'
        ],
    ];

    $url = 'index.php?hospitals='. urlencode(serialize($hospitals));

    header("Location: $url");
}
    