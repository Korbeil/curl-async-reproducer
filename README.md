# Curl Async Reproducer

- Install composer: https://getcomposer.org/download/
- Run `composer install`
- Run script `time DD_TRACE_CLI_ENABLED=true php index.php [count:500]`

Argument is optional and by default we run 500 async requests which is way enough, but you can put less or more if needed.
