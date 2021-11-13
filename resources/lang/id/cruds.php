<?php

return [
    'userManagement' => [
        'title'          => 'Manajemen User',
        'title_singular' => 'Manajemen User',
    ],
    'permission' => [
        'title'          => 'Izin',
        'title_singular' => 'Izin',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Judul',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Peran',
        'title_singular' => 'Peran',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Jenis Peran',
            'title_helper'       => ' ',
            'permissions'        => 'Izin',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Pengguna',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Nama',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Kata Sandi',
            'password_helper'          => ' ',
            'roles'                    => 'Peran',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
            'username'                 => 'username',
            'username_helper'          => ' ',
            'phone'                    => 'Telepon',
            'phone_helper'             => 'Format : 08xxxxxxxxxx',
            'approved'                 => 'Disetujui',
            'approved_helper'          => ' ',
        ],
    ],
    'administrativeManagement' => [
        'title'          => 'Administratif',
        'title_singular' => 'Administratif',
    ],
    'kecamatan' => [
        'title'          => 'Kecamatan',
        'title_singular' => 'Kecamatan',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nama',
            'name_helper'       => ' ',
            'color'             => 'Warna',
            'color_helper'      => ' ',
            'geojson'           => 'Geojson',
            'geojson_helper'    => 'Copas teks dari file *.geojson',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'kelurahan' => [
        'title'          => 'Kelurahan',
        'title_singular' => 'Kelurahan',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nama',
            'name_helper'       => ' ',
            'geojson'           => 'Geojson',
            'geojson_helper'    => 'Copas teks dari file *.geojson',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'kecamatans'        => 'Kecamatan',
            'kecamatans_helper' => ' ',
        ],
    ],
    'category' => [
        'title'          => 'Kategori',
        'title_singular' => 'Kategori',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'type'              => 'Jenis',
            'type_helper'       => 'Jenis Sarana',
            'icon'              => 'Ikon',
            'icon_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'asset' => [
        'title'          => 'SPALD',
        'title_singular' => 'SPALD',
    ],
    'build' => [
        'title'          => 'Bangunan Sanitasi',
        'title_singular' => 'Bangunan Sanitasi',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'address'           => 'Alamat',
            'address_helper'    => ' ',
            'lat'               => 'Latitude',
            'lat_helper'        => ' ',
            'lng'               => 'Longitude',
            'lng_helper'        => ' ',
            'year'              => 'Tahun',
            'year_helper'       => ' ',
            'status'            => 'Status Pemanfaatan',
            'status_helper'     => ' ',
            'funded'            => 'Sumber Dana',
            'funded_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'kecamatans'        => 'Kecamatan',
            'kecamatans_helper' => ' ',
            'kelurahans'        => 'Kelurahan',
            'kelurahans_helper' => ' ',
            'categories'        => 'Jenis',
            'categories_helper' => ' ',
        ],
    ],
    'nsup' => [
        'title'          => 'KOTAKU',
        'title_singular' => 'KOTAKU',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'categories'        => 'Jenis',
            'categories_helper' => ' ',
            'kecamatans'        => 'Kecamatan',
            'kecamatans_helper' => ' ',
            'kelurahans'        => 'Kelurahan',
            'kelurahans_helper' => ' ',
            'years'             => 'Tahun',
            'years_helper'      => ' ',
            'lat'               => 'Latitude',
            'lat_helper'        => ' ',
            'lng'               => 'Longitude',
            'lng_helper'        => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'ipal' => [
        'title'          => 'IPAL PDPAL',
        'title_singular' => 'IPAL PDPAL',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'address'           => 'Alamat',
            'address_helper'    => ' ',
            'kelurahans'        => 'Kelurahan',
            'kelurahans_helper' => ' ',
            'lat'               => 'Latitude',
            'lat_helper'        => ' ',
            'lng'               => 'Longitude',
            'lng_helper'        => ' ',
            'year'              => 'Tahun Mulai Operasi',
            'year_helper'       => ' ',
            'categories'        => 'Jenis',
            'categories_helper' => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'name'              => 'Nama',
            'name_helper'       => ' ',
            'capacity'          => "Kapasitas m3/hari",
            'capacity_helper'   => '',
            'service'           => 'Wilayah Pelayanan',
            'service_helper'    => ' ',
            'photos'            => 'Foto',
            'photos_helper'     => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
        ],
    ],
    'buildGallery' => [
        'title'          => 'Galeri',
        'title_singular' => 'Galeri',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'build'             => 'Bangunan',
            'build_helper'      => ' ',
            'photo'             => 'Foto',
            'photo_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'dataAnalytic' => [
        'title'          => 'Analisis Data',
        'title_singular' => 'Analisa Data',
    ],
    'density' => [
        'title'          => 'Populasi',
        'title_singular' => 'Populasi',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'kelurahans'        => 'Kelurahan',
            'kelurahans_helper' => ' ',
            'area'              => 'Area (Km2)',
            'area_helper'       => ' ',
            'population'        => 'Populasi',
            'population_helper' => ' ',
            'density'           => 'Kepadatan Penduduk (jiwa/ km2)',
            'density_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'year'              => 'Tahun',
            'year_helper'       => ' ',
        ],
    ],
    'sanitation' => [
        'title'          => 'Sanitasi Kota',
        'title_singular' => 'Sanitasi Kota',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'kecamatan'         => 'Kecamatan',
            'kecamatan_helper'  => ' ',
            'secure'            => 'Akses Aman (KK)',
            'secure_helper'     => ' ',
            'basic'             => 'Akses Dasar (KK)',
            'basic_helper'      => ' ',
            'poor'              => 'Tanpa Akses(KK)',
            'poor_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'year'              => 'Tahun',
            'year_helper'       => ' ',
        ],
    ],
    'risk' => [
        'title'          => 'Risiko Air Limbah Domestik',
        'title_singular' => 'Risiko Air Limbah Domestik',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'kelurahan'         => 'Kelurahan',
            'kelurahan_helper'  => ' ',
            'level'             => 'Level',
            'level_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'year'              => 'Tahun',
            'year_helper'       => ' ',
        ],
    ],
    'secured' => [
        'title'          => 'Akses Aman',
        'title_singular' => 'Akses Aman',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'kecamatan'           => 'Kecamatan',
            'kecamatan_helper'    => ' ',
            'access'              => 'Akses Aman (KK)',
            'access_helper'       => ' ',
            'communal'            => 'Tangki Septik Komunal (KK)',
            'communal_helper'     => ' ',
            'individual'          => 'Tangki Septik Individual (KK)',
            'individual_helper'   => ' ',
            'mck_user'            => 'Pengguna MCK Aman (KK)',
            'mck_user_helper'     => ' ',
            'qty_sr_pdpal'        => 'SR PDPAL (KK)',
            'qty_sr_pdpal_helper' => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
            'year'                => 'Tahun',
            'year_helper'         => ' ',
        ],
    ],
    'contentManagement' => [
        'title'          => 'Manajemen Konten',
        'title_singular' => 'Manajemen Konten',
    ],
    'contentCategory' => [
        'title'          => 'Kategori',
        'title_singular' => 'Kategori',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nama',
            'name_helper'       => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'contentTag' => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nama',
            'name_helper'       => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'contentPage' => [
        'title'          => 'Laman',
        'title_singular' => 'Laman',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Judul',
            'title_helper'      => ' ',
            'category'          => 'Kategori',
            'category_helper'   => ' ',
            'tag'               => 'Tags',
            'tag_helper'        => ' ',
            'page_text'         => 'Teks Lengkap',
            'page_text_helper'  => ' ',
            'excerpt'           => 'Ringkasan',
            'excerpt_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
            'no'                => 'No',
            'no_helper'         => ' ',
            'year'              => 'Tahun',
            'year_helper'       => ' ',
        ],
    ],
    'auditLog' => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Deskripsi',
            'description_helper'  => ' ',
            'subject_id'          => 'ID Subyek',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Jenis Subyek',
            'subject_type_helper' => ' ',
            'user_id'             => 'ID Pengguna',
            'user_id_helper'      => ' ',
            'properties'          => 'Properti',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'taskManagement' => [
        'title'          => 'Manajemen Tugas',
        'title_singular' => 'Manajemen Tugas',
    ],
    'taskStatus' => [
        'title'          => 'Status',
        'title_singular' => 'Status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nama',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'taskTag' => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nama',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'task' => [
        'title'          => 'Tugas',
        'title_singular' => 'Tugas',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Nama',
            'name_helper'        => ' ',
            'description'        => 'Deskripsi',
            'description_helper' => ' ',
            'status'             => 'Status',
            'status_helper'      => ' ',
            'tag'                => 'Tags',
            'tag_helper'         => ' ',
            'attachment'         => 'Lampiran Berkas',
            'attachment_helper'  => ' ',
            'due_date'           => 'Deadline',
            'due_date_helper'    => ' ',
            'assigned_to'        => 'Ditugaskan',
            'assigned_to_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => ' ',
            'created_by'         => 'Petugas',
            'created_by_helper'  => ' ',
        ],
    ],
    'tasksCalendar' => [
        'title'          => 'Jadwal',
        'title_singular' => 'Jadwal',
    ],
    'infographic' => [
        'title'          => 'Infografis',
        'title_singular' => 'Infografis',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Judul',
            'title_helper'      => ' ',
            'content'           => 'Konten',
            'content_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
];
