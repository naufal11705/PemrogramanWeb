<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "submenu" => [
            [
                "nama" => "wisata",
                "submenu" => [
                    ["nama" => "pantai"],
                    ["nama" => "gunung"]
                ]
            ],
            ["nama" => "kuliner"],
            ["nama" => "hiburan"]
        ]
    ],
    [
        "nama" => "tentang"
    ],
    [
        "nama" => "kontak"
    ]
];

function tampilkanMenuBertingkat($menu){
    echo "<ul>";
    foreach($menu as $item){
        echo "<li>{$item['nama']}</li>";

        if (isset($item['submenu'])) {
            tampilkanMenuBertingkat($item['submenu']);
        }
    }
    
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
?>