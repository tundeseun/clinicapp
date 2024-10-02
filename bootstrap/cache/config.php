<?php return array (
  8 => 'concurrency',
  'activitylog' => 
  array (
    'enabled' => true,
    'delete_records_older_than_days' => 365,
    'default_log_name' => 'default',
    'default_auth_driver' => NULL,
    'subject_returns_soft_deleted_models' => false,
    'activity_model' => 'Spatie\\Activitylog\\Models\\Activity',
    'table_name' => 'activity_log',
    'database_connection' => NULL,
  ),
  'app' => 
  array (
    'name' => 'Kivicare Laravel',
    'env' => 'local',
    'debug' => true,
    'url' => 'http://127.0.0.1:8000',
    'frontend_url' => 'http://localhost:3000',
    'asset_url' => NULL,
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'cipher' => 'AES-256-CBC',
    'key' => 'base64:M2dE9QtUeZ5emUdFystKqsXNseC+3Fv+E6eJ/Ng0O4k=',
    'previous_keys' => 
    array (
    ),
    'maintenance' => 
    array (
      'driver' => 'file',
      'store' => 'database',
    ),
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'Barryvdh\\DomPDF\\ServiceProvider',
      23 => 'Yajra\\DataTables\\DataTablesServiceProvider',
      24 => 'App\\Providers\\AppServiceProvider',
      25 => 'App\\Providers\\AuthServiceProvider',
      26 => 'App\\Providers\\EventServiceProvider',
      27 => 'App\\Providers\\RouteServiceProvider',
      28 => 'App\\Providers\\ConfigServiceProvider',
      29 => 'App\\Providers\\CurrencyServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Concurrency' => 'Illuminate\\Support\\Facades\\Concurrency',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Context' => 'Illuminate\\Support\\Facades\\Context',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'Date' => 'Illuminate\\Support\\Facades\\Date',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Http' => 'Illuminate\\Support\\Facades\\Http',
      'Js' => 'Illuminate\\Support\\Js',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Number' => 'Illuminate\\Support\\Number',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Process' => 'Illuminate\\Support\\Facades\\Process',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'RateLimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schedule' => 'Illuminate\\Support\\Facades\\Schedule',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Vite' => 'Illuminate\\Support\\Facades\\Vite',
      'Menu' => 'Lavary\\Menu\\Facade',
      'AuthHelper' => 'App\\Helpers\\AuthHelper',
      'Currency' => 'App\\Currency\\CurrencyFacades',
      'MultiVendor' => 'App\\MultiVendor\\MultiVendorFacades',
      'PDF' => 'Barryvdh\\DomPDF\\Facade',
    ),
    'version' => '1.0.0',
    'mix_url' => 'http://127.0.0.1:8000',
    'avatar_base_path' => 'img/avatar/',
    'image_path' => 'img/',
    'available_locales' => 
    array (
      'ar' => 'العربی(AR)',
      'en' => 'English (EN)',
      'el' => 'Greek (EL)',
      'fr' => 'French (FR)',
      'de' => 'German (DE)',
    ),
    'salt' => 'zXfMPtcERG7XVFF4yUsSaRgOg',
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'sanctum' => 
      array (
        'driver' => 'sanctum',
        'provider' => NULL,
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'backup' => 
  array (
    'backup' => 
    array (
      'name' => 'Kivicare Laravel',
      'source' => 
      array (
        'files' => 
        array (
          'include' => 
          array (
            0 => '/Users/jastis/Downloads/clinicapp-main',
          ),
          'exclude' => 
          array (
            0 => '/Users/jastis/Downloads/clinicapp-main/vendor',
            1 => '/Users/jastis/Downloads/clinicapp-main/node_modules',
          ),
          'follow_links' => false,
          'ignore_unreadable_directories' => false,
          'relative_path' => NULL,
        ),
        'databases' => 
        array (
          0 => 'mysql',
        ),
      ),
      'database_dump_compressor' => NULL,
      'database_dump_file_extension' => '',
      'destination' => 
      array (
        'filename_prefix' => '',
        'disks' => 
        array (
          0 => 'local',
        ),
      ),
      'temporary_directory' => '/Users/jastis/Downloads/clinicapp-main/storage/app/backup-temp',
      'password' => NULL,
      'encryption' => 'default',
    ),
    'notifications' => 
    array (
      'notifications' => 
      array (
        'Spatie\\Backup\\Notifications\\Notifications\\BackupHasFailedNotification' => 
        array (
          0 => 'mail',
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\UnhealthyBackupWasFoundNotification' => 
        array (
          0 => 'mail',
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\CleanupHasFailedNotification' => 
        array (
          0 => 'mail',
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\BackupWasSuccessfulNotification' => 
        array (
          0 => 'mail',
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\HealthyBackupWasFoundNotification' => 
        array (
          0 => 'mail',
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\CleanupWasSuccessfulNotification' => 
        array (
          0 => 'mail',
        ),
      ),
      'notifiable' => 'Spatie\\Backup\\Notifications\\Notifiable',
      'mail' => 
      array (
        'to' => 'your@example.com',
        'from' => 
        array (
          'address' => 'hello@example.com',
          'name' => 'Kivicare Laravel',
        ),
      ),
      'slack' => 
      array (
        'webhook_url' => '',
        'channel' => NULL,
        'username' => NULL,
        'icon' => NULL,
      ),
      'discord' => 
      array (
        'webhook_url' => '',
        'username' => NULL,
        'avatar_url' => NULL,
      ),
    ),
    'monitor_backups' => 
    array (
      0 => 
      array (
        'name' => 'Kivicare Laravel',
        'disks' => 
        array (
          0 => 'local',
        ),
        'health_checks' => 
        array (
          'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks\\MaximumAgeInDays' => 1,
          'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks\\MaximumStorageInMegabytes' => 5000,
        ),
      ),
    ),
    'cleanup' => 
    array (
      'strategy' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
      'default_strategy' => 
      array (
        'keep_all_backups_for_days' => 7,
        'keep_daily_backups_for_days' => 16,
        'keep_weekly_backups_for_weeks' => 8,
        'keep_monthly_backups_for_months' => 4,
        'keep_yearly_backups_for_years' => 2,
        'delete_oldest_backups_when_using_more_megabytes_than' => 5000,
      ),
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'reverb' => 
      array (
        'driver' => 'reverb',
        'key' => NULL,
        'secret' => NULL,
        'app_id' => NULL,
        'options' => 
        array (
          'host' => NULL,
          'port' => 443,
          'scheme' => 'https',
          'useTLS' => true,
        ),
        'client_options' => 
        array (
        ),
      ),
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
          'cluster' => 'mt1',
          'useTLS' => true,
        ),
        'client_options' => 
        array (
        ),
      ),
      'ably' => 
      array (
        'driver' => 'ably',
        'key' => NULL,
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'array' => 
      array (
        'driver' => 'array',
        'serialize' => false,
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
        'lock_connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '/Users/jastis/Downloads/clinicapp-main/storage/framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
        'lock_connection' => 'default',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => '',
        'secret' => '',
        'region' => '',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
      'octane' => 
      array (
        'driver' => 'octane',
      ),
      'apc' => 
      array (
        'driver' => 'apc',
      ),
    ),
    'prefix' => 'kivicare_laravel_cache_',
  ),
  'constant' => 
  array (
    'name' => 'Constant',
    'SUBSCRIPTION_STATUS' => 
    array (
      'PENDING' => 'pending',
      'ACTIVE' => 'active',
      'INACTIVE' => 'inactive',
    ),
    'USER_PERMISSION_ALLOW' => 
    array (
    ),
    'MODULES' => 
    array (
      0 => 
      array (
        'module_name' => 'System Service',
        'is_custom_permission' => 0,
      ),
      1 => 
      array (
        'module_name' => 'Specialization',
        'is_custom_permission' => 0,
      ),
      2 => 
      array (
        'module_name' => 'Clinics Center',
        'more_permission' => 
        array (
          0 => 'gallery',
        ),
        'is_custom_permission' => 0,
      ),
      3 => 
      array (
        'module_name' => 'Clinics Category',
        'is_custom_permission' => 0,
      ),
      4 => 
      array (
        'module_name' => 'Customer',
        'more_permission' => 
        array (
          0 => 'password',
        ),
        'is_custom_permission' => 0,
      ),
      5 => 
      array (
        'module_name' => 'Clinics Service',
        'is_custom_permission' => 0,
      ),
      6 => 
      array (
        'module_name' => 'Doctors',
        'is_custom_permission' => 0,
      ),
      7 => 
      array (
        'module_name' => 'Doctors Session',
        'is_custom_permission' => 0,
      ),
      8 => 
      array (
        'module_name' => 'Patient SOAP',
        'is_custom_permission' => 0,
      ),
      9 => 
      array (
        'module_name' => 'Clinic Appointment List',
        'is_custom_permission' => 0,
      ),
      10 => 
      array (
        'module_name' => 'Clinic Receptionist List',
        'is_custom_permission' => 0,
      ),
      11 => 
      array (
        'module_name' => 'Setting',
        'more_permission' => 
        array (
          0 => 'bussiness',
          1 => 'misc',
          2 => 'quick_booking',
          3 => 'other_setting',
          4 => 'custom_code',
          5 => 'customization',
          6 => 'mail',
          7 => 'notification',
          8 => 'intigrations',
          9 => 'custom_fields',
          10 => 'currency',
          11 => 'commission',
          12 => 'holiday',
          13 => 'doctor_holiday',
          14 => 'payment_method',
          15 => 'language',
          16 => 'menu_builder',
          17 => 'invoice',
          18 => 'body_chart',
          19 => 'telemed_service',
          20 => 'module',
        ),
        'is_custom_permission' => 0,
      ),
      12 => 
      array (
        'module_name' => 'Vendor List',
        'is_custom_permission' => 0,
      ),
      13 => 
      array (
        'module_name' => 'Reviews',
        'is_custom_permission' => 0,
      ),
      14 => 
      array (
        'module_name' => 'Vendor Payouts',
        'is_custom_permission' => 0,
      ),
      15 => 
      array (
        'module_name' => 'Doctor Payouts',
        'is_custom_permission' => 0,
      ),
      16 => 
      array (
        'module_name' => 'Tax',
        'is_custom_permission' => 0,
      ),
      17 => 
      array (
        'module_name' => 'Doctor Earning',
        'is_custom_permission' => 0,
      ),
      18 => 
      array (
        'module_name' => 'Vendor Earning',
        'is_custom_permission' => 0,
      ),
      19 => 
      array (
        'module_name' => 'Location',
        'is_custom_permission' => 0,
      ),
      20 => 
      array (
        'module_name' => 'City',
        'is_custom_permission' => 0,
      ),
      21 => 
      array (
        'module_name' => 'State',
        'is_custom_permission' => 0,
      ),
      22 => 
      array (
        'module_name' => 'Country',
        'is_custom_permission' => 0,
      ),
      23 => 
      array (
        'module_name' => 'Pages',
        'is_custom_permission' => 0,
      ),
      24 => 
      array (
        'module_name' => 'Notification',
        'is_custom_permission' => 0,
      ),
      25 => 
      array (
        'module_name' => 'Notification Template',
        'is_custom_permission' => 0,
      ),
      26 => 
      array (
        'module_name' => 'Encounter',
        'is_custom_permission' => 0,
      ),
      27 => 
      array (
        'module_name' => 'Encounter Template',
        'is_custom_permission' => 0,
      ),
      28 => 
      array (
        'module_name' => 'App Banner',
        'is_custom_permission' => 0,
      ),
      29 => 
      array (
        'module_name' => 'Constant',
        'is_custom_permission' => 0,
      ),
      30 => 
      array (
        'module_name' => 'Permission',
        'is_custom_permission' => 0,
      ),
      31 => 
      array (
        'module_name' => 'Vital',
        'is_custom_permission' => 0,
      ),
      32 => 
      array (
        'module_name' => 'Subscription',
        'is_custom_permission' => 0,
      ),
      33 => 
      array (
        'module_name' => 'My Account',
        'is_custom_permission' => 0,
      ),
      34 => 
      array (
        'module_name' => 'Subscription List',
        'is_custom_permission' => 0,
      ),
      35 => 
      array (
        'module_name' => 'Plan List',
        'is_custom_permission' => 0,
      ),
      36 => 
      array (
        'module_name' => 'Request Service',
        'is_custom_permission' => 0,
      ),
      37 => 
      array (
        'module_name' => 'Plan Limitation',
        'is_custom_permission' => 0,
      ),
      38 => 
      array (
        'module_name' => 'Backup',
        'is_custom_permission' => 0,
      ),
      39 => 
      array (
        'module_name' => 'Billing Record',
        'is_custom_permission' => 0,
      ),
    ),
    'TIMEZONE' => 
    array (
      '(UTC-11:00) Midway Island' => 'Pacific/Midway',
      '(UTC-11:00) Samoa' => 'Pacific/Samoa',
      '(UTC-10:00) Hawaii' => 'Pacific/Honolulu',
      '(UTC-09:00) Alaska' => 'US/Alaska',
      '(UTC-08:00) Pacific Time (US &amp; Canada)' => 'America/Los_Angeles',
      '(UTC-08:00) Tijuana' => 'America/Tijuana',
      '(UTC-07:00) Arizona' => 'US/Arizona',
      '(UTC-07:00) Chihuahua' => 'America/Chihuahua',
      '(UTC-07:00) La Paz' => 'America/Chihuahua',
      '(UTC-07:00) Mazatlan' => 'America/Mazatlan',
      '(UTC-07:00) Mountain Time (US &amp; Canada)' => 'US/Mountain',
      '(UTC-06:00) Central America' => 'America/Managua',
      '(UTC-06:00) Central Time (US &amp; Canada)' => 'US/Central',
      '(UTC-06:00) Guadalajara' => 'America/Mexico_City',
      '(UTC-06:00) Mexico City' => 'America/Mexico_City',
      '(UTC-06:00) Monterrey' => 'America/Monterrey',
      '(UTC-06:00) Saskatchewan' => 'Canada/Saskatchewan',
      '(UTC-05:00) Bogota' => 'America/Bogota',
      '(UTC-05:00) Eastern Time (US &amp; Canada)' => 'US/Eastern',
      '(UTC-05:00) Indiana (East)' => 'US/East-Indiana',
      '(UTC-05:00) Lima' => 'America/Lima',
      '(UTC-05:00) Quito' => 'America/Bogota',
      '(UTC-04:00) Atlantic Time (Canada)' => 'Canada/Atlantic',
      '(UTC-04:30) Caracas' => 'America/Caracas',
      '(UTC-04:00) La Paz' => 'America/La_Paz',
      '(UTC-04:00) Santiago' => 'America/Santiago',
      '(UTC-03:30) Newfoundland' => 'Canada/Newfoundland',
      '(UTC-03:00) Brasilia' => 'America/Sao_Paulo',
      '(UTC-03:00) Buenos Aires' => 'America/Argentina/Buenos_Aires',
      '(UTC-03:00) Georgetown' => 'America/Argentina/Buenos_Aires',
      '(UTC-03:00) Greenland' => 'America/Godthab',
      '(UTC-02:00) Mid-Atlantic' => 'America/Noronha',
      '(UTC-01:00) Azores' => 'Atlantic/Azores',
      '(UTC-01:00) Cape Verde Is.' => 'Atlantic/Cape_Verde',
      '(UTC+00:00) Casablanca' => 'Africa/Casablanca',
      '(UTC+00:00) Edinburgh' => 'Europe/London',
      '(UTC+00:00) Greenwich Mean Time : Dublin' => 'Etc/Greenwich',
      '(UTC+00:00) Lisbon' => 'Europe/Lisbon',
      '(UTC+00:00) London' => 'Europe/London',
      '(UTC+00:00) Monrovia' => 'Africa/Monrovia',
      '(UTC+00:00) UTC' => 'UTC',
      '(UTC+01:00) Amsterdam' => 'Europe/Amsterdam',
      '(UTC+01:00) Belgrade' => 'Europe/Belgrade',
      '(UTC+01:00) Berlin' => 'Europe/Berlin',
      '(UTC+01:00) Bern' => 'Europe/Berlin',
      '(UTC+01:00) Bratislava' => 'Europe/Bratislava',
      '(UTC+01:00) Brussels' => 'Europe/Brussels',
      '(UTC+01:00) Budapest' => 'Europe/Budapest',
      '(UTC+01:00) Copenhagen' => 'Europe/Copenhagen',
      '(UTC+01:00) Ljubljana' => 'Europe/Ljubljana',
      '(UTC+01:00) Madrid' => 'Europe/Madrid',
      '(UTC+01:00) Paris' => 'Europe/Paris',
      '(UTC+01:00) Prague' => 'Europe/Prague',
      '(UTC+01:00) Rome' => 'Europe/Rome',
      '(UTC+01:00) Sarajevo' => 'Europe/Sarajevo',
      '(UTC+01:00) Skopje' => 'Europe/Skopje',
      '(UTC+01:00) Stockholm' => 'Europe/Stockholm',
      '(UTC+01:00) Vienna' => 'Europe/Vienna',
      '(UTC+01:00) Warsaw' => 'Europe/Warsaw',
      '(UTC+01:00) West Central Africa' => 'Africa/Lagos',
      '(UTC+01:00) Zagreb' => 'Europe/Zagreb',
      '(UTC+02:00) Athens' => 'Europe/Athens',
      '(UTC+02:00) Bucharest' => 'Europe/Bucharest',
      '(UTC+02:00) Cairo' => 'Africa/Cairo',
      '(UTC+02:00) Harare' => 'Africa/Harare',
      '(UTC+02:00) Helsinki' => 'Europe/Helsinki',
      '(UTC+02:00) Istanbul' => 'Europe/Istanbul',
      '(UTC+02:00) Jerusalem' => 'Asia/Jerusalem',
      '(UTC+02:00) Kyiv' => 'Europe/Helsinki',
      '(UTC+02:00) Pretoria' => 'Africa/Johannesburg',
      '(UTC+02:00) Riga' => 'Europe/Riga',
      '(UTC+02:00) Sofia' => 'Europe/Sofia',
      '(UTC+02:00) Tallinn' => 'Europe/Tallinn',
      '(UTC+02:00) Vilnius' => 'Europe/Vilnius',
      '(UTC+03:00) Baghdad' => 'Asia/Baghdad',
      '(UTC+03:00) Kuwait' => 'Asia/Kuwait',
      '(UTC+03:00) Minsk' => 'Europe/Minsk',
      '(UTC+03:00) Nairobi' => 'Africa/Nairobi',
      '(UTC+03:00) Riyadh' => 'Asia/Riyadh',
      '(UTC+03:00) Volgograd' => 'Europe/Volgograd',
      '(UTC+03:30) Tehran' => 'Asia/Tehran',
      '(UTC+04:00) Abu Dhabi' => 'Asia/Muscat',
      '(UTC+04:00) Baku' => 'Asia/Baku',
      '(UTC+04:00) Moscow' => 'Europe/Moscow',
      '(UTC+04:00) Muscat' => 'Asia/Muscat',
      '(UTC+04:00) St. Petersburg' => 'Europe/Moscow',
      '(UTC+04:00) Tbilisi' => 'Asia/Tbilisi',
      '(UTC+04:00) Yerevan' => 'Asia/Yerevan',
      '(UTC+04:30) Kabul' => 'Asia/Kabul',
      '(UTC+05:00) Islamabad' => 'Asia/Karachi',
      '(UTC+05:00) Karachi' => 'Asia/Karachi',
      '(UTC+05:00) Tashkent' => 'Asia/Tashkent',
      '(UTC+05:30) Chennai' => 'Asia/Calcutta',
      '(UTC+05:30) Kolkata' => 'Asia/Kolkata',
      '(UTC+05:30) Mumbai' => 'Asia/Calcutta',
      '(UTC+05:30) New Delhi' => 'Asia/Calcutta',
      '(UTC+05:30) Sri Jayawardenepura' => 'Asia/Calcutta',
      '(UTC+05:45) Kathmandu' => 'Asia/Katmandu',
      '(UTC+06:00) Almaty' => 'Asia/Almaty',
      '(UTC+06:00) Astana' => 'Asia/Dhaka',
      '(UTC+06:00) Dhaka' => 'Asia/Dhaka',
      '(UTC+06:00) Ekaterinburg' => 'Asia/Yekaterinburg',
      '(UTC+06:30) Rangoon' => 'Asia/Rangoon',
      '(UTC+07:00) Bangkok' => 'Asia/Bangkok',
      '(UTC+07:00) Hanoi' => 'Asia/Bangkok',
      '(UTC+07:00) Jakarta' => 'Asia/Jakarta',
      '(UTC+07:00) Novosibirsk' => 'Asia/Novosibirsk',
      '(UTC+08:00) Beijing' => 'Asia/Hong_Kong',
      '(UTC+08:00) Chongqing' => 'Asia/Chongqing',
      '(UTC+08:00) Hong Kong' => 'Asia/Hong_Kong',
      '(UTC+08:00) Krasnoyarsk' => 'Asia/Krasnoyarsk',
      '(UTC+08:00) Kuala Lumpur' => 'Asia/Kuala_Lumpur',
      '(UTC+08:00) Perth' => 'Australia/Perth',
      '(UTC+08:00) Singapore' => 'Asia/Singapore',
      '(UTC+08:00) Taipei' => 'Asia/Taipei',
      '(UTC+08:00) Ulaan Bataar' => 'Asia/Ulan_Bator',
      '(UTC+08:00) Urumqi' => 'Asia/Urumqi',
      '(UTC+09:00) Irkutsk' => 'Asia/Irkutsk',
      '(UTC+09:00) Osaka' => 'Asia/Tokyo',
      '(UTC+09:00) Sapporo' => 'Asia/Tokyo',
      '(UTC+09:00) Seoul' => 'Asia/Seoul',
      '(UTC+09:00) Tokyo' => 'Asia/Tokyo',
      '(UTC+09:30) Adelaide' => 'Australia/Adelaide',
      '(UTC+09:30) Darwin' => 'Australia/Darwin',
      '(UTC+10:00) Brisbane' => 'Australia/Brisbane',
      '(UTC+10:00) Canberra' => 'Australia/Canberra',
      '(UTC+10:00) Guam' => 'Pacific/Guam',
      '(UTC+10:00) Hobart' => 'Australia/Hobart',
      '(UTC+10:00) Melbourne' => 'Australia/Melbourne',
      '(UTC+10:00) Port Moresby' => 'Pacific/Port_Moresby',
      '(UTC+10:00) Sydney' => 'Australia/Sydney',
      '(UTC+10:00) Yakutsk' => 'Asia/Yakutsk',
      '(UTC+11:00) Vladivostok' => 'Asia/Vladivostok',
      '(UTC+12:00) Auckland' => 'Pacific/Auckland',
      '(UTC+12:00) Fiji' => 'Pacific/Fiji',
      '(UTC+12:00) International Date Line West' => 'Pacific/Kwajalein',
      '(UTC+12:00) Kamchatka' => 'Asia/Kamchatka',
      '(UTC+12:00) Magadan' => 'Asia/Magadan',
      '(UTC+12:00) Marshall Is.' => 'Pacific/Fiji',
      '(UTC+12:00) New Caledonia' => 'Asia/Magadan',
      '(UTC+12:00) Solomon Is.' => 'Asia/Magadan',
      '(UTC+12:00) Wellington' => 'Pacific/Auckland',
      '(UTC+13:00) Nuku\'alofa' => 'Pacific/Tongatapu',
    ),
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => 'api/*',
      1 => 'sanctum/csrf-cookie',
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => '*',
    ),
    'exposed_headers' => 
    array (
    ),
    'max_age' => 0,
    'supports_credentials' => false,
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'zealightlabs_hos',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '8889',
        'database' => 'zealightlabs_hos',
        'username' => 'root',
        'password' => 'root',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'mariadb' => 
      array (
        'driver' => 'mariadb',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '8889',
        'database' => 'zealightlabs_hos',
        'username' => 'root',
        'password' => 'root',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '8889',
        'database' => 'zealightlabs_hos',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'search_path' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '8889',
        'database' => 'zealightlabs_hos',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'options' => 
      array (
        'cluster' => 'redis',
        'prefix' => 'kivicare_laravel_database_',
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'username' => NULL,
        'password' => NULL,
        'port' => '6379',
        'database' => '0',
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'username' => NULL,
        'password' => NULL,
        'port' => '6379',
        'database' => '1',
      ),
    ),
  ),
  'datatables' => 
  array (
    'search' => 
    array (
      'smart' => true,
      'multi_term' => true,
      'case_insensitive' => true,
      'use_wildcards' => false,
      'starts_with' => false,
    ),
    'index_column' => 'DT_RowIndex',
    'engines' => 
    array (
      'eloquent' => 'Yajra\\DataTables\\EloquentDataTable',
      'query' => 'Yajra\\DataTables\\QueryDataTable',
      'collection' => 'Yajra\\DataTables\\CollectionDataTable',
      'resource' => 'Yajra\\DataTables\\ApiResourceDataTable',
    ),
    'builders' => 
    array (
    ),
    'nulls_last_sql' => ':column :direction NULLS LAST',
    'error' => NULL,
    'columns' => 
    array (
      'excess' => 
      array (
        0 => 'rn',
        1 => 'row_num',
      ),
      'escape' => '*',
      'raw' => 
      array (
        0 => 'action',
      ),
      'blacklist' => 
      array (
        0 => 'password',
        1 => 'remember_token',
      ),
      'whitelist' => '*',
    ),
    'json' => 
    array (
      'header' => 
      array (
      ),
      'options' => 0,
    ),
    'callback' => 
    array (
      0 => '$',
      1 => '$.',
      2 => 'function',
    ),
  ),
  'dompdf' => 
  array (
    'show_warnings' => false,
    'public_path' => NULL,
    'convert_entities' => true,
    'options' => 
    array (
      'font_dir' => '/Users/jastis/Downloads/clinicapp-main/storage/fonts',
      'font_cache' => '/Users/jastis/Downloads/clinicapp-main/storage/fonts',
      'temp_dir' => '/var/tmp/',
      'chroot' => '/Users/jastis/Downloads/clinicapp-main',
      'allowed_protocols' => 
      array (
        'file://' => 
        array (
          'rules' => 
          array (
          ),
        ),
        'http://' => 
        array (
          'rules' => 
          array (
          ),
        ),
        'https://' => 
        array (
          'rules' => 
          array (
          ),
        ),
      ),
      'log_output_file' => NULL,
      'enable_font_subsetting' => false,
      'pdf_backend' => 'CPDF',
      'default_media_type' => 'screen',
      'default_paper_size' => 'a4',
      'default_paper_orientation' => 'portrait',
      'default_font' => 'serif',
      'dpi' => 96,
      'enable_php' => false,
      'enable_javascript' => true,
      'enable_remote' => true,
      'font_height_ratio' => 1.1,
      'enable_html5_parser' => true,
    ),
  ),
  'excel' => 
  array (
    'exports' => 
    array (
      'chunk_size' => 1000,
      'pre_calculate_formulas' => false,
      'strict_null_comparison' => false,
      'csv' => 
      array (
        'delimiter' => ',',
        'enclosure' => '"',
        'line_ending' => '
',
        'use_bom' => false,
        'include_separator_line' => false,
        'excel_compatibility' => false,
        'output_encoding' => '',
        'test_auto_detect' => true,
      ),
      'properties' => 
      array (
        'creator' => '',
        'lastModifiedBy' => '',
        'title' => '',
        'description' => '',
        'subject' => '',
        'keywords' => '',
        'category' => '',
        'manager' => '',
        'company' => '',
      ),
    ),
    'imports' => 
    array (
      'read_only' => true,
      'ignore_empty' => false,
      'heading_row' => 
      array (
        'formatter' => 'slug',
      ),
      'csv' => 
      array (
        'delimiter' => NULL,
        'enclosure' => '"',
        'escape_character' => '\\',
        'contiguous' => false,
        'input_encoding' => 'UTF-8',
      ),
      'properties' => 
      array (
        'creator' => '',
        'lastModifiedBy' => '',
        'title' => '',
        'description' => '',
        'subject' => '',
        'keywords' => '',
        'category' => '',
        'manager' => '',
        'company' => '',
      ),
      'cells' => 
      array (
        'middleware' => 
        array (
        ),
      ),
    ),
    'extension_detector' => 
    array (
      'xlsx' => 'Xlsx',
      'xlsm' => 'Xlsx',
      'xltx' => 'Xlsx',
      'xltm' => 'Xlsx',
      'xls' => 'Xls',
      'xlt' => 'Xls',
      'ods' => 'Ods',
      'ots' => 'Ods',
      'slk' => 'Slk',
      'xml' => 'Xml',
      'gnumeric' => 'Gnumeric',
      'htm' => 'Html',
      'html' => 'Html',
      'csv' => 'Csv',
      'tsv' => 'Csv',
      'pdf' => 'Dompdf',
    ),
    'value_binder' => 
    array (
      'default' => 'Maatwebsite\\Excel\\DefaultValueBinder',
    ),
    'cache' => 
    array (
      'driver' => 'memory',
      'batch' => 
      array (
        'memory_limit' => 60000,
      ),
      'illuminate' => 
      array (
        'store' => NULL,
      ),
      'default_ttl' => 10800,
    ),
    'transactions' => 
    array (
      'handler' => 'db',
      'db' => 
      array (
        'connection' => NULL,
      ),
    ),
    'temporary_files' => 
    array (
      'local_path' => '/Users/jastis/Downloads/clinicapp-main/storage/framework/cache/laravel-excel',
      'local_permissions' => 
      array (
      ),
      'remote_disk' => NULL,
      'remote_prefix' => NULL,
      'force_resync_remote' => NULL,
    ),
  ),
  'file-manager' => 
  array (
    'configRepository' => 'Alexusmai\\LaravelFileManager\\Services\\ConfigService\\DefaultConfigRepository',
    'aclRepository' => 'Alexusmai\\LaravelFileManager\\Services\\ACLService\\ConfigACLRepository',
    'routePrefix' => 'file-manager',
    'diskList' => 
    array (
      0 => 'files',
      1 => 'public',
    ),
    'leftDisk' => NULL,
    'rightDisk' => NULL,
    'leftPath' => NULL,
    'rightPath' => NULL,
    'cache' => NULL,
    'windowsConfig' => 2,
    'maxUploadFileSize' => NULL,
    'allowFileTypes' => 
    array (
      0 => 'doc',
      1 => 'docx',
      2 => 'gif',
      3 => 'jpg',
      4 => 'jpeg',
      5 => 'pdf',
      6 => 'png',
      7 => 'ppt',
      8 => 'pptx',
      9 => 'xls',
      10 => 'xlsx',
    ),
    'hiddenFiles' => true,
    'middleware' => 
    array (
      0 => 'web',
      1 => 'auth',
    ),
    'acl' => false,
    'aclHideFromFM' => true,
    'aclStrategy' => 'blacklist',
    'aclRulesCache' => NULL,
    'aclRules' => 
    array (
      '' => 
      array (
      ),
      1 => 
      array (
      ),
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/Users/jastis/Downloads/clinicapp-main/storage/app',
        'throw' => false,
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '/Users/jastis/Downloads/clinicapp-main/storage/app/public',
        'url' => 'http://127.0.0.1:8000/storage',
        'visibility' => 'public',
        'throw' => false,
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => '',
        'bucket' => '',
        'url' => NULL,
        'endpoint' => NULL,
        'use_path_style_endpoint' => false,
        'throw' => false,
      ),
      'images' => 
      array (
        'driver' => 'local',
        'root' => '/Users/jastis/Downloads/clinicapp-main/storage/app/public/images',
        'url' => 'http://127.0.0.1:8000/storage/images',
        'visibility' => 'public',
        'throw' => false,
      ),
      'files' => 
      array (
        'driver' => 'local',
        'root' => '/Users/jastis/Downloads/clinicapp-main/storage/app/public/files',
        'url' => 'http://127.0.0.1:8000/storage/files',
        'visibility' => 'public',
        'throw' => false,
      ),
      'media' => 
      array (
        'driver' => 'local',
        'root' => '/Users/jastis/Downloads/clinicapp-main/public/media',
        'url' => 'http://127.0.0.1:8000/media',
      ),
    ),
    'links' => 
    array (
      '/Users/jastis/Downloads/clinicapp-main/public/storage' => '/Users/jastis/Downloads/clinicapp-main/storage/app/public',
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 65536,
      'threads' => 1,
      'time' => 4,
    ),
    'rehash_on_login' => true,
  ),
  'ide-helper' => 
  array (
    'filename' => '_ide_helper.php',
    'models_filename' => '_ide_helper_models.php',
    'meta_filename' => '.phpstorm.meta.php',
    'include_fluent' => false,
    'include_factory_builders' => false,
    'write_model_magic_where' => true,
    'write_model_external_builder_methods' => true,
    'write_model_relation_count_properties' => true,
    'write_eloquent_model_mixins' => false,
    'include_helpers' => false,
    'helper_files' => 
    array (
      0 => '/Users/jastis/Downloads/clinicapp-main/vendor/laravel/framework/src/Illuminate/Support/helpers.php',
    ),
    'model_locations' => 
    array (
      0 => 'app',
    ),
    'ignored_models' => 
    array (
    ),
    'model_hooks' => 
    array (
    ),
    'extra' => 
    array (
      'Eloquent' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'Illuminate\\Database\\Query\\Builder',
      ),
      'Session' => 
      array (
        0 => 'Illuminate\\Session\\Store',
      ),
    ),
    'magic' => 
    array (
    ),
    'interfaces' => 
    array (
    ),
    'model_camel_case_properties' => false,
    'type_overrides' => 
    array (
      'integer' => 'int',
      'boolean' => 'bool',
    ),
    'include_class_docblocks' => false,
    'force_fqn' => false,
    'use_generics_annotations' => true,
    'additional_relation_types' => 
    array (
    ),
    'additional_relation_return_types' => 
    array (
    ),
    'post_migrate' => 
    array (
    ),
    'custom_db_types' => 
    array (
    ),
  ),
  'laravel-menu' => 
  array (
    'settings' => 
    array (
      'default' => 
      array (
        'auto_activate' => true,
        'activate_parents' => true,
        'active_class' => 'active show',
        'restful' => false,
        'cascade_data' => true,
        'rest_base' => '',
        'active_element' => 'item',
        'data_toggle_attribute' => 'data-bs-toggle',
      ),
    ),
    'views' => 
    array (
      'bootstrap-items' => 'laravel-menu::bootstrap-navbar-items',
    ),
  ),
  'livewire' => 
  array (
    'class_namespace' => 'App\\Http\\Livewire',
    'view_path' => '/Users/jastis/Downloads/clinicapp-main/resources/views/livewire',
    'layout' => 'layouts.app',
    'lazy_placeholder' => NULL,
    'temporary_file_upload' => 
    array (
      'disk' => NULL,
      'rules' => NULL,
      'directory' => NULL,
      'middleware' => NULL,
      'preview_mimes' => 
      array (
        0 => 'png',
        1 => 'gif',
        2 => 'bmp',
        3 => 'svg',
        4 => 'wav',
        5 => 'mp4',
        6 => 'mov',
        7 => 'avi',
        8 => 'wmv',
        9 => 'mp3',
        10 => 'm4a',
        11 => 'jpg',
        12 => 'jpeg',
        13 => 'mpga',
        14 => 'webp',
        15 => 'wma',
      ),
      'max_upload_time' => 5,
    ),
    'render_on_redirect' => false,
    'legacy_model_binding' => false,
    'inject_assets' => true,
    'navigate' => 
    array (
      'show_progress_bar' => true,
      'progress_bar_color' => '#2299dd',
    ),
    'inject_morph_markers' => true,
    'pagination_theme' => 'tailwind',
    'asset_url' => 'http://127.0.0.1:8000',
    'app_url' => 'http://127.0.0.1:8000',
    'middleware_group' => 'web',
    'manifest_path' => NULL,
    'back_button_cache' => false,
  ),
  'log-viewer' => 
  array (
    'storage-path' => '/Users/jastis/Downloads/clinicapp-main/storage/logs',
    'locale' => 'auto',
    'theme' => 'laravel-starter',
    'route' => 
    array (
      'enabled' => true,
      'attributes' => 
      array (
        'prefix' => 'app/log-viewer',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin',
          3 => 'permission:view_logs',
        ),
      ),
    ),
    'per-page' => 30,
    'download' => 
    array (
      'prefix' => 'laravel-',
      'extension' => 'log',
    ),
    'menu' => 
    array (
      'filter-route' => 'log-viewer::logs.filter',
      'icons-enabled' => true,
    ),
    'icons' => 
    array (
      'all' => 'fa fa-fw fa-list',
      'emergency' => 'fa fa-fw fa-bug',
      'alert' => 'fa fa-fw fa-bullhorn',
      'critical' => 'fa fa-fw fa-heartbeat',
      'error' => 'fa fa-fw fa-times-circle',
      'warning' => 'fa fa-fw fa-exclamation-triangle',
      'notice' => 'fa fa-fw fa-exclamation-circle',
      'info' => 'fa fa-fw fa-info-circle',
      'debug' => 'fa fa-fw fa-life-ring',
    ),
    'colors' => 
    array (
      'levels' => 
      array (
        'empty' => '#D1D1D1',
        'all' => '#8A8A8A',
        'emergency' => '#B71C1C',
        'alert' => '#D32F2F',
        'critical' => '#F44336',
        'error' => '#FF5722',
        'warning' => '#FF9100',
        'notice' => '#4CAF50',
        'info' => '#1976D2',
        'debug' => '#90CAF9',
      ),
    ),
    'highlight' => 
    array (
      0 => '^#\\d+',
      1 => '^Stack trace:',
    ),
  ),
  'logging' => 
  array (
    'default' => 'daily',
    'deprecations' => 'null',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => '/Users/jastis/Downloads/clinicapp-main/storage/logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => '/Users/jastis/Downloads/clinicapp-main/storage/logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
          'connectionString' => 'tls://:',
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => '/Users/jastis/Downloads/clinicapp-main/storage/logs/laravel.log',
      ),
    ),
  ),
  'mail' => 
  array (
    'default' => 'smtp',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'host' => 'mailhog',
        'port' => '1025',
        'encryption' => NULL,
        'username' => NULL,
        'password' => NULL,
        'timeout' => NULL,
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'resend' => 
      array (
        'transport' => 'resend',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs -i',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
      'failover' => 
      array (
        'transport' => 'failover',
        'mailers' => 
        array (
          0 => 'smtp',
          1 => 'log',
        ),
      ),
      'roundrobin' => 
      array (
        'transport' => 'roundrobin',
        'mailers' => 
        array (
          0 => 'ses',
          1 => 'postmark',
        ),
      ),
      'mailgun' => 
      array (
        'transport' => 'mailgun',
      ),
    ),
    'from' => 
    array (
      'address' => 'hello@example.com',
      'name' => 'Kivicare Laravel',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => '/Users/jastis/Downloads/clinicapp-main/resources/views/vendor/mail',
      ),
    ),
  ),
  'media-library' => 
  array (
    'disk_name' => 'public',
    'max_file_size' => 10485760,
    'queue_connection_name' => 'sync',
    'queue_name' => '',
    'queue_conversions_by_default' => true,
    'queue_conversions_after_database_commit' => true,
    'media_model' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
    'use_default_collection_serialization' => false,
    'temporary_upload_model' => 'Spatie\\MediaLibraryPro\\Models\\TemporaryUpload',
    'enable_temporary_uploads_session_affinity' => true,
    'generate_thumbnails_for_temporary_uploads' => true,
    'file_namer' => 'Spatie\\MediaLibrary\\Support\\FileNamer\\DefaultFileNamer',
    'path_generator' => 'Spatie\\MediaLibrary\\Support\\PathGenerator\\DefaultPathGenerator',
    'file_remover_class' => 'Spatie\\MediaLibrary\\Support\\FileRemover\\DefaultFileRemover',
    'custom_path_generators' => 
    array (
    ),
    'url_generator' => 'Spatie\\MediaLibrary\\Support\\UrlGenerator\\DefaultUrlGenerator',
    'moves_media_on_update' => false,
    'version_urls' => false,
    'image_optimizers' => 
    array (
      'Spatie\\ImageOptimizer\\Optimizers\\Jpegoptim' => 
      array (
        0 => '-m85',
        1 => '--force',
        2 => '--strip-all',
        3 => '--all-progressive',
      ),
      'Spatie\\ImageOptimizer\\Optimizers\\Pngquant' => 
      array (
        0 => '--force',
      ),
      'Spatie\\ImageOptimizer\\Optimizers\\Optipng' => 
      array (
        0 => '-i0',
        1 => '-o2',
        2 => '-quiet',
      ),
      'Spatie\\ImageOptimizer\\Optimizers\\Svgo' => 
      array (
        0 => '--disable=cleanupIDs',
      ),
      'Spatie\\ImageOptimizer\\Optimizers\\Gifsicle' => 
      array (
        0 => '-b',
        1 => '-O3',
      ),
      'Spatie\\ImageOptimizer\\Optimizers\\Cwebp' => 
      array (
        0 => '-m 6',
        1 => '-pass 10',
        2 => '-mt',
        3 => '-q 90',
      ),
    ),
    'image_generators' => 
    array (
      0 => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Image',
      1 => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Webp',
      2 => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Pdf',
      3 => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Svg',
      4 => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Video',
    ),
    'temporary_directory_path' => NULL,
    'image_driver' => 'gd',
    'ffmpeg_path' => '/usr/bin/ffmpeg',
    'ffprobe_path' => '/usr/bin/ffprobe',
    'jobs' => 
    array (
      'perform_conversions' => 'Spatie\\MediaLibrary\\Conversions\\Jobs\\PerformConversionsJob',
      'generate_responsive_images' => 'Spatie\\MediaLibrary\\ResponsiveImages\\Jobs\\GenerateResponsiveImagesJob',
    ),
    'media_downloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
    'media_downloader_ssl' => true,
    'remote' => 
    array (
      'extra_headers' => 
      array (
        'CacheControl' => 'max-age=604800',
      ),
    ),
    'responsive_images' => 
    array (
      'width_calculator' => 'Spatie\\MediaLibrary\\ResponsiveImages\\WidthCalculator\\FileSizeOptimizedWidthCalculator',
      'use_tiny_placeholders' => true,
      'tiny_placeholder_generator' => 'Spatie\\MediaLibrary\\ResponsiveImages\\TinyPlaceholderGenerator\\Blurred',
    ),
    'enable_vapor_uploads' => false,
    'default_loading_attribute_value' => NULL,
    'prefix' => '',
    'force_lazy_loading' => true,
  ),
  'module-manager' => 
  array (
    'namespace' => 'Modules',
    'stubs' => 
    array (
      'path' => '/Users/jastis/Downloads/clinicapp-main/stubs/laravel-starter-stubs',
    ),
    'module' => 
    array (
      'files' => 
      array (
        'composer' => 
        array (
          0 => 'composer.stub',
          1 => 'composer.json',
        ),
        'json' => 
        array (
          0 => 'module.stub',
          1 => 'module.json',
        ),
        'config' => 
        array (
          0 => 'Config/config.stub',
          1 => 'Config/config.php',
        ),
        'database' => 
        array (
          0 => 'database/migrations/stubMigration.stub',
          1 => 'database/migrations/stubMigration.php',
          2 => 'rename',
        ),
        'factories' => 
        array (
          0 => 'database/factories/stubFactory.stub',
          1 => 'database/factories/stubFactory.php',
          2 => 'rename',
        ),
        'seeders' => 
        array (
          0 => 'database/seeders/stubSeeders.stub',
          1 => 'database/seeders/stubSeeders.php',
          2 => 'rename',
        ),
        'command' => 
        array (
          0 => 'Console/Commands/StubCommand.stub',
          1 => 'Console/Commands/StubCommand.php',
          2 => 'rename',
        ),
        'lang' => 
        array (
          0 => 'lang/en/text.stub',
          1 => 'lang/en/text.php',
        ),
        'models' => 
        array (
          0 => 'Models/stubModel.stub',
          1 => 'Models/stubModel.php',
        ),
        'providersRoute' => 
        array (
          0 => 'Providers/RouteServiceProvider.stub',
          1 => 'Providers/RouteServiceProvider.php',
        ),
        'providers' => 
        array (
          0 => 'Providers/stubServiceProvider.stub',
          1 => 'Providers/stubServiceProvider.php',
        ),
        'route_web' => 
        array (
          0 => 'routes/web.stub',
          1 => 'routes/web.php',
        ),
        'route_api' => 
        array (
          0 => 'routes/api.stub',
          1 => 'routes/api.php',
        ),
        'controller_backend' => 
        array (
          0 => 'Http/Controllers/Backend/stubBackendController.stub',
          1 => 'Http/Controllers/Backend/stubBackendController.php',
        ),
        'assets_js_app' => 
        array (
          0 => 'Resources/assets/js/app.js',
          1 => 'Resources/assets/js/app.js',
        ),
        'assets_sass_app' => 
        array (
          0 => 'Resources/assets/sass/app.scss',
          1 => 'Resources/assets/sass/app.scss',
        ),
        'assets_js_component' => 
        array (
          0 => 'Resources/assets/js/components/FormOffcanvas.vue',
          1 => 'Resources/assets/js/components/FormOffcanvas.vue',
        ),
        'assets_js_constant' => 
        array (
          0 => 'Resources/assets/js/constant.js',
          1 => 'Resources/assets/js/constant.js',
        ),
        'views_backend_index_datatable' => 
        array (
          0 => 'Resources/views/backend/stubViews/index_datatable.blade.stub',
          1 => 'Resources/views/backend/stubViews/index_datatable.blade.php',
        ),
        'test_feature' => 
        array (
          0 => 'Tests/Feature/stubTest.stub',
          1 => 'Tests/Feature/stubTest.php',
        ),
        'test_unit' => 
        array (
          0 => 'Tests/Unit/stubTest.stub',
          1 => 'Tests/Unit/stubTest.php',
        ),
        'package.json' => 
        array (
          0 => 'package.json',
          1 => 'package.json',
        ),
        'webpack.mix.js' => 
        array (
          0 => 'webpack.mix.js',
          1 => 'webpack.mix.js',
        ),
      ),
    ),
    'composer' => 
    array (
      'vendor' => 'iqonicdesign',
      'author' => 
      array (
        'name' => 'Iqonic Design',
        'email' => 'hello@iqonic.design',
      ),
    ),
  ),
  'modules' => 
  array (
    'namespace' => 'Modules',
    'stubs' => 
    array (
      'enabled' => false,
      'path' => '/Users/jastis/Downloads/clinicapp-main/vendor/nwidart/laravel-modules/src/Commands/stubs',
      'files' => 
      array (
        'routes/web' => 'Routes/web.php',
        'routes/api' => 'Routes/api.php',
        'views/index' => 'Resources/views/index.blade.php',
        'views/master' => 'Resources/views/layouts/master.blade.php',
        'scaffold/config' => 'Config/config.php',
        'composer' => 'composer.json',
        'assets/js/app' => 'Resources/assets/js/app.js',
        'assets/sass/app' => 'Resources/assets/sass/app.scss',
        'vite' => 'vite.config.js',
        'package' => 'package.json',
      ),
      'replacements' => 
      array (
        'routes/web' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
        ),
        'routes/api' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'vite' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'json' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
          3 => 'PROVIDER_NAMESPACE',
        ),
        'views/index' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'views/master' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
        ),
        'scaffold/config' => 
        array (
          0 => 'STUDLY_NAME',
        ),
        'composer' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'VENDOR',
          3 => 'AUTHOR_NAME',
          4 => 'AUTHOR_EMAIL',
          5 => 'MODULE_NAMESPACE',
          6 => 'PROVIDER_NAMESPACE',
        ),
      ),
      'gitkeep' => true,
    ),
    'paths' => 
    array (
      'modules' => '/Users/jastis/Downloads/clinicapp-main/Modules',
      'assets' => '/Users/jastis/Downloads/clinicapp-main/public/modules',
      'migration' => '/Users/jastis/Downloads/clinicapp-main/database/migrations',
      'generator' => 
      array (
        'config' => 
        array (
          'path' => 'Config',
          'generate' => true,
        ),
        'command' => 
        array (
          'path' => 'Console',
          'generate' => true,
        ),
        'migration' => 
        array (
          'path' => 'database/migrations',
          'generate' => true,
        ),
        'seeder' => 
        array (
          'path' => 'database/seeders',
          'generate' => true,
        ),
        'factory' => 
        array (
          'path' => 'database/factories',
          'generate' => true,
        ),
        'model' => 
        array (
          'path' => 'Models',
          'generate' => true,
        ),
        'routes' => 
        array (
          'path' => 'Routes',
          'generate' => true,
        ),
        'controller' => 
        array (
          'path' => 'Http/Controllers',
          'generate' => true,
        ),
        'filter' => 
        array (
          'path' => 'Http/Middleware',
          'generate' => true,
        ),
        'request' => 
        array (
          'path' => 'Http/Requests',
          'generate' => true,
        ),
        'provider' => 
        array (
          'path' => 'Providers',
          'generate' => true,
        ),
        'assets' => 
        array (
          'path' => 'Resources/assets',
          'generate' => true,
        ),
        'lang' => 
        array (
          'path' => 'Resources/lang',
          'generate' => true,
        ),
        'views' => 
        array (
          'path' => 'Resources/views',
          'generate' => true,
        ),
        'test' => 
        array (
          'path' => 'Tests/Unit',
          'generate' => true,
        ),
        'test-feature' => 
        array (
          'path' => 'Tests/Feature',
          'generate' => true,
        ),
        'repository' => 
        array (
          'path' => 'Repositories',
          'generate' => false,
        ),
        'event' => 
        array (
          'path' => 'Events',
          'generate' => false,
        ),
        'listener' => 
        array (
          'path' => 'Listeners',
          'generate' => false,
        ),
        'policies' => 
        array (
          'path' => 'Policies',
          'generate' => false,
        ),
        'rules' => 
        array (
          'path' => 'Rules',
          'generate' => false,
        ),
        'jobs' => 
        array (
          'path' => 'Jobs',
          'generate' => false,
        ),
        'emails' => 
        array (
          'path' => 'Emails',
          'generate' => false,
        ),
        'notifications' => 
        array (
          'path' => 'Notifications',
          'generate' => false,
        ),
        'resource' => 
        array (
          'path' => 'Transformers',
          'generate' => false,
        ),
        'component-view' => 
        array (
          'path' => 'Resources/views/components',
          'generate' => false,
        ),
        'component-class' => 
        array (
          'path' => 'View/Components',
          'generate' => false,
        ),
      ),
    ),
    'commands' => 
    array (
      0 => 'Nwidart\\Modules\\Commands\\CommandMakeCommand',
      1 => 'Nwidart\\Modules\\Commands\\ComponentClassMakeCommand',
      2 => 'Nwidart\\Modules\\Commands\\ComponentViewMakeCommand',
      3 => 'Nwidart\\Modules\\Commands\\ControllerMakeCommand',
      4 => 'Nwidart\\Modules\\Commands\\DisableCommand',
      5 => 'Nwidart\\Modules\\Commands\\DumpCommand',
      6 => 'Nwidart\\Modules\\Commands\\EnableCommand',
      7 => 'Nwidart\\Modules\\Commands\\EventMakeCommand',
      8 => 'Nwidart\\Modules\\Commands\\JobMakeCommand',
      9 => 'Nwidart\\Modules\\Commands\\ListenerMakeCommand',
      10 => 'Nwidart\\Modules\\Commands\\MailMakeCommand',
      11 => 'Nwidart\\Modules\\Commands\\MiddlewareMakeCommand',
      12 => 'Nwidart\\Modules\\Commands\\NotificationMakeCommand',
      13 => 'Nwidart\\Modules\\Commands\\ProviderMakeCommand',
      14 => 'Nwidart\\Modules\\Commands\\RouteProviderMakeCommand',
      15 => 'Nwidart\\Modules\\Commands\\InstallCommand',
      16 => 'Nwidart\\Modules\\Commands\\ListCommand',
      17 => 'Nwidart\\Modules\\Commands\\ModuleDeleteCommand',
      18 => 'Nwidart\\Modules\\Commands\\ModuleMakeCommand',
      19 => 'Nwidart\\Modules\\Commands\\FactoryMakeCommand',
      20 => 'Nwidart\\Modules\\Commands\\PolicyMakeCommand',
      21 => 'Nwidart\\Modules\\Commands\\RequestMakeCommand',
      22 => 'Nwidart\\Modules\\Commands\\RuleMakeCommand',
      23 => 'Nwidart\\Modules\\Commands\\MigrateCommand',
      24 => 'Nwidart\\Modules\\Commands\\MigrateFreshCommand',
      25 => 'Nwidart\\Modules\\Commands\\MigrateRefreshCommand',
      26 => 'Nwidart\\Modules\\Commands\\MigrateResetCommand',
      27 => 'Nwidart\\Modules\\Commands\\MigrateRollbackCommand',
      28 => 'Nwidart\\Modules\\Commands\\MigrateStatusCommand',
      29 => 'Nwidart\\Modules\\Commands\\MigrationMakeCommand',
      30 => 'Nwidart\\Modules\\Commands\\ModelMakeCommand',
      31 => 'Nwidart\\Modules\\Commands\\PublishCommand',
      32 => 'Nwidart\\Modules\\Commands\\PublishConfigurationCommand',
      33 => 'Nwidart\\Modules\\Commands\\PublishMigrationCommand',
      34 => 'Nwidart\\Modules\\Commands\\PublishTranslationCommand',
      35 => 'Nwidart\\Modules\\Commands\\SeedCommand',
      36 => 'Nwidart\\Modules\\Commands\\SeedMakeCommand',
      37 => 'Nwidart\\Modules\\Commands\\SetupCommand',
      38 => 'Nwidart\\Modules\\Commands\\UnUseCommand',
      39 => 'Nwidart\\Modules\\Commands\\UpdateCommand',
      40 => 'Nwidart\\Modules\\Commands\\UseCommand',
      41 => 'Nwidart\\Modules\\Commands\\ResourceMakeCommand',
      42 => 'Nwidart\\Modules\\Commands\\TestMakeCommand',
      43 => 'Nwidart\\Modules\\Commands\\LaravelModulesV6Migrator',
    ),
    'scan' => 
    array (
      'enabled' => false,
      'paths' => 
      array (
        0 => '/Users/jastis/Downloads/clinicapp-main/vendor/*/*',
      ),
    ),
    'composer' => 
    array (
      'vendor' => 'nwidart',
      'author' => 
      array (
        'name' => 'Nicolas Widart',
        'email' => 'n.widart@gmail.com',
      ),
      'composer-output' => false,
    ),
    'cache' => 
    array (
      'enabled' => false,
      'driver' => 'file',
      'key' => 'laravel-modules',
      'lifetime' => 60,
    ),
    'register' => 
    array (
      'translations' => true,
      'files' => 'register',
    ),
    'activators' => 
    array (
      'file' => 
      array (
        'class' => 'Nwidart\\Modules\\Activators\\FileActivator',
        'statuses-file' => '/Users/jastis/Downloads/clinicapp-main/modules_statuses.json',
        'cache-key' => 'activator.installed',
        'cache-lifetime' => 604800,
      ),
    ),
    'activator' => 'file',
  ),
  'permission' => 
  array (
    'models' => 
    array (
      'permission' => 'Spatie\\Permission\\Models\\Permission',
      'role' => 'Spatie\\Permission\\Models\\Role',
    ),
    'table_names' => 
    array (
      'roles' => 'roles',
      'permissions' => 'permissions',
      'model_has_permissions' => 'model_has_permissions',
      'model_has_roles' => 'model_has_roles',
      'role_has_permissions' => 'role_has_permissions',
    ),
    'column_names' => 
    array (
      'role_pivot_key' => NULL,
      'permission_pivot_key' => NULL,
      'model_morph_key' => 'model_id',
      'team_foreign_key' => 'team_id',
    ),
    'register_permission_check_method' => true,
    'register_octane_reset_listener' => false,
    'teams' => false,
    'use_passport_client_credentials' => false,
    'display_permission_in_exception' => false,
    'display_role_in_exception' => false,
    'enable_wildcard_permission' => false,
    'cache' => 
    array (
      'expiration_time' => 
      \DateInterval::__set_state(array(
         'from_string' => true,
         'date_string' => '24 hours',
      )),
      'key' => 'spatie.permission.cache',
      'store' => 'default',
    ),
  ),
  'purifier' => 
  array (
    'encoding' => 'UTF-8',
    'finalize' => true,
    'ignoreNonStrings' => false,
    'cachePath' => '/Users/jastis/Downloads/clinicapp-main/storage/app/purifier',
    'cacheFileMode' => 493,
    'settings' => 
    array (
      'default' => 
      array (
        'HTML.Doctype' => 'HTML 4.01 Transitional',
        'HTML.Allowed' => 'div,b,strong,i,em,u,a[href|title],ul,ol,li,p[style],br,span[style],img[width|height|alt|src]',
        'CSS.AllowedProperties' => 'font,font-size,font-weight,font-style,font-family,text-decoration,padding-left,color,background-color,text-align',
        'AutoFormat.AutoParagraph' => true,
        'AutoFormat.RemoveEmpty' => true,
      ),
      'test' => 
      array (
        'Attr.EnableID' => 'true',
      ),
      'youtube' => 
      array (
        'HTML.SafeIframe' => 'true',
        'URI.SafeIframeRegexp' => '%^(http://|https://|//)(www.youtube.com/embed/|player.vimeo.com/video/)%',
      ),
      'custom_definition' => 
      array (
        'id' => 'html5-definitions',
        'rev' => 1,
        'debug' => false,
        'elements' => 
        array (
          0 => 
          array (
            0 => 'section',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          1 => 
          array (
            0 => 'nav',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          2 => 
          array (
            0 => 'article',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          3 => 
          array (
            0 => 'aside',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          4 => 
          array (
            0 => 'header',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          5 => 
          array (
            0 => 'footer',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          6 => 
          array (
            0 => 'address',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          7 => 
          array (
            0 => 'hgroup',
            1 => 'Block',
            2 => 'Required: h1 | h2 | h3 | h4 | h5 | h6',
            3 => 'Common',
          ),
          8 => 
          array (
            0 => 'figure',
            1 => 'Block',
            2 => 'Optional: (figcaption, Flow) | (Flow, figcaption) | Flow',
            3 => 'Common',
          ),
          9 => 
          array (
            0 => 'figcaption',
            1 => 'Inline',
            2 => 'Flow',
            3 => 'Common',
          ),
          10 => 
          array (
            0 => 'video',
            1 => 'Block',
            2 => 'Optional: (source, Flow) | (Flow, source) | Flow',
            3 => 'Common',
            4 => 
            array (
              'src' => 'URI',
              'type' => 'Text',
              'width' => 'Length',
              'height' => 'Length',
              'poster' => 'URI',
              'preload' => 'Enum#auto,metadata,none',
              'controls' => 'Bool',
            ),
          ),
          11 => 
          array (
            0 => 'source',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
            4 => 
            array (
              'src' => 'URI',
              'type' => 'Text',
            ),
          ),
          12 => 
          array (
            0 => 's',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          13 => 
          array (
            0 => 'var',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          14 => 
          array (
            0 => 'sub',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          15 => 
          array (
            0 => 'sup',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          16 => 
          array (
            0 => 'mark',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          17 => 
          array (
            0 => 'wbr',
            1 => 'Inline',
            2 => 'Empty',
            3 => 'Core',
          ),
          18 => 
          array (
            0 => 'ins',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
            4 => 
            array (
              'cite' => 'URI',
              'datetime' => 'CDATA',
            ),
          ),
          19 => 
          array (
            0 => 'del',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
            4 => 
            array (
              'cite' => 'URI',
              'datetime' => 'CDATA',
            ),
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            0 => 'iframe',
            1 => 'allowfullscreen',
            2 => 'Bool',
          ),
          1 => 
          array (
            0 => 'table',
            1 => 'height',
            2 => 'Text',
          ),
          2 => 
          array (
            0 => 'td',
            1 => 'border',
            2 => 'Text',
          ),
          3 => 
          array (
            0 => 'th',
            1 => 'border',
            2 => 'Text',
          ),
          4 => 
          array (
            0 => 'tr',
            1 => 'width',
            2 => 'Text',
          ),
          5 => 
          array (
            0 => 'tr',
            1 => 'height',
            2 => 'Text',
          ),
          6 => 
          array (
            0 => 'tr',
            1 => 'border',
            2 => 'Text',
          ),
        ),
      ),
      'custom_attributes' => 
      array (
        0 => 
        array (
          0 => 'a',
          1 => 'target',
          2 => 'Enum#_blank,_self,_target,_top',
        ),
      ),
      'custom_elements' => 
      array (
        0 => 
        array (
          0 => 'u',
          1 => 'Inline',
          2 => 'Inline',
          3 => 'Common',
        ),
      ),
    ),
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
        'after_commit' => false,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
        'after_commit' => false,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => '',
        'secret' => '',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'default',
        'suffix' => NULL,
        'region' => '',
        'after_commit' => false,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
        'after_commit' => false,
      ),
    ),
    'batching' => 
    array (
      'database' => 'mysql',
      'table' => 'job_batches',
    ),
    'failed' => 
    array (
      'driver' => 'database-uuids',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'sanctum' => 
  array (
    'stateful' => 
    array (
      0 => 'localhost',
      1 => 'localhost:3000',
      2 => '127.0.0.1',
      3 => '127.0.0.1:8000',
      4 => '::1',
      5 => '127.0.0.1:8000',
    ),
    'guard' => 
    array (
      0 => 'web',
    ),
    'expiration' => NULL,
    'token_prefix' => '',
    'middleware' => 
    array (
      'verify_csrf_token' => 'App\\Http\\Middleware\\VerifyCsrfToken',
      'encrypt_cookies' => 'App\\Http\\Middleware\\EncryptCookies',
    ),
  ),
  'services' => 
  array (
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'ses' => 
    array (
      'key' => '',
      'secret' => '',
      'region' => '',
    ),
    'resend' => 
    array (
      'key' => NULL,
    ),
    'slack' => 
    array (
      'notifications' => 
      array (
        'bot_user_oauth_token' => NULL,
        'channel' => NULL,
      ),
    ),
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
      'scheme' => 'https',
    ),
    'facebook' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'redirect' => 'http://laravel-starter.local/login/facebook/callback',
    ),
    'github' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'redirect' => 'http://laravel-starter.local/login/github/callback',
    ),
    'google' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'redirect' => 'http://laravel-starter.local/login/google/callback',
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => '/Users/jastis/Downloads/clinicapp-main/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'kivicare_laravel_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => 'lax',
    'partitioned' => false,
  ),
  'setting_fields' => 
  array (
    'app' => 
    array (
      'title' => 'General',
      'desc' => 'All the general settings for application.',
      'icon' => 'fas fa-cube',
      'elements' => 
      array (
        0 => 
        array (
          'type' => 'text',
          'data' => 'bussiness',
          'name' => 'app_name',
          'label' => 'Bussiness Name',
          'rules' => 'required|min:2|max:50',
          'class' => '',
          'value' => 'Kivicare Laravel',
          'datatype' => 'bussiness',
        ),
        1 => 
        array (
          'type' => 'text',
          'data' => 'bussiness',
          'name' => 'doctor_app_name',
          'label' => 'Doctor App Name',
          'rules' => 'required|min:2|max:50',
          'class' => '',
          'value' => 'Health Wellness Doctor App',
          'datatype' => 'bussiness',
        ),
        2 => 
        array (
          'type' => 'text',
          'data' => 'bussiness',
          'name' => 'user_app_name',
          'label' => 'User App Name',
          'rules' => 'required|min:2|max:50',
          'class' => '',
          'value' => 'Health Wellness User App',
          'datatype' => 'bussiness',
        ),
        3 => 
        array (
          'type' => 'text',
          'data' => 'bussiness',
          'name' => 'helpline_number',
          'label' => 'Contact Number',
          'rules' => 'required|min:2',
          'class' => '',
          'value' => '1234567890',
          'datatype' => 'bussiness',
        ),
        4 => 
        array (
          'type' => 'text',
          'data' => 'bussiness',
          'name' => 'inquriy_email',
          'label' => 'Email',
          'rules' => 'required|min:2',
          'class' => '',
          'value' => 'admin@kivicare.com',
          'datatype' => 'bussiness',
        ),
        5 => 
        array (
          'type' => 'text',
          'data' => 'bussiness',
          'name' => 'short_description',
          'label' => 'Short Description',
          'rules' => 'required|min:2',
          'class' => '',
          'value' => 'Dummy Text ',
          'datatype' => 'bussiness',
        ),
        6 => 
        array (
          'type' => 'text',
          'data' => 'bussiness',
          'name' => 'google_analytics',
          'label' => 'Google Analytics',
          'rules' => 'required',
          'class' => '',
          'value' => '',
          'datatype' => 'misc',
        ),
        7 => 
        array (
          'type' => 'file',
          'data' => 'string',
          'name' => 'logo',
          'label' => 'Logo',
          'rules' => 'nullable|image|mimes:jpg,png,gif',
          'class' => '',
          'value' => 'img/logo/logo.webp',
          'help' => '',
          'display' => 'raw',
          'datatype' => 'bussiness',
        ),
        8 => 
        array (
          'type' => 'file',
          'data' => 'string',
          'name' => 'mini_logo',
          'label' => 'Mini Logo',
          'rules' => 'nullable|image|mimes:jpg,png,gif',
          'class' => '',
          'value' => 'img/logo/mini_logo.webp',
          'help' => '',
          'display' => 'raw',
          'datatype' => 'bussiness',
        ),
        9 => 
        array (
          'type' => 'file',
          'data' => 'string',
          'name' => 'dark_logo',
          'label' => 'Dark Logo',
          'rules' => 'nullable|image|mimes:jpg,png,gif',
          'class' => '',
          'imageClass' => 'bg-dark',
          'value' => 'img/logo/dark_logo.webp',
          'help' => '',
          'display' => 'raw',
          'datatype' => 'bussiness',
        ),
        10 => 
        array (
          'type' => 'file',
          'data' => 'string',
          'name' => 'dark_mini_logo',
          'label' => 'Dark Mini Logo',
          'rules' => 'nullable|image|mimes:jpg,png,gif',
          'class' => '',
          'value' => 'img/logo/dark_mini_logo.webp',
          'help' => '',
          'display' => 'raw',
          'datatype' => 'bussiness',
        ),
        11 => 
        array (
          'type' => 'file',
          'data' => 'string',
          'name' => 'favicon',
          'label' => 'Favicon',
          'rules' => 'nullable|image|mimes:jpg,png,gif,ico',
          'class' => '',
          'value' => 'img/logo/mini_logo.webp',
          'help' => '',
          'display' => 'raw',
          'datatype' => 'bussiness',
        ),
        12 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'bussiness_address_line_1',
          'rules' => 'nullable|min:2|max:199',
          'value' => '',
          'datatype' => 'bussiness',
        ),
        13 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'bussiness_address_line_2',
          'rules' => 'nullable|min:2|max:199',
          'value' => '',
          'datatype' => 'bussiness',
        ),
        14 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'country',
          'rules' => '',
          'value' => '',
          'datatype' => 'bussiness',
        ),
        15 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'state',
          'rules' => '',
          'value' => '',
          'datatype' => 'bussiness',
        ),
        16 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'city',
          'rules' => '',
          'value' => '',
          'datatype' => 'bussiness',
        ),
        17 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'bussiness_address_postal_code',
          'rules' => 'nullable|min:2|max:199',
          'value' => '',
          'datatype' => 'bussiness',
        ),
        18 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'bussiness_address_latitude',
          'rules' => 'nullable|min:2|max:199',
          'value' => '',
          'datatype' => 'bussiness',
        ),
        19 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'bussiness_address_longitude',
          'rules' => 'nullable|min:2|max:199',
          'value' => '',
          'datatype' => 'bussiness',
        ),
      ),
    ),
    'module_setting' => 
    array (
      'title' => 'Module Settings',
      'desc' => 'Module Settings',
      'icon' => 'fas fa-chart-line',
      'elements' => 
      array (
        0 => 
        array (
          'type' => 'checkbox',
          'data' => 'module_settings',
          'name' => 'view_patient_soap',
          'label' => 'Clinic SOAP',
          'rules' => '',
          'class' => '',
          'value' => '0',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        1 => 
        array (
          'type' => 'checkbox',
          'data' => 'module_settings',
          'name' => 'is_body_chart',
          'label' => 'Body Chart',
          'rules' => '',
          'class' => '',
          'value' => '0',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        2 => 
        array (
          'type' => 'checkbox',
          'data' => 'module_settings',
          'name' => 'is_telemed_setting',
          'label' => 'Telemed Setting',
          'rules' => '',
          'class' => '',
          'value' => '0',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        3 => 
        array (
          'type' => 'checkbox',
          'data' => 'module_settings',
          'name' => 'is_multi_vendor',
          'label' => 'Clinic Admin',
          'rules' => '',
          'class' => '',
          'value' => '0',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        4 => 
        array (
          'type' => 'checkbox',
          'data' => 'module_settings',
          'name' => 'is_blog',
          'label' => 'Blog',
          'rules' => '',
          'class' => '',
          'value' => '0',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        5 => 
        array (
          'type' => 'checkbox',
          'data' => 'module_settings',
          'name' => 'is_encounter_problem',
          'label' => 'Problem',
          'rules' => '',
          'class' => '',
          'value' => '0',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        6 => 
        array (
          'type' => 'checkbox',
          'data' => 'module_settings',
          'name' => 'is_encounter_observation',
          'label' => 'Observation',
          'rules' => '',
          'class' => '',
          'value' => '0',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        7 => 
        array (
          'type' => 'checkbox',
          'data' => 'module_settings',
          'name' => 'is_encounter_note',
          'label' => 'Note',
          'rules' => '',
          'class' => '',
          'value' => '0',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        8 => 
        array (
          'type' => 'checkbox',
          'data' => 'module_settings',
          'name' => 'is_encounter_prescription',
          'label' => 'Prescription',
          'rules' => '',
          'class' => '',
          'value' => '0',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
      ),
    ),
    'social' => 
    array (
      'title' => 'Social Profiles',
      'desc' => 'Link of all the social profiles.',
      'icon' => 'fas fa-users',
      'elements' => 
      array (
        0 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'facebook_url',
          'label' => 'Facebook Page URL',
          'rules' => 'required|max:191',
          'class' => '',
          'value' => '#',
        ),
        1 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'twitter_url',
          'label' => 'Twitter Profile URL',
          'rules' => 'required|nullable|max:191',
          'class' => '',
          'value' => '#',
        ),
        2 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'instagram_url',
          'label' => 'Instagram Account URL',
          'rules' => 'required|nullable|max:191',
          'class' => '',
          'value' => '#',
        ),
        3 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'linkedin_url',
          'label' => 'LinkedIn URL',
          'rules' => 'required|nullable|max:191',
          'class' => '',
          'value' => '#',
        ),
        4 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'youtube_url',
          'label' => 'Youtube Channel URL',
          'rules' => 'required|nullable|max:191',
          'class' => '',
          'value' => '#',
        ),
      ),
    ),
    'misc' => 
    array (
      'title' => 'Misc ',
      'desc' => 'Application Data',
      'icon' => 'fas fa-globe-asia',
      'elements' => 
      array (
        0 => 
        array (
          'type' => 'text',
          'data' => 'misc',
          'name' => 'default_language',
          'label' => 'Language',
          'rules' => 'required',
          'class' => '',
          'value' => 'en',
          'datatype' => 'misc',
        ),
        1 => 
        array (
          'type' => 'text',
          'data' => 'misc',
          'name' => 'default_time_zone',
          'label' => 'Time Zone',
          'rules' => 'required',
          'class' => '',
          'value' => 'Asia/Kolkata',
          'datatype' => 'misc',
        ),
        2 => 
        array (
          'type' => 'text',
          'data' => 'misc',
          'name' => 'data_table_limit',
          'label' => 'Datatable Limit',
          'rules' => 'required',
          'class' => '',
          'value' => '10',
          'datatype' => 'misc',
        ),
        3 => 
        array (
          'type' => 'text',
          'data' => 'misc',
          'name' => 'date_formate',
          'label' => 'Date Formate',
          'rules' => 'required',
          'class' => '',
          'value' => '10',
          'datatype' => 'misc',
        ),
        4 => 
        array (
          'type' => 'text',
          'data' => 'misc',
          'name' => 'time_formate',
          'label' => 'Time Formate',
          'rules' => 'required',
          'class' => '',
          'value' => '10',
          'datatype' => 'misc',
        ),
        5 => 
        array (
          'type' => 'text',
          'data' => 'misc',
          'name' => 'booking_invoice_prifix',
          'label' => 'Booking Invoice Prefix',
          'rules' => 'required|min:2',
          'class' => '',
          'value' => 'Inv#',
        ),
        6 => 
        array (
          'type' => 'text',
          'data' => 'misc',
          'name' => 'is_enable_all',
          'label' => 'All',
          'rules' => '',
          'class' => '',
          'value' => '1',
        ),
        7 => 
        array (
          'type' => 'text',
          'data' => 'misc',
          'name' => 'clinic',
          'label' => 'Clinic',
          'rules' => '',
          'class' => '',
          'value' => '1',
        ),
      ),
    ),
    'analytics' => 
    array (
      'title' => 'Analytics',
      'desc' => 'Application Analytics',
      'icon' => 'fas fa-chart-line',
      'elements' => 
      array (
        0 => 
        array (
          'type' => 'text',
          'data' => 'text',
          'name' => 'google_analytics',
          'label' => 'Google Analytics (gtag)',
          'rules' => '',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
          'datatype' => 'misc',
        ),
      ),
    ),
    'integration' => 
    array (
      'title' => 'Integration',
      'desc' => 'Integration',
      'icon' => 'fas fa-chart-line',
      'elements' => 
      array (
        0 => 
        array (
          'type' => 'checkbox',
          'data' => 'integaration',
          'name' => 'is_google_login',
          'label' => 'integration',
          'rules' => '',
          'class' => '',
          'value' => '0',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        1 => 
        array (
          'type' => 'checkbox',
          'data' => 'integaration',
          'name' => 'isForceUpdate',
          'label' => 'integration',
          'rules' => '',
          'class' => '',
          'value' => '0',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        2 => 
        array (
          'type' => 'checkbox',
          'data' => 'integaration',
          'name' => 'is_facebook_login',
          'label' => 'integration',
          'rules' => '',
          'class' => '',
          'value' => '0',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        3 => 
        array (
          'type' => 'checkbox',
          'data' => 'integaration',
          'name' => 'is_webpush_notification',
          'label' => 'integration',
          'rules' => '',
          'class' => '',
          'value' => '0',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        4 => 
        array (
          'type' => 'checkbox',
          'data' => 'integaration',
          'name' => 'is_custom_webhook_notification',
          'label' => 'integration',
          'rules' => '',
          'class' => '',
          'value' => '0',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        5 => 
        array (
          'type' => 'checkbox',
          'data' => 'integaration',
          'name' => 'is_map_key',
          'label' => 'integration',
          'rules' => '',
          'class' => '',
          'value' => '0',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        6 => 
        array (
          'type' => 'checkbox',
          'data' => 'integaration',
          'name' => 'is_application_link',
          'label' => 'integration',
          'rules' => '',
          'class' => '',
          'value' => '0',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        7 => 
        array (
          'type' => 'text',
          'data' => 'is_google_login',
          'name' => 'google_secretkey',
          'label' => 'integration',
          'rules' => 'required|max:191',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        8 => 
        array (
          'type' => 'text',
          'data' => 'is_google_login',
          'name' => 'google_publickey',
          'label' => 'integration',
          'rules' => 'required|max:191',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        9 => 
        array (
          'type' => 'text',
          'data' => 'is_facebook_login',
          'name' => 'facebook_secretkey',
          'label' => 'integration',
          'rules' => 'required|max:191',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        10 => 
        array (
          'type' => 'text',
          'data' => 'is_facebook_login',
          'name' => 'facebook_publickey',
          'label' => 'integration',
          'rules' => 'required|max:191',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        11 => 
        array (
          'type' => 'text',
          'data' => 'is_map_key',
          'name' => 'google_maps_key',
          'label' => 'integration',
          'rules' => 'required|max:191',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        12 => 
        array (
          'type' => 'text',
          'data' => 'isForceUpdate',
          'name' => 'version_code',
          'label' => 'integration',
          'rules' => 'required|max:191',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        13 => 
        array (
          'type' => 'text',
          'data' => 'is_application_link',
          'name' => 'customer_app_play_store',
          'label' => 'integration',
          'rules' => 'required|max:191',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        14 => 
        array (
          'type' => 'text',
          'data' => 'is_application_link',
          'name' => 'customer_app_app_store',
          'label' => 'integration',
          'rules' => 'required|max:191',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        15 => 
        array (
          'type' => 'text',
          'data' => 'is_custom_webhook_notification',
          'name' => 'custom_webhook_content_key',
          'label' => 'integration',
          'rules' => 'required|max:191',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        16 => 
        array (
          'type' => 'text',
          'data' => 'is_custom_webhook_notification',
          'name' => 'custom_webhook_url',
          'label' => 'integration',
          'rules' => 'required|max:191',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
      ),
    ),
    'custom_css' => 
    array (
      'title' => 'Custom Code',
      'desc' => 'Custom code area',
      'icon' => 'fa-solid fa-file-code',
      'elements' => 
      array (
        0 => 
        array (
          'type' => 'textarea',
          'data' => 'string',
          'name' => 'custom_css_block',
          'label' => 'Custom Css Code',
          'rules' => '',
          'class' => '',
          'value' => '',
          'help' => '',
          'display' => 'raw',
        ),
        1 => 
        array (
          'type' => 'textarea',
          'data' => 'string',
          'name' => 'custom_js_block',
          'label' => 'Custom Js Code',
          'rules' => '',
          'class' => '',
          'value' => '',
          'help' => '',
          'display' => 'raw',
        ),
      ),
    ),
    'customization' => 
    array (
      'title' => 'Customization',
      'desc' => 'Setting on admin panel',
      'icon' => 'fa-solid fa-file-code',
      'elements' => 
      array (
        0 => 
        array (
          'type' => 'hidden',
          'data' => 'string',
          'name' => 'customization_json',
          'label' => 'Customization',
          'rules' => '',
          'class' => '',
          'value' => '{}',
          'help' => '',
          'display' => 'raw',
        ),
        1 => 
        array (
          'type' => 'hidden',
          'data' => 'string',
          'name' => 'root_colors',
          'label' => 'root_colors',
          'rules' => '',
          'class' => '',
          'value' => '{}',
          'help' => '',
          'display' => 'raw',
        ),
      ),
    ),
    'mobile' => 
    array (
      'title' => 'Mobile',
      'desc' => 'Application Mobile',
      'icon' => 'fas fa-chart-line',
      'elements' => 
      array (
        0 => 
        array (
          'type' => 'text',
          'data' => 'bussiness',
          'name' => 'primary',
          'label' => 'Primary',
          'rules' => '',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        1 => 
        array (
          'type' => 'text',
          'data' => 'bussiness',
          'name' => 'secondary',
          'label' => 'Secondary',
          'rules' => '',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
      ),
    ),
    'mail' => 
    array (
      'title' => 'Mail Setting',
      'desc' => 'Mail settings',
      'icon' => 'fas fa-envelope',
      'elements' => 
      array (
        0 => 
        array (
          'type' => 'email',
          'data' => 'mail_config',
          'name' => 'email',
          'label' => 'Email',
          'rules' => 'required|email',
          'class' => '',
          'value' => 'info@example.com',
        ),
        1 => 
        array (
          'type' => 'text',
          'data' => 'mail_config',
          'name' => 'mail_driver',
          'label' => 'Mail Driver',
          'rules' => 'required',
          'class' => '',
          'value' => 'smtp',
        ),
        2 => 
        array (
          'type' => 'text',
          'data' => 'mail_config',
          'name' => 'mail_host',
          'label' => 'Mail Host',
          'rules' => 'required',
          'class' => '',
          'value' => 'smtp.gmail.com',
        ),
        3 => 
        array (
          'type' => 'text',
          'data' => 'mail_config',
          'name' => 'mail_port',
          'label' => 'Mail Port',
          'rules' => 'required',
          'class' => '',
          'value' => '587',
        ),
        4 => 
        array (
          'type' => 'text',
          'data' => 'mail_config',
          'name' => 'mail_encryption',
          'label' => 'Mail Encryption',
          'rules' => 'required',
          'class' => '',
          'value' => 'tls',
        ),
        5 => 
        array (
          'type' => 'text',
          'data' => 'mail_config',
          'name' => 'mail_username',
          'label' => 'Mail Username',
          'rules' => 'required',
          'class' => '',
          'value' => 'youremail@gmail.com',
        ),
        6 => 
        array (
          'type' => 'text',
          'data' => 'mail_config',
          'name' => 'mail_password',
          'label' => 'Mail Password',
          'rules' => 'required',
          'class' => '',
          'value' => 'Password',
        ),
        7 => 
        array (
          'type' => 'text',
          'data' => 'mail_config',
          'name' => 'mail_from',
          'label' => 'Mail From',
          'rules' => 'required',
          'class' => '',
          'value' => 'youremail@gmail.com',
        ),
        8 => 
        array (
          'type' => 'text',
          'data' => 'mail_config',
          'name' => 'from_name',
          'label' => 'From Name',
          'rules' => 'required',
          'class' => '',
          'value' => 'Frezka',
        ),
      ),
    ),
    'payment' => 
    array (
      'title' => 'Payment',
      'desc' => 'Payment',
      'icon' => 'fas fa-chart-line',
      'elements' => 
      array (
        0 => 
        array (
          'type' => 'checkbox',
          'data' => 'razorpayPayment',
          'name' => 'razor_payment_method',
          'label' => 'Is Type',
          'rules' => '',
          'class' => '',
          'value' => '0',
        ),
        1 => 
        array (
          'type' => 'text',
          'data' => 'razor_payment_method',
          'name' => 'razorpay_secretkey',
          'label' => 'razorpayPayment',
          'rules' => 'required|max:191',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        2 => 
        array (
          'type' => 'text',
          'data' => 'razor_payment_method',
          'name' => 'razorpay_publickey',
          'label' => 'razorpayPayment',
          'rules' => 'required|max:191',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        3 => 
        array (
          'type' => 'checkbox',
          'data' => 'stripePayment',
          'name' => 'str_payment_method',
          'label' => 'Is Type',
          'rules' => '',
          'class' => '',
          'value' => '0',
        ),
        4 => 
        array (
          'type' => 'text',
          'data' => 'str_payment_method',
          'name' => 'stripe_secretkey',
          'label' => 'stripePayment',
          'rules' => 'required|max:191',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        5 => 
        array (
          'type' => 'text',
          'data' => 'str_payment_method',
          'name' => 'stripe_publickey',
          'label' => 'stripePayment',
          'rules' => 'required|max:191',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        6 => 
        array (
          'type' => 'checkbox',
          'data' => 'paystackPayment',
          'name' => 'paystack_payment_method',
          'label' => 'Is Type',
          'rules' => '',
          'class' => '',
          'value' => '0',
        ),
        7 => 
        array (
          'type' => 'text',
          'data' => 'paystack_payment_method',
          'name' => 'paystack_secretkey',
          'label' => 'paystackPayment',
          'rules' => 'required|max:191',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        8 => 
        array (
          'type' => 'text',
          'data' => 'paystack_payment_method',
          'name' => 'paystack_publickey',
          'label' => 'paystackPayment',
          'rules' => 'required|max:191',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        9 => 
        array (
          'type' => 'checkbox',
          'data' => 'paypalPayment',
          'name' => 'paypal_payment_method',
          'label' => 'Is Type',
          'rules' => '',
          'class' => '',
          'value' => '0',
        ),
        10 => 
        array (
          'type' => 'text',
          'data' => 'paypal_payment_method',
          'name' => 'paypal_secretkey',
          'label' => 'paypalPayment',
          'rules' => 'required|max:191',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        11 => 
        array (
          'type' => 'text',
          'data' => 'paypal_payment_method',
          'name' => 'paypal_clientid',
          'label' => 'paypalPayment',
          'rules' => 'required|max:191',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        12 => 
        array (
          'type' => 'checkbox',
          'data' => 'flutterwavePayment',
          'name' => 'flutterwave_payment_method',
          'label' => 'Is Type',
          'rules' => '',
          'class' => '',
          'value' => '0',
        ),
        13 => 
        array (
          'type' => 'text',
          'data' => 'flutterwave_payment_method',
          'name' => 'flutterwave_secretkey',
          'label' => 'flutterwavePayment',
          'rules' => 'required|max:191',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        14 => 
        array (
          'type' => 'text',
          'data' => 'flutterwave_payment_method',
          'name' => 'flutterwave_publickey',
          'label' => 'flutterwavePayment',
          'rules' => 'required|max:191',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
      ),
    ),
    'online_service' => 
    array (
      'title' => 'Online Service Setting',
      'desc' => 'Online Service Setting',
      'icon' => 'fas fa-chart-line',
      'elements' => 
      array (
        0 => 
        array (
          'type' => 'checkbox',
          'data' => 'googleMeet',
          'name' => 'google_meet_method',
          'label' => 'Is Type',
          'rules' => '',
          'class' => '',
          'value' => '0',
        ),
        1 => 
        array (
          'type' => 'text',
          'data' => 'google_meet_method',
          'name' => 'google_clientid',
          'label' => 'googleMeet',
          'rules' => 'required|max:191',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        2 => 
        array (
          'type' => 'text',
          'data' => 'google_meet_method',
          'name' => 'google_secret_key',
          'label' => 'googleMeet',
          'rules' => 'required|max:191',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        3 => 
        array (
          'type' => 'text',
          'data' => 'google_meet_method',
          'name' => 'google_appname',
          'label' => 'googleMeet',
          'rules' => 'required|max:191',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        4 => 
        array (
          'type' => 'text',
          'data' => 'google_meet_method',
          'name' => 'content',
          'label' => 'googleMeet',
          'rules' => '',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        5 => 
        array (
          'type' => 'text',
          'data' => 'google_meet_method',
          'name' => 'google_event',
          'label' => 'googleMeet',
          'rules' => '',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        6 => 
        array (
          'type' => 'checkbox',
          'data' => 'integaration',
          'name' => 'is_zoom',
          'label' => 'integration',
          'rules' => '',
          'class' => '',
          'value' => '0',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        7 => 
        array (
          'type' => 'text',
          'data' => 'is_zoom',
          'name' => 'account_id',
          'label' => 'integration',
          'rules' => 'required|max:191',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        8 => 
        array (
          'type' => 'text',
          'data' => 'is_zoom',
          'name' => 'client_id',
          'label' => 'integration',
          'rules' => 'required|max:191',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        9 => 
        array (
          'type' => 'text',
          'data' => 'is_zoom',
          'name' => 'client_secret',
          'label' => 'integration',
          'rules' => 'required|max:191',
          'class' => '',
          'value' => '',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
      ),
    ),
    'invoice_setting' => 
    array (
      'title' => 'Invoice Setting',
      'desc' => 'Order Related Setting.',
      'icon' => '',
      'elements' => 
      array (
        0 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'inv_prefix',
          'label' => 'lbl_order_prefix',
          'rules' => 'nullable|max:191',
          'class' => '',
          'value' => '# - ORDER',
        ),
        1 => 
        array (
          'type' => 'text',
          'data' => 'int',
          'name' => 'order_code_start',
          'label' => 'lbl_order_starts',
          'rules' => 'nullable|max:191',
          'class' => '',
          'value' => '10001',
        ),
        2 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'spacial_note',
          'label' => 'lbl_spacial_note',
          'rules' => 'nullable|max:191',
          'class' => '',
          'value' => 'Thank you for visiting our store and choosing to make a purchase with us.',
        ),
      ),
    ),
    'other_settings' => 
    array (
      'title' => 'Other Settings',
      'desc' => 'Other Settings',
      'icon' => 'fas fa-chart-line',
      'elements' => 
      array (
        0 => 
        array (
          'type' => 'checkbox',
          'data' => 'other_settings',
          'name' => 'is_event',
          'label' => 'Enable Events',
          'rules' => '',
          'class' => '',
          'value' => '0',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        1 => 
        array (
          'type' => 'checkbox',
          'data' => 'other_settings',
          'name' => 'is_blog',
          'label' => 'Enable Blogs',
          'rules' => '',
          'class' => '',
          'value' => '0',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        2 => 
        array (
          'type' => 'checkbox',
          'data' => 'other_settings',
          'name' => 'is_user_push_notification',
          'label' => 'Enable User Push Notification',
          'rules' => '',
          'class' => '',
          'value' => '0',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        3 => 
        array (
          'type' => 'checkbox',
          'data' => 'other_settings',
          'name' => 'is_provider_push_notification',
          'label' => 'Enable Provider Push Notification',
          'rules' => '',
          'class' => '',
          'value' => '0',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        4 => 
        array (
          'type' => 'checkbox',
          'data' => 'other_settings',
          'name' => 'enable_chat_gpt',
          'label' => 'Enable ChatGPT',
          'rules' => '',
          'class' => '',
          'value' => '0',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        5 => 
        array (
          'type' => 'checkbox',
          'data' => 'other_settings',
          'name' => 'test_without_key',
          'label' => 'Test Without Key',
          'rules' => '',
          'class' => '',
          'value' => '1',
          'help' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        6 => 
        array (
          'type' => 'text',
          'data' => 'other_settings',
          'name' => 'chatgpt_key',
          'label' => 'Key',
          'rules' => 'required|min:2',
          'class' => '',
          'value' => 'Paste the only the Measurement Id of Google Analytics stream.',
        ),
        7 => 
        array (
          'type' => 'text',
          'data' => 'other_settings',
          'name' => 'firebase_key',
          'label' => 'Firebase Key',
          'rules' => '',
          'class' => '',
          'value' => '',
        ),
      ),
    ),
    'bodychart_setting' => 
    array (
      'title' => 'Body Chart Setting',
      'desc' => 'Order Related Setting.',
      'icon' => '',
      'elements' => 
      array (
        0 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'theme_mode',
          'label' => 'lbl_theme_mode',
          'rules' => 'nullable|max:191',
          'class' => '',
          'value' => 'whiteTheme',
        ),
        1 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'Menubar_position',
          'label' => 'lbl_Menubar_position',
          'rules' => 'nullable|max:191',
          'class' => '',
          'value' => 'bottom',
        ),
        2 => 
        array (
          'type' => 'text',
          'data' => 'string',
          'name' => 'image_handling',
          'label' => 'lbl_image_handling',
          'rules' => 'nullable|max:191',
          'class' => '',
          'value' => '',
        ),
        3 => 
        array (
          'type' => 'array',
          'data' => 'array',
          'name' => 'menu_items',
          'label' => 'lbl_menu_items',
          'rules' => 'nullable|max:191',
          'class' => '',
          'value' => 'crop',
        ),
        4 => 
        array (
          'type' => 'file',
          'data' => 'string',
          'name' => 'body_image',
          'label' => 'body Image',
          'rules' => 'nullable|image|mimes:jpg,png,gif,ico',
          'class' => '',
          'value' => 'img/logo/mini_logo.png',
          'help' => '',
          'display' => 'raw',
          'datatype' => 'bussiness',
        ),
      ),
    ),
  ),
  'telescope' => 
  array (
    'enabled' => false,
    'domain' => NULL,
    'path' => 'telescope',
    'driver' => 'database',
    'storage' => 
    array (
      'database' => 
      array (
        'connection' => 'mysql',
        'chunk' => 1000,
      ),
    ),
    'queue' => 
    array (
      'connection' => NULL,
      'queue' => NULL,
    ),
    'middleware' => 
    array (
      0 => 'web',
      1 => 'Laravel\\Telescope\\Http\\Middleware\\Authorize',
    ),
    'only_paths' => 
    array (
    ),
    'ignore_paths' => 
    array (
      0 => 'nova-api*',
    ),
    'ignore_commands' => 
    array (
    ),
    'watchers' => 
    array (
      'Laravel\\Telescope\\Watchers\\BatchWatcher' => true,
      'Laravel\\Telescope\\Watchers\\CacheWatcher' => 
      array (
        'enabled' => true,
        'hidden' => 
        array (
        ),
      ),
      'Laravel\\Telescope\\Watchers\\ClientRequestWatcher' => true,
      'Laravel\\Telescope\\Watchers\\CommandWatcher' => 
      array (
        'enabled' => true,
        'ignore' => 
        array (
        ),
      ),
      'Laravel\\Telescope\\Watchers\\DumpWatcher' => 
      array (
        'enabled' => true,
        'always' => false,
      ),
      'Laravel\\Telescope\\Watchers\\EventWatcher' => 
      array (
        'enabled' => true,
        'ignore' => 
        array (
        ),
      ),
      'Laravel\\Telescope\\Watchers\\ExceptionWatcher' => true,
      'Laravel\\Telescope\\Watchers\\GateWatcher' => 
      array (
        'enabled' => true,
        'ignore_abilities' => 
        array (
        ),
        'ignore_packages' => true,
        'ignore_paths' => 
        array (
        ),
      ),
      'Laravel\\Telescope\\Watchers\\JobWatcher' => true,
      'Laravel\\Telescope\\Watchers\\LogWatcher' => 
      array (
        'enabled' => true,
        'level' => 'error',
      ),
      'Laravel\\Telescope\\Watchers\\MailWatcher' => true,
      'Laravel\\Telescope\\Watchers\\ModelWatcher' => 
      array (
        'enabled' => true,
        'events' => 
        array (
          0 => 'eloquent.*',
        ),
        'hydrations' => true,
      ),
      'Laravel\\Telescope\\Watchers\\NotificationWatcher' => true,
      'Laravel\\Telescope\\Watchers\\QueryWatcher' => 
      array (
        'enabled' => true,
        'ignore_packages' => true,
        'ignore_paths' => 
        array (
        ),
        'slow' => 100,
      ),
      'Laravel\\Telescope\\Watchers\\RedisWatcher' => true,
      'Laravel\\Telescope\\Watchers\\RequestWatcher' => 
      array (
        'enabled' => true,
        'size_limit' => 64,
        'ignore_http_methods' => 
        array (
        ),
        'ignore_status_codes' => 
        array (
        ),
      ),
      'Laravel\\Telescope\\Watchers\\ScheduleWatcher' => true,
      'Laravel\\Telescope\\Watchers\\ViewWatcher' => true,
    ),
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '/Users/jastis/Downloads/clinicapp-main/resources/views',
    ),
    'compiled' => '/Users/jastis/Downloads/clinicapp-main/storage/framework/views',
  ),
  'webhook-client' => 
  array (
    'configs' => 
    array (
      0 => 
      array (
        'name' => 'default',
        'signing_secret' => NULL,
        'signature_header_name' => 'Signature',
        'signature_validator' => 'Spatie\\WebhookClient\\SignatureValidator\\DefaultSignatureValidator',
        'webhook_profile' => 'Spatie\\WebhookClient\\WebhookProfile\\ProcessEverythingWebhookProfile',
        'webhook_response' => 'Spatie\\WebhookClient\\WebhookResponse\\DefaultRespondsTo',
        'webhook_model' => 'Spatie\\WebhookClient\\Models\\WebhookCall',
        'store_headers' => 
        array (
        ),
        'process_webhook_job' => '',
      ),
    ),
    'delete_after_days' => 30,
    'add_unique_token_to_route_name' => false,
  ),
  'webhook-server' => 
  array (
    'queue' => 'default',
    'connection' => NULL,
    'http_verb' => 'post',
    'proxy' => NULL,
    'signer' => 'Spatie\\WebhookServer\\Signer\\DefaultSigner',
    'signature_header_name' => 'Signature',
    'headers' => 
    array (
      'Content-Type' => 'application/json',
    ),
    'timeout_in_seconds' => 3,
    'tries' => 3,
    'backoff_strategy' => 'Spatie\\WebhookServer\\BackoffStrategy\\ExponentialBackoffStrategy',
    'webhook_job' => 'Spatie\\WebhookServer\\CallWebhookJob',
    'verify_ssl' => true,
    'throw_exception_on_failure' => false,
    'tags' => 
    array (
    ),
  ),
  'concurrency' => 
  array (
    'default' => 'process',
  ),
  'webpush' => 
  array (
    'vapid' => 
    array (
      'subject' => NULL,
      'public_key' => NULL,
      'private_key' => NULL,
      'pem_file' => NULL,
    ),
    'model' => 'NotificationChannels\\WebPush\\PushSubscription',
    'table_name' => 'push_subscriptions',
    'database_connection' => 'mysql',
    'client_options' => 
    array (
    ),
    'gcm' => 
    array (
      'key' => NULL,
      'sender_id' => NULL,
    ),
  ),
  'iseed::config' => 
  array (
    'path' => '/database/seeders',
    'chunk_size' => 500,
  ),
  'flare' => 
  array (
    'key' => NULL,
    'flare_middleware' => 
    array (
      0 => 'Spatie\\FlareClient\\FlareMiddleware\\RemoveRequestIp',
      1 => 'Spatie\\FlareClient\\FlareMiddleware\\AddGitInformation',
      2 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddNotifierName',
      3 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddEnvironmentInformation',
      4 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddExceptionInformation',
      5 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddDumps',
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddLogs' => 
      array (
        'maximum_number_of_collected_logs' => 200,
      ),
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddQueries' => 
      array (
        'maximum_number_of_collected_queries' => 200,
        'report_query_bindings' => true,
      ),
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddJobs' => 
      array (
        'max_chained_job_reporting_depth' => 5,
      ),
      6 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddContext',
      7 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddExceptionHandledStatus',
      'Spatie\\FlareClient\\FlareMiddleware\\CensorRequestBodyFields' => 
      array (
        'censor_fields' => 
        array (
          0 => 'password',
          1 => 'password_confirmation',
        ),
      ),
      'Spatie\\FlareClient\\FlareMiddleware\\CensorRequestHeaders' => 
      array (
        'headers' => 
        array (
          0 => 'API-KEY',
          1 => 'Authorization',
          2 => 'Cookie',
          3 => 'Set-Cookie',
          4 => 'X-CSRF-TOKEN',
          5 => 'X-XSRF-TOKEN',
        ),
      ),
    ),
    'send_logs_as_events' => true,
  ),
  'ignition' => 
  array (
    'editor' => 'phpstorm',
    'theme' => 'auto',
    'enable_share_button' => true,
    'register_commands' => false,
    'solution_providers' => 
    array (
      0 => 'Spatie\\Ignition\\Solutions\\SolutionProviders\\BadMethodCallSolutionProvider',
      1 => 'Spatie\\Ignition\\Solutions\\SolutionProviders\\MergeConflictSolutionProvider',
      2 => 'Spatie\\Ignition\\Solutions\\SolutionProviders\\UndefinedPropertySolutionProvider',
      3 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\IncorrectValetDbCredentialsSolutionProvider',
      4 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingAppKeySolutionProvider',
      5 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\DefaultDbNameSolutionProvider',
      6 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\TableNotFoundSolutionProvider',
      7 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingImportSolutionProvider',
      8 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\InvalidRouteActionSolutionProvider',
      9 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\ViewNotFoundSolutionProvider',
      10 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\RunningLaravelDuskInProductionProvider',
      11 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingColumnSolutionProvider',
      12 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\UnknownValidationSolutionProvider',
      13 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingMixManifestSolutionProvider',
      14 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingViteManifestSolutionProvider',
      15 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingLivewireComponentSolutionProvider',
      16 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\UndefinedViewVariableSolutionProvider',
      17 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\GenericLaravelExceptionSolutionProvider',
      18 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\OpenAiSolutionProvider',
      19 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\SailNetworkSolutionProvider',
      20 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\UnknownMysql8CollationSolutionProvider',
      21 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\UnknownMariadbCollationSolutionProvider',
    ),
    'ignored_solution_providers' => 
    array (
    ),
    'enable_runnable_solutions' => NULL,
    'remote_sites_path' => '/Users/jastis/Downloads/clinicapp-main',
    'local_sites_path' => '',
    'housekeeping_endpoint_prefix' => '_ignition',
    'settings_file_path' => '',
    'recorders' => 
    array (
      0 => 'Spatie\\LaravelIgnition\\Recorders\\DumpRecorder\\DumpRecorder',
      1 => 'Spatie\\LaravelIgnition\\Recorders\\JobRecorder\\JobRecorder',
      2 => 'Spatie\\LaravelIgnition\\Recorders\\LogRecorder\\LogRecorder',
      3 => 'Spatie\\LaravelIgnition\\Recorders\\QueryRecorder\\QueryRecorder',
    ),
    'open_ai_key' => NULL,
    'with_stack_frame_arguments' => true,
    'argument_reducers' => 
    array (
      0 => 'Spatie\\Backtrace\\Arguments\\Reducers\\BaseTypeArgumentReducer',
      1 => 'Spatie\\Backtrace\\Arguments\\Reducers\\ArrayArgumentReducer',
      2 => 'Spatie\\Backtrace\\Arguments\\Reducers\\StdClassArgumentReducer',
      3 => 'Spatie\\Backtrace\\Arguments\\Reducers\\EnumArgumentReducer',
      4 => 'Spatie\\Backtrace\\Arguments\\Reducers\\ClosureArgumentReducer',
      5 => 'Spatie\\Backtrace\\Arguments\\Reducers\\DateTimeArgumentReducer',
      6 => 'Spatie\\Backtrace\\Arguments\\Reducers\\DateTimeZoneArgumentReducer',
      7 => 'Spatie\\Backtrace\\Arguments\\Reducers\\SymphonyRequestArgumentReducer',
      8 => 'Spatie\\LaravelIgnition\\ArgumentReducers\\ModelArgumentReducer',
      9 => 'Spatie\\LaravelIgnition\\ArgumentReducers\\CollectionArgumentReducer',
      10 => 'Spatie\\Backtrace\\Arguments\\Reducers\\StringableArgumentReducer',
    ),
  ),
  'onesignal' => 
  array (
    'app_id' => NULL,
    'rest_api_key' => NULL,
    'user_auth_key' => NULL,
    'guzzle_client_timeout' => 0,
  ),
  'appointment' => 
  array (
    'STATUS' => 
    array (
      'pending' => 
      array (
        'title' => 'Pending',
      ),
      'confirmed' => 
      array (
        'title' => 'Confirmed',
      ),
      'check_in' => 
      array (
        'title' => 'Check In',
      ),
      'checkout' => 
      array (
        'title' => 'CheckOut',
      ),
      'cancelled' => 
      array (
        'title' => 'Cancelled',
      ),
    ),
    'PAYMENT_STATUS' => 
    array (
      0 => 
      array (
        'title' => 'Pending',
      ),
      1 => 
      array (
        'title' => 'Paid',
      ),
    ),
    'DEFAULT_STATUS' => 'pending',
  ),
  'clinic' => 
  array (
    'name' => 'Clinic',
  ),
  'commission' => 
  array (
    'name' => 'Commission',
  ),
  'currency' => 
  array (
    'name' => 'Currency',
  ),
  'customfield' => 
  array (
    'name' => 'CustomField',
  ),
  'customer' => 
  array (
    'name' => 'Customer',
  ),
  'earning' => 
  array (
    'name' => 'Earning',
  ),
  'language' => 
  array (
    'name' => 'Language',
  ),
  'location' => 
  array (
    'name' => 'Location',
    'ARRAY_MENU' => 
    array (
    ),
  ),
  'logistic' => 
  array (
    'ARRAY_MENU' => 
    array (
      0 => 
      array (
        'start_icon' => 'fa-solid fa-truck-field',
        'title' => 'sidebar.supply',
        'menu_item_type' => 'parent',
        'route' => 'backend.products.index',
        'permission' => 
        array (
        ),
        'order' => 7,
        'children' => 
        array (
          0 => 
          array (
            'title' => 'sidebar.logistics',
            'route' => 'backend.logistics.index',
            'active' => 'app/logistics',
            'order' => 0,
          ),
          1 => 
          array (
            'title' => 'sidebar.logistic_zone',
            'route' => 'backend.logistic-zones.index',
            'active' => 'app/logistic-zones',
            'order' => 1,
          ),
        ),
      ),
    ),
  ),
  'multivendor' => 
  array (
    'name' => 'MultiVendor',
  ),
  'notificationtemplate' => 
  array (
    'name' => 'NotificationTemplate',
    'channels' => 
    array (
      'IS_MAIL' => 'Mail',
      'PUSH_NOTIFICATION' => 'Mobile',
      'IS_CUSTOM_WEBHOOK' => 'Custom Webhook',
    ),
  ),
  'page' => 
  array (
    'name' => 'Page',
  ),
  'product' => 
  array (
    'name' => 'Product',
    'ARRAY_MENU' => 
    array (
      0 => 
      array (
        'title' => 'sidebar.shop',
        'menu_item_type' => 'static',
        'order' => 7,
      ),
      1 => 
      array (
        'start_icon' => 'fa-solid fa-store',
        'title' => 'sidebar.product',
        'menu_item_type' => 'parent',
        'route' => 'backend.products.index',
        'permission' => 
        array (
        ),
        'order' => 7,
        'children' => 
        array (
          0 => 
          array (
            'title' => 'sidebar.all_product',
            'route' => 'backend.products.index',
            'active' => 'app/products',
            'order' => 0,
          ),
          1 => 
          array (
            'title' => 'sidebar.brand',
            'route' => 'backend.brands.index',
            'active' => 'app/brands',
            'order' => 1,
          ),
          2 => 
          array (
            'title' => 'sidebar.categories',
            'route' => 'backend.products-categories.index',
            'active' => 'app/products-categories',
            'order' => 2,
          ),
          3 => 
          array (
            'title' => 'sidebar.sub_categories',
            'route' => 'backend.products-categories.index_nested',
            'active' => 'app/products-sub-categories',
            'order' => 3,
          ),
          4 => 
          array (
            'title' => 'sidebar.units',
            'route' => 'backend.units.index',
            'active' => 'app/units',
            'order' => 4,
          ),
          5 => 
          array (
            'title' => 'sidebar.tag',
            'route' => 'backend.tags.index',
            'active' => 'app/tags',
            'order' => 5,
          ),
        ),
      ),
      2 => 
      array (
        'start_icon' => 'fa-solid fa-swatchbook',
        'title' => 'sidebar.variations',
        'route' => 'backend.variations.index',
        'active' => 'app/variations',
        'order' => 7,
      ),
      3 => 
      array (
        'start_icon' => 'fa-solid fa-bag-shopping',
        'title' => 'sidebar.orders',
        'route' => 'backend.orders.index',
        'active' => 'app/orders',
        'order' => 7,
      ),
    ),
    'H_ARRAY_MENU' => 
    array (
      0 => 
      array (
        'menu_type' => 'horizontal',
        'title' => 'sidebar.shop',
        'menu_item_type' => 'parent',
        'permission' => 
        array (
        ),
        'order' => 2,
        'children' => 
        array (
          0 => 
          array (
            'start_icon' => 'fa-solid fa-store',
            'title' => 'sidebar.product',
            'menu_item_type' => 'parent',
            'route' => 'backend.products.index',
            'permission' => 
            array (
              0 => 'view_product',
            ),
            'order' => 7,
            'children' => 
            array (
              0 => 
              array (
                'menu_type' => 'horizontal',
                'title' => 'sidebar.list',
                'route' => 'backend.products.index',
                'permission' => 
                array (
                  0 => 'view_product',
                ),
                'active' => 'app/products',
                'order' => 0,
              ),
              1 => 
              array (
                'menu_type' => 'horizontal',
                'title' => 'sidebar.brand',
                'route' => 'backend.brands.index',
                'active' => 'app/brands',
                'order' => 1,
              ),
              2 => 
              array (
                'menu_type' => 'horizontal',
                'title' => 'sidebar.categories',
                'route' => 'backend.products-categories.index',
                'active' => 'app/products-categories',
                'order' => 1,
              ),
              3 => 
              array (
                'menu_type' => 'horizontal',
                'title' => 'sidebar.sub_categories',
                'route' => 'backend.products-categories.index_nested',
                'active' => 'app/products-sub-categories',
                'order' => 2,
              ),
              4 => 
              array (
                'menu_type' => 'horizontal',
                'title' => 'sidebar.units',
                'route' => 'backend.units.index',
                'active' => 'app/units',
                'order' => 3,
              ),
              5 => 
              array (
                'menu_type' => 'horizontal',
                'title' => 'sidebar.tag',
                'route' => 'backend.tags.index',
                'active' => 'app/tags',
                'order' => 4,
              ),
            ),
          ),
          1 => 
          array (
            'menu_type' => 'horizontal',
            'start_icon' => 'fa-solid fa-swatchbook',
            'title' => 'sidebar.variations',
            'route' => 'backend.variations.index',
            'permission' => 
            array (
              0 => 'view_product_variations',
            ),
            'active' => 'app/variations',
            'order' => 7,
          ),
          2 => 
          array (
            'menu_type' => 'horizontal',
            'start_icon' => 'fa-solid fa-bag-shopping',
            'title' => 'sidebar.orders',
            'route' => 'backend.orders.index',
            'permission' => 
            array (
              0 => 'view_product_orders',
            ),
            'active' => 'app/orders',
            'order' => 7,
          ),
          3 => 
          array (
            'menu_type' => 'horizontal',
            'start_icon' => 'fa-solid fa-truck-field',
            'title' => 'sidebar.supply',
            'menu_item_type' => 'parent',
            'route' => 'backend.products.index',
            'permission' => 
            array (
            ),
            'order' => 7,
            'children' => 
            array (
              0 => 
              array (
                'title' => 'sidebar.logistics',
                'route' => 'backend.logistics.index',
                'active' => 'app/logistics',
                'order' => 0,
              ),
              1 => 
              array (
                'title' => 'sidebar.logistic_zones',
                'route' => 'backend.logistic-zones.index',
                'active' => 'app/logistic-zones',
                'order' => 1,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'promotion' => 
  array (
    'name' => 'Promotion',
  ),
  'quickbooking' => 
  array (
    'name' => 'QuickBooking',
  ),
  'requestservice' => 
  array (
    'name' => 'RequestService',
  ),
  'service' => 
  array (
    'name' => 'Service',
  ),
  'slider' => 
  array (
    'name' => 'Slider',
  ),
  'subscriptions' => 
  array (
    'name' => 'Subscriptions',
  ),
  'tag' => 
  array (
    'ARRAY_MENU' => 
    array (
    ),
  ),
  'tax' => 
  array (
    'name' => 'Tax',
  ),
  'tip' => 
  array (
    'name' => 'Tip',
  ),
  'vital' => 
  array (
    'name' => 'Vital',
  ),
  'world' => 
  array (
    'ARRAY_MENU' => 
    array (
      0 => 
      array (
        'start_icon' => 'fa-solid fa-globe',
        'title' => 'sidebar.location',
        'menu_item_type' => 'parent',
        'permission' => 
        array (
        ),
        'order' => 20,
        'children' => 
        array (
          0 => 
          array (
            'title' => 'sidebar.city',
            'route' => 'backend.city.index',
            'active' => 'app/city',
            'order' => 1,
          ),
          1 => 
          array (
            'title' => 'sidebar.state',
            'route' => 'backend.state.index',
            'active' => 'app/state',
            'order' => 2,
          ),
          2 => 
          array (
            'title' => 'sidebar.country',
            'route' => 'backend.country.index',
            'active' => 'app/country',
            'order' => 3,
          ),
        ),
      ),
    ),
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
