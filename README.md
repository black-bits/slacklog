# Slacklog

[![Latest Version on Packagist](https://img.shields.io/packagist/v/black-bits/slacklog.svg?style=flat-square)](https://packagist.org/packages/black-bits/slacklog)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/black-bits/slacklog/master.svg?style=flat-square)](https://travis-ci.org/black-bits/slacklog)
[![Total Downloads](https://img.shields.io/packagist/dt/black-bits/slacklog.svg?style=flat-square)](https://packagist.org/packages/black-bits/slacklog)

Send log-messages to slack in one line of code

## How to use

Publish config...
```bash
php artisan vendor:publish --provider="BlackBits\SlackLog\SlackLogServiceProvider"
```

... and set webhook in env
```php
'webhook' => env('SLACKLOG_WEBHOOK', 'your-webhook')
```

Log something to your channel...
```php
SlackLog::send($message = "my message", $id = "sender_id");   
```