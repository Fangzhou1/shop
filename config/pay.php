  <?php

return [
    'alipay' => [
        'app_id'         => '2016092000553888',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAv9+LgLctNxYVMwqeTzKaezBu3ZJU+7SgPmghkT2WqWeA/I+/d2QUuwPySMEJL6dMVzhqCfI25b7RwP73XQZjhKEY3DQxc0MEXbLMHZEX0zh9KppnbbmynEcwnfktVJRfg8W8jKYK8rUo/rzplflWPL+c1aEgbTzlhQR8h40kHkkCeRC7a6LP68gv7hEW9Icm9kKyXzTszVSndDYJsU5w7Zkpnc4uj0U0m0o2qtwuFs8QCUuCDk0ZC4fZIXlb5waIGedGwppNMo/4eqk5YU/75NqO4Jh9g1g4jJ2nZ8P9zDkbMykja1r+nIfZL1A7i/MzsnRXkeatDxEQe7d5hz8KCQIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEA06TclYIwc+WTz0a0OUbFKrj35ebSVHM3j34hLkwf1YjeDcQXk6FBTtQ4xkcPDVwFHaR4hLKUGxXy/sS2rIccRsavQ9K7HnlrIDv4IiALvCc7WcU/xtVMs+9y6xxhKpgeypS+qkq2tB6h3m7RUcFQoXXpsy5wONwUk0mgK3jM+sXwn3iDqBP8PwymaLl75EQuUFV9+Lt4wqTIMYMDcwYKMATeDvHXAc2v/ZTF1FlfnMpQgKyhGSWzH2pdtdFmryI2+VeYEQYfEmaGWtXkDfX+B+3vbOfoAwgO+2WKnGZef87jEphsu83w8yiZT+1caZF3iT9oLJcRfNJMPTosrqP6aQIDAQABAoIBAQCmP6JmbtXQtE3fTBLVyxml7ZYNKbueSsMiHFnEHFgFTHXhKl+6v7ilS18toTPZsqbyGffxhLWCcUNnjO5Rp/A2SGv0Qtxpm8bikzje1X1iVw7v/VmTvol57mW++ZP5+XR2fVEoQ3gxFL7iEvqp1ciYjB7/eUL95yLib7s5arLZaKVE3XKww3Rdlaeix5QjWQfI51TxqQ/DiMyUlE8VaQObOkIolqupGqsGmM7xtF0swRkNJqz0+ly/O1weT/vIDJQQg5UfYc6qof47wMB9Fz1ZQwxjau9LeAdOswgcw2iWozmjLcI7fmzTcucD4eDAZ3guYKIOgPFQ+9V0+UUb6qQBAoGBAO669gwwbKNxe68WRJJAHCwQSZ1n/2AjU7x0GpGPFKVs0IR/MtJXanc8beHZO18C06gmKFQqzqAMmKDxtOuB78nv8tB2Yx/aNn4mwitI8XtlXN4oVzf1yAziut+IwDBchLR3vedTxFpvsOW36SxZBN5kREhXU38zulKu9GJTIEKRAoGBAOL0Si0+BKam7W8vNp5l6S0+0UnTJD1RlDKzLfJMsIsNSj5BsFtupIYgA5Ny4rtqCMUBcf13ofnsTzHMNNt9W1dzBI7HrP320mE/a4pQfwcwB/L2E+qelCJdwdPa0oLTEcTpMC+Ch39uL3HCihKI49aUScWmi2EvNZ7ZB7gw3nZZAoGAK8Yqcae7c+jOJheuMScCQ24lIXC9WfKAWzDq4j/bKE4gmfr85abTxdNVzrDXex94kf+VK4HB64UDw5cudnSX9G5EFsdue5u2nEEdH3S7msXGVpINFBzENuCoJW7c1sFQMAs4zh8FBRQv2p9zaQdVpjW6c41XqR5iDuE3vIPDiZECgYAR0EriMjP7QK7yQypuVGFxA7U5rjDx/y06rYW1tv9Eas6hBFbrVkvjmy+sqx/QxgnaLLrdwj4cd8ffiL+9WqGIw6Zf7pxNcsogh/HQ8XCHB+YX0+jMSZYm/GTyVAKh8h867XKyx/QKtINU0ogz3DrF5O3FbcUS47m5th88/dj4QQKBgQC5B3IGiDeTDmKtA54f2ZtpZwhJNELmLkkEwyOT44lIgKyAVZ4va6jSoXMooDBW8CE40W1M70PaxzFaIvybjeSoMZQmB1WZfgDmFFcBf6gfb7QayWw5aJ9ZOh847A6UxgRopylh1mamD+QXfEKfwjn3rEUlF6umPKkRo6oItGZYOA==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
