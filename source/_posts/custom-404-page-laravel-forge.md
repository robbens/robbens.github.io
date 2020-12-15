---
extends: _layouts.post
section: content
title: Custom 404 page for Jigsaw in Laravel Forge
date: 2019-01-06
featured: true
---

This site is built with Tightens Jigsaw and runs on Laravel Forge. The 404 page did not work out of the box. 

[Tighten tells you](https://jigsaw.tighten.co/docs/custom-404-page/) to add `error_page 404 /404;` to the Nginx config. That is true. But it does not work in Forge.   
The solution is to add one more line. `fastcgi_intercept_errors on;`

```nginx
# FORGE CONFIG (DO NOT REMOVE!)
include forge-conf/robin.se/server/*;

fastcgi_intercept_errors on;

location / {
    try_files $uri $uri/ /index.php?$query_string;
}

location = /favicon.ico { access_log off; log_not_found off; }
location = /robots.txt  { access_log off; log_not_found off; }

access_log off;
error_log  /var/log/nginx/robin.se-error.log error;

error_page 404 /404;

location ~ \.php$ {
    fastcgi_split_path_info ^(.+\.php)(/.+)$;
    fastcgi_pass unix:/var/run/php/php7.2-fpm.sock;
    fastcgi_index index.php;
    include fastcgi_params;
}
```

Don't forget to restart Nginx!