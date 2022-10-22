<?php
    if(isset($_POST['submit'])){
        function getHospitalInfo()
        {
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

            return $hospitals;
        }

        header("Location: index.php?func=getHospitalInfo");
    }