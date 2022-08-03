<?php

function tingkatCustomer()
{
    return [
        'Sekolah Tingkat Dasar dan Madrasah',
        'Sekolah Menengah Pertama dan Madrasah',
        'Sekolah Menengah Atas dan Madrasah',
        'Sekolah Menengah Kejuruan',
        'Taman Kanak-kanak',
        'Perguruan Tinggi',
        'Lain-lain',
    ];
}

function statusCustomer()
{
    return [
        'Negeri / Inpres',
        'Swasta Islam',
        'Swasta Kristen / Non Islam',
        'Swasta Umum / Nasional',
        'Madrasah Negeri',
        'Madrasah Swasta',
        'Toko Buku',
        'Tuan Cash',
        'Lain-lain',
    ];
}

function peringkatSekolah()
{
    return [
        'Sangat Baik',
        'Baik',
        'Cukup',
        'Kurang'
    ];
}

function departements()
{
    return [
        [
            "id" => "IT",
            "dept_name" => "Information Technology"
        ],
        [
            "id" => "DT",
            "dept_name" => "Distribusi"
        ],
        [
            "id" => "OPR",
            "dept_name" => "Operasional"
        ],
        [
            "id" => "PCR",
            "dept_name" => "Purchasing"
        ],

    ];
}