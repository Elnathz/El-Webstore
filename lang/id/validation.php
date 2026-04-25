<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Jalur Bahasa Validasi
    |--------------------------------------------------------------------------
    |
    | Jalur bahasa berikut berisi standar pesan kesalahan yang digunakan oleh
    | kelas validator. Beberapa aturan memiliki beberapa versi seperti
    | aturan ukuran. Jangan ragu untuk mengoptimalkan setiap pesan di sini.
    |
    */

    'accepted' => ':Attribute harus diterima.',
    'accepted_if' => ':Attribute harus diterima ketika :other berisi :value.',
    'active_url' => ':Attribute bukan URL yang valid.',
    'after' => ':Attribute harus tanggal setelah :date.',
    'after_or_equal' => ':Attribute harus tanggal setelah atau sama dengan :date.',
    'alpha' => ':Attribute hanya boleh berisi huruf.',
    'alpha_dash' => ':Attribute hanya boleh berisi huruf, angka, strip, dan garis bawah.',
    'alpha_num' => ':Attribute hanya boleh berisi huruf dan angka.',
    'array' => ':Attribute harus berupa sebuah array.',
    'ascii' => ':Attribute hanya boleh berisi karakter alfanumerik single-byte dan simbol.',
    'before' => ':Attribute harus tanggal sebelum :date.',
    'before_or_equal' => ':Attribute harus tanggal sebelum atau sama dengan :date.',
    'between' => [
        'array' => ':Attribute harus memiliki antara :min dan :max item.',
        'file' => ':Attribute harus berukuran antara :min dan :max kilobita.',
        'numeric' => ':Attribute harus bernilai antara :min dan :max.',
        'string' => ':Attribute harus berukuran antara :min dan :max karakter.',
    ],
    'boolean' => ':Attribute harus bernilai true atau false.',
    'can' => ':Attribute mengandung nilai yang tidak sah.',
    'confirmed' => 'Konfirmasi :attribute tidak cocok.',
    'contains' => ':Attribute kekurangan nilai yang diperlukan.',
    'current_password' => 'Kata sandi salah.',
    'date' => ':Attribute bukan tanggal yang valid.',
    'date_equals' => ':Attribute harus tanggal yang sama dengan :date.',
    'date_format' => ':Attribute tidak cocok dengan format :format.',
    'decimal' => ':Attribute harus memiliki :decimal tempat desimal.',
    'declined' => ':Attribute harus ditolak.',
    'declined_if' => ':Attribute harus ditolak ketika :other berisi :value.',
    'different' => ':Attribute dan :other harus berbeda.',
    'digits' => ':Attribute harus terdiri dari :digits angka.',
    'digits_between' => ':Attribute harus terdiri dari antara :min dan :max angka.',
    'dimensions' => ':Attribute memiliki dimensi gambar yang tidak valid.',
    'distinct' => ':Attribute memiliki nilai yang duplikat.',
    'doesnt_contain' => ':Attribute tidak boleh berisi salah satu dari berikut ini: :values.',
    'doesnt_end_with' => ':Attribute tidak boleh diakhiri dengan salah satu dari berikut ini: :values.',
    'doesnt_start_with' => ':Attribute tidak boleh diawali dengan salah satu dari berikut ini: :values.',
    'email' => ':Attribute harus berupa alamat surel yang valid.',
    'encoding' => ':Attribute harus dienkode dalam :encoding.',
    'ends_with' => ':Attribute harus diakhiri dengan salah satu dari berikut ini: :values.',
    'enum' => ':Attribute yang dipilih tidak valid.',
    'exists' => ':Attribute yang dipilih tidak valid.',
    'extensions' => ':Attribute harus memiliki salah satu ekstensi berikut: :values.',
    'file' => ':Attribute harus berupa sebuah berkas.',
    'filled' => ':Attribute harus memiliki nilai.',
    'gt' => [
        'array' => ':Attribute harus memiliki lebih dari :value item.',
        'file' => ':Attribute harus berukuran lebih dari :value kilobita.',
        'numeric' => ':Attribute harus bernilai lebih dari :value.',
        'string' => ':Attribute harus berukuran lebih dari :value karakter.',
    ],
    'gte' => [
        'array' => ':Attribute harus memiliki :value item atau lebih.',
        'file' => ':Attribute harus berukuran lebih dari atau sama dengan :value kilobita.',
        'numeric' => ':Attribute harus bernilai lebih dari atau sama dengan :value.',
        'string' => ':Attribute harus berukuran lebih dari atau sama dengan :value karakter.',
    ],
    'hex_color' => ':Attribute harus berupa warna heksadesimal yang valid.',
    'image' => ':Attribute harus berupa gambar.',
    'in' => ':Attribute yang dipilih tidak valid.',
    'in_array' => ':Attribute tidak ada di dalam :other.',
    'in_array_keys' => ':Attribute tidak mengandung salah satu kunci berikut: :values.',
    'integer' => ':Attribute harus berupa bilangan bulat.',
    'ip' => ':Attribute harus berupa alamat IP yang valid.',
    'ipv4' => ':Attribute harus berupa alamat IPv4 yang valid.',
    'ipv6' => ':Attribute harus berupa alamat IPv6 yang valid.',
    'json' => ':Attribute harus berupa string JSON yang valid.',
    'list' => ':Attribute harus berupa sebuah daftar.',
    'lowercase' => ':Attribute harus huruf kecil.',
    'lt' => [
        'array' => ':Attribute harus memiliki kurang dari :value item.',
        'file' => ':Attribute harus berukuran kurang dari :value kilobita.',
        'numeric' => ':Attribute harus bernilai kurang dari :value.',
        'string' => ':Attribute harus berukuran kurang dari :value karakter.',
    ],
    'lte' => [
        'array' => ':Attribute tidak boleh memiliki lebih dari :value item.',
        'file' => ':Attribute harus berukuran kurang dari atau sama dengan :value kilobita.',
        'numeric' => ':Attribute harus bernilai kurang dari atau sama dengan :value.',
        'string' => ':Attribute harus berukuran kurang dari atau sama dengan :value karakter.',
    ],
    'mac_address' => ':Attribute harus berupa alamat MAC yang valid.',
    'max' => [
        'array' => ':Attribute tidak boleh memiliki lebih dari :max item.',
        'file' => ':Attribute tidak boleh berukuran lebih dari :max kilobita.',
        'numeric' => ':Attribute tidak boleh bernilai lebih dari :max.',
        'string' => ':Attribute tidak boleh berukuran lebih dari :max karakter.',
    ],
    'max_digits' => ':Attribute tidak boleh memiliki lebih dari :max angka.',
    'mimes' => ':Attribute harus berupa berkas dengan tipe: :values.',
    'mimetypes' => ':Attribute harus berupa berkas dengan tipe: :values.',
    'min' => [
        'array' => ':Attribute harus memiliki setidaknya :min item.',
        'file' => ':Attribute harus berukuran setidaknya :min kilobita.',
        'numeric' => ':Attribute harus bernilai setidaknya :min.',
        'string' => ':Attribute harus berukuran setidaknya :min karakter.',
    ],
    'min_digits' => ':Attribute harus memiliki setidaknya :min angka.',
    'missing' => ':Attribute harus hilang.',
    'missing_if' => ':Attribute harus hilang ketika :other berisi :value.',
    'missing_unless' => ':Attribute harus hilang kecuali :other berisi :value.',
    'missing_with' => ':Attribute harus hilang ketika :values ada.',
    'missing_with_all' => ':Attribute harus hilang ketika :values ada.',
    'multiple_of' => ':Attribute harus merupakan kelipatan dari :value.',
    'not_in' => ':Attribute yang dipilih tidak valid.',
    'not_regex' => 'Format :attribute tidak valid.',
    'numeric' => ':Attribute harus berupa angka.',
    'password' => [
        'letters' => ':Attribute harus mengandung setidaknya satu huruf.',
        'mixed' => ':Attribute harus mengandung setidaknya satu huruf besar dan satu huruf kecil.',
        'numbers' => ':Attribute harus mengandung setidaknya satu angka.',
        'symbols' => ':Attribute harus mengandung setidaknya satu simbol.',
        'uncompromised' => ':Attribute yang diberikan telah muncul dalam kebocoran data. Silakan pilih :attribute yang lain.',
    ],
    'present' => ':Attribute harus ada.',
    'present_if' => ':Attribute harus ada ketika :other berisi :value.',
    'present_unless' => ':Attribute harus ada kecuali :other berisi :value.',
    'present_with' => ':Attribute harus ada ketika :values ada.',
    'present_with_all' => ':Attribute harus ada ketika :values ada.',
    'prohibited' => ':Attribute dilarang.',
    'prohibited_if' => ':Attribute dilarang ketika :other berisi :value.',
    'prohibited_if_accepted' => ':Attribute dilarang ketika :other diterima.',
    'prohibited_if_declined' => ':Attribute dilarang ketika :other ditolak.',
    'prohibited_unless' => ':Attribute dilarang kecuali :other ada dalam :values.',
    'prohibits' => ':Attribute dilarang berisi :other.',
    'regex' => 'Format :attribute tidak valid.',
    'required' => ':Attribute wajib diisi.',
    'required_array_keys' => ':Attribute harus berisi entri untuk: :values.',
    'required_if' => ':Attribute wajib diisi ketika :other berisi :value.',
    'required_if_accepted' => ':Attribute wajib diisi ketika :other diterima.',
    'required_if_declined' => ':Attribute wajib diisi ketika :other ditolak.',
    'required_unless' => ':Attribute wajib diisi kecuali :other ada dalam :values.',
    'required_with' => ':Attribute wajib diisi ketika :values ada.',
    'required_with_all' => ':Attribute wajib diisi ketika :values ada.',
    'required_without' => ':Attribute wajib diisi ketika :values tidak ada.',
    'required_without_all' => ':Attribute wajib diisi ketika tidak ada :values yang ada.',
    'same' => ':Attribute dan :other harus cocok.',
    'size' => [
        'array' => ':Attribute harus mengandung :size item.',
        'file' => ':Attribute harus berukuran :size kilobita.',
        'numeric' => ':Attribute harus bernilai :size.',
        'string' => ':Attribute harus berukuran :size karakter.',
    ],
    'starts_with' => ':Attribute harus diawali dengan salah satu dari berikut ini: :values.',
    'string' => ':Attribute harus berupa string.',
    'timezone' => ':Attribute harus berupa zona waktu yang valid.',
    'unique' => ':Attribute sudah ada sebelumnya.',
    'uploaded' => ':Attribute gagal diunggah.',
    'uppercase' => ':Attribute harus huruf besar.',
    'url' => ':Attribute harus berupa URL yang valid.',
    'ulid' => ':Attribute harus berupa ULID yang valid.',
    'uuid' => ':Attribute harus berupa UUID yang valid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'search' => 'Pencarian',
        'selectCollections' => 'Koleksi',
        'sortBy' => 'Urutan',
    ],

];

