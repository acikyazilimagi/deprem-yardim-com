<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Bu alan kabul edilmelidir.',
    'accepted_if' => 'Bu alan :other :value olduğunda kabul edilmelidir.',
    'active_url' => 'Bu alan geçerli bir URL olmalıdır.',
    'after' => 'Bu alan değeri, :date tarihinden daha sonraki bir tarih olmalıdır.',
    'after_or_equal' => 'Bu alan değeri, :date tarihinden daha sonraki veya aynı tarih olmalıdır.',
    'alpha' => 'Bu alan sadece harflerden oluşmalıdır.',
    'alpha_dash' => 'Bu alan sadece harfler, rakamlar ve tireler ve altçizgilerden oluşmalıdır.',
    'alpha_num' => 'Bu alan sadece harfler ve rakamlar içermelidir.',
    'array' => 'Bu alan dizi olmalıdır.',
    'before' => 'Bu alan değeri, :date tarihinden daha önceki bir tarih olmalıdır.',
    'before_or_equal' => 'Bu alan değeri, :date tarihinden daha önceki veya aynı tarih olmalıdır.',
    'between' => [
        'numeric' => 'Bu alan :min - :max arasında olmalıdır.',
        'file' => 'Bu alan :min - :max arasındaki kilobayt değeri olmalıdır.',
        'string' => 'Bu alan :min - :max arasında karakterden oluşmalıdır.',
        'array' => 'Bu alan :min - :max arasında nesneye sahip olmalıdır.',
    ],
    'boolean' => 'Bu alan sadece doğru veya yanlış olabilir.',
    'confirmed' => 'Bu alan tekrarı eşleşmiyor.',
    'date' => 'Bu alan geçerli bir tarih olmalıdır.',
    'date_equals' => 'Bu alan değeri, :date tarihine eşit olmalıdır.',
    'date_format' => 'Bu alan :format biçimi ile eşleşmiyor.',
    'declined' => 'Bu alan kabul edilmemelidir.',
    'declined_if' => 'Bu alan :other :value olduğunda kabul edilmemelidir.',
    'different' => 'Bu alan ile :other birbirinden farklı olmalıdır.',
    'digits' => 'Bu alan :digits rakam olmalıdır.',
    'digits_between' => 'Bu alan :min ile :max arasında rakam olmalıdır.',
    'dimensions' => 'Bu alan geçersiz resim ölçülerine sahiptir.',
    'distinct' => 'Bu alan tekrarlanan bir değere sahiptir.',
    'email' => 'Bu alan doğru bir e-posta olmalıdır.',
    'ends_with' => 'Bu alan şunlardan biri ile bitmelidir: :values.',
    'enum' => 'Bu alan geçersiz bir değere sahip.',
    'exists' => 'Bu alan geçersiz.',
    'file' => 'Bu alan dosya olmalıdır.',
    'filled' => 'Bu alan bir değer içermelidir.',
    'gt' => [
        'numeric' => ':Attribute, :value değerinden daha büyük olmalıdır.',
        'file' => ':Attribute, :value kilobayt değerinden daha büyük olmalıdır.',
        'string' => ':Attribute, :value karakterden daha uzun olmalıdır.',
        'array' => ':Attribute, :value elemandan daha fazlasına sahip olmalıdır.',
    ],
    'gte' => [
        'numeric' => ':Attribute, :value veya daha büyük bir değerde olmalıdır.',
        'file' => ':Attribute, :value veya daha büyük kilobaytta olmalıdır.',
        'string' => ':Attribute, :value veya daha fazla karakterden oluşmalıdır.',
        'array' => ':Attribute, :value veya daha fazla elemana sahip olmalıdır.',
    ],
    'image' => 'Bu alan resim dosyası olmalıdır.',
    'in' => 'Bu alan değeri geçersiz.',
    'in_array' => 'Bu alan değeri :other içinde mevcut değil.',
    'integer' => 'Bu alan rakam olmalıdır.',
    'ip' => 'Bu alan geçerli bir IP adresi olmalıdır.',
    'ipv4' => 'Bu alan geçerli bir IPv4 adresi olmalıdır.',
    'ipv6' => 'Bu alan geçerli bir IPv6 adresi olmalıdır.',
    'json' => 'Bu alan geçerli bir JSON dizesi olmalıdır.',
    'lt' => [
        'numeric' => ':Attribute, :value değerinden daha küçük olmalıdır.',
        'file' => ':Attribute, :value kilobayt değerinden daha küçük olmalıdır.',
        'string' => ':Attribute, :value karakterden daha kısa olmalıdır.',
        'array' => ':Attribute, :value elemandan daha azına sahip olmalıdır.',
    ],
    'lte' => [
        'numeric' => ':Attribute, :value veya daha küçük bir değerde olmalıdır.',
        'file' => ':Attribute, :value veya daha küçük kilobaytta olmalıdır.',
        'string' => ':Attribute, :value veya daha az karakterden oluşmalıdır.',
        'array' => ':Attribute, :value veya daha az elemana sahip olmalıdır.',
    ],
    'mac_address' => 'Bu alan geçerli bir MAC adresi olmalıdır.',
    'max' => [
        'numeric' => 'Bu alan değeri :max değerinden büyük olmamalıdır.',
        'file' => 'Bu alan değeri :max kilobayt değerinden büyük olmamalıdır.',
        'string' => 'Bu alan değeri en fazla :max karakter uzunluğunda olmalıdır.',
        'array' => 'Bu alan değeri :max adedinden fazla nesneye sahip olmamalıdır.',
    ],
    'mimes' => 'Bu alan dosya biçimi :values olmalıdır.',
    'mimetypes' => 'Bu alan dosya biçimi :values olmalıdır.',
    'min' => [
        'numeric' => 'Bu alan değeri en az :min değerinde olmalıdır.',
        'file' => 'Bu alan değeri en az :min kilobayt değerinde olmalıdır.',
        'string' => 'Bu alan metni en az :min karakter uzunluğunda olmalıdır.',
        'array' => 'Bu alan en az :min nesneye sahip olmalıdır.',
    ],
    'multiple_of' => ':Attribute, :value katı olmalıdır.',
    'not_in' => 'Seçili Bu alan geçersiz.',
    'not_regex' => 'Bu alan biçimi geçersiz.',
    'numeric' => 'Bu alan rakam olmalıdır.',
    'password' => [
        'letters' => 'Bu alan en az bir harf içermelidir.',
        'mixed' => 'Bu alan en az bir harf ve bir rakam içermelidir.',
        'numbers' => 'Bu alan en az bir rakam içermelidir.',
        'symbols' => 'Bu alan en az bir sembol içermelidir.',
        'uncompromised' => 'Bu alan güvenli bir şifre olmalıdır. Lütfen başka bir şifre deneyin.',
    ],
    'present' => 'Bu alan var olmalıdır.',
    'prohibited' => 'Bu alan yasaktır.',
    'prohibited_if' => 'Bu alan, :other :value değerine sahip olduğunda yasaktır.',
    'prohibited_unless' => 'Bu alan, :other :values değerine sahip olmadığında yasaktır.',
    'prohibits' => 'Bu alan :other alanıyla birlikte kullanılamaz.',
    'regex' => 'Bu alan biçimi geçersiz.',
    'required' => 'Bu alan gereklidir.',
    'required_array_keys' => 'Bu alan, :keys anahtarlarını içermelidir.',
    'required_if' => 'Bu alan, :other :value değerine sahip olduğunda zorunludur.',
    'required_unless' => 'Bu alan, :other :values değerine sahip olmadığında zorunludur.',
    'required_with' => 'Bu alan :values varken zorunludur.',
    'required_with_all' => 'Bu alan :values varken zorunludur.',
    'required_without' => 'Bu alan :values yokken zorunludur.',
    'required_without_all' => 'Bu alan :values yokken zorunludur.',
    'same' => 'Bu alan ile :other eşleşmelidir.',
    'size' => [
        'numeric' => 'Bu alan :size olmalıdır.',
        'file' => 'Bu alan :size kilobayt olmalıdır.',
        'string' => 'Bu alan :size karakter olmalıdır.',
        'array' => 'Bu alan :size nesneye sahip olmalıdır.',
    ],
    'starts_with' => 'Bu alan şunlardan biri ile başlamalıdır: :values.',
    'string' => 'Bu alan karakterlerden oluşmalıdır.',
    'timezone' => 'Bu alan geçerli bir zaman bölgesi olmalıdır.',
    'unique' => 'Bu alan daha önceden kayıt edilmiş.',
    'uploaded' => 'Bu alan yüklenirken hata oluştu.',
    'url' => 'Bu alan biçimi geçersiz.',
    'uuid' => 'Bu alan geçerli bir UUID olmalıdır.',
    'current_password' => 'Şifreniz doğru değil.',

    'phone' => 'Bu alan geçerli bir telefon numarası olmalıdır.',

    'full_name' => 'Bu alan tam adınızı içermelidir. Örnek: Ad Soyad (kabul), ad soyad (kabul edilmez).',

    'menu' => [
        'max_depth' => 'Menüdeki öğelerin derinliği :max seviyeyi aşamaz.',
    ],

    'credit_card' => [
        'card_invalid' => 'Geçersiz kredi kartı',
        'card_pattern_invalid' => 'Kredi kartı biçimi geçersiz',
        'card_checksum_invalid' => 'Kredi kartı numarası uyumsuz.',
        'card_length_invalid' => 'Kredi kartı uzunluğunu kontrol ediniz',
        'card_expiration_year_invalid' => 'Yıl geçersiz',
        'card_expiration_month_invalid' => 'Ay geçersiz',
        'card_expiration_date_invalid' => 'Tarih geçersiz',
        'card_expiration_date_format_invalid' => 'Tarih biçimi geçersiz',
        'card_cvc_invalid' => 'CVC numarası geçersiz',
    ],

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
        'email' => 'E-posta',
        'password' => 'Şifre',
        'name' => 'Ad Soyad',
        'message' => 'Mesaj',
        'phone' => 'Telefon Numarası',
        'tree' => 'Menü',
    ],

];
