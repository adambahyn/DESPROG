<?php

function tampilkanAngka(int $jumlah, int $indeks = 1)
{
    echo "Perulangan ke-$indeks <br>";

    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);
    }
}

// tampilkanAngka(jumlah: 20);


$menu = [
    [
        'nama' => 'Beranda',
    ],
    [
        'nama' => 'Berita',
        'subMenu' => [
            [
                'nama' => 'Wisata',
                'subMenu' => [
                    [
                        'nama' => 'Pantai',
                    ],
                    [
                        'nama' => 'Gunung',
                    ],
                ],
            ],
            [
                'nama' => 'Kuliner',
            ],
            [
                'nama' => 'Hiburan',
            ],
        ],
    ],
    [
        'nama' => 'Tentang',
    ],
    [
        'nama' => 'Kontak',
    ],
]; 

function tampilkanMenuBertingkat(array $menu){
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>";
        echo $item['nama'];
        if (isset($item['subMenu'])) {
            echo "<ul>";
            tampilkanMenuBertingkat($item['subMenu']);
            echo "</ul>";
        }
        echo "</li>";
    }
    echo "</ul>";
    
}

tampilkanMenuBertingkat($menu);
?>