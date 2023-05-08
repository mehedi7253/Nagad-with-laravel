<?php

return [
    "sandbox"         => env("NAGAD_SANDBOX", true),
    "merchant_id"     => env("NAGAD_MERCHANT_ID", ""),
    "merchant_number" => env("NAGAD_MERCHANT_NUMBER", ""),
    "public_key"      => env("NAGAD_PUBLIC_KEY", ""),
    "private_key"     => env("NAGAD_PRIVATE_KEY", ""),
    'timezone'        => 'Asia/Dhaka',

    // NAGAD_SANDBOX=true #for production use false
    // NAGAD_MERCHANT_ID="689701002445399"
    // NAGAD_MERCHANT_NUMBER="01970100244"
    // NAGAD_PUBLIC_KEY="MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAjBH1pFNSSRKPuMcNxmU5jZ1x8K9LPFM4XSu11m7uCfLUSE4SEjL30w3ockFvwAcuJffCUwtSpbjr34cSTD7EFG1Jqk9Gg0fQCKvPaU54jjMJoP2toR9fGmQV7y9fz31UVxSk97AqWZZLJBT2lmv76AgpVV0k0xtb/0VIv8pd/j6TIz9SFfsTQOugHkhyRzzhvZisiKzOAAWNX8RMpG+iqQi4p9W9VrmmiCfFDmLFnMrwhncnMsvlXB8QSJCq2irrx3HG0SJJCbS5+atz+E1iqO8QaPJ05snxv82Mf4NlZ4gZK0Pq/VvJ20lSkR+0nk+s/v3BgIyle78wjZP1vWLU4wIDAQAB"
    // NAGAD_PRIVATE_KEY="MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCGxv0ukQLkzJ6gph+vkOmi4KiIypPA9sNLpGZzJCmQB7/kbnIpjkrzSRpBa+VMiNOm93ojny+DrjYo23FXbXoHZF5f2dpABlf3CyKmkH+hy1GSUA/2CGSuj9jM0DHHJaU8v2z3oX4nQa3cANQmW/itpGaY6W0PMm+DCRpj2xf2V5csQ0mpQtloi36Ug+LMVAcjA+B8XDB4L8fJ1LRzdZDtDpNSZLJ2xLsNagMdPA6RoHrDBmfjfjOGHI5w+Nsqb0K3LaV5iRJHiqIg+XMDmGSFJKWOkwamisGuPh/HTFx1VOvTEIdOniK3JTKnZlOqvDfi5/lfB6MFEMbjKUSvQKQlAgMBAAECggEABq58xL85poAiaRJzRa/odUOv90AbvRg+rFRVI+YqDVLlB30WOcstGgyIua+QqY+q9n8UVgnBQET1uGbQoqXxw8YNC7FwKXZnC/9IU3ucaDf9LkS71dWqsCC/fb/gh9/s5isTSt99spKF/P8phVFP7cPVtkT0PCmi75sW7NZixLqWAor4CbDag4Kg2mXK2LL6FiBwSTX3dTnnyul2473afq2RLFa4hQjXRhC4y+8jjSsds8OuppazOF9F002YmEC80Ndvnq6/Dbk5c8nzTvl//Shbon5uSZevPS8rDWrFDUxRdRNQpRp8mgbRIapm4U+QjJgobz68xvxq0eSi1UzpYQKBgQDp3GYN123aHNMT3Mq8GtWzNdj7P8rRUeKGSuY5znZjZhgG1j7J1mRn1o21fd1/K2RnsqFkLhkG8d3IB+r/Iy6Pn12kZPIK0ykVNvmN1Fl1F/SJR2rMrukMnPeS9N0DxngmmVpQoKjQKw1Nvmdi5b2YuP2hr3qJjMVKjhaJsb0t3QKBgQCTiU5qBPpAHTiV0M64qK65U1JCehXtq/xVXb0/sNYHbZYyMe7X3Nx6snzlK2P1aaYkA5mJeoJDlMIHhvZjF52XeDxjP2y84QPuELv3tPk0toRvkwezs45qigittil/mgggR5jsqNOLFJwEtGYJxQnSScVi17joKr8rdzvNq1oe6QKBgERjVGDF1/UJqtxLG+pIOqgOniZTMF9n/8Nf0dWjv9EvgOU27+OcU35eKtChPw26RcFhZnriVCVIw5+EWT9FLY+Ifhzd/D4YJBJ1IiNMruBkIfmnLd8vYy1yFaAfBSbeejJndBbR9Kvzew96F8e/AWPQ7TLEGyRwSx2TUZnwpS7tAoGAdqUBwTKViL+3BIux4kAMmo6N5VXGkqYvOvsyOKjdxYV0NpN/Lmq3h5hH5gd50B6Q8/9NFojFftF/I4x+UXvpSKjxbyLPMCmH/ofIkVAg5Cou4IcNt46a5cRxbDjEsI/PHx5UtWSjEgKV4RatxAeHeWvH50/xrArMR4kQN7ontBkCgYBkkzG31qtUWcyA3IZYqH0c6k7u8b4k+ZL1iNdXlq5HBqL9wS0MZAzq4OPBoLUtF62kyGmW0lNQffCmqsKvrr9VcvFJ67Ef2VK96Z5aFiktwtETtg7Tzv7bupfBHIp9YkbU7ZTk7ZkM5IWqaKu2y8L3DiZZYwXhvCm4jnUv9WtxQQ=="
    // NAGAD_CALLBACK_URL="http://127.0.0.1:8000/nagad/callback"
    /*
      |--------------------------------------------------------------------------
      | Default callback url
      |--------------------------------------------------------------------------
      |
      | This option controls the nagad callback url
      | By default, it will redirect to "http://your_domain/nagad/callback"
      | you may change this url any time.
      */
    "callback_url"    => env("NAGAD_CALLBACK_URL", "http://your_domain/nagad/callback"),

    /*
      |--------------------------------------------------------------------------
      | Default Response Type
      |--------------------------------------------------------------------------
      |
      | This option controls the response type callback
      | By default, it will return json data
      | you may specify any of the other wonderful options provided here.
      |
      | Supported: "json", "html",
      |
      */
    "response_type"   => "html" // response type json/html
];
