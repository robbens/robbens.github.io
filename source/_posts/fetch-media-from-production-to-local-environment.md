---
extends: _layouts.post
section: content
title: Fetch media from production to local environment
date: 2018-08-03
url: https://medium.com/@connor_78150/hey-devron-baldwin-4a145add21f2
---

Why download images and other heavy resources to your local computer, when you have them available to the public? This does not only save space on your local hard drive. It saves a lot of time syncing resources from production to your local environment.

This snippet first checks if the resource is present in your local space. Its not? 
Then fetch it from the specified production URL. So awesome!

I'm pretty sure this will work for setups that's not using Valet, but I have not tested it outside of Valet.

Your Nginx config file is found in `.config/valet/Nginx/yourdomain.test` or the old path `.valet/Nginx/yourdomain.test`.

This file will not be present without running `valet secure` in your site root. Go ahead and run that if you can't see your domain. If you, like me, don't want to use SSL – just remove the SSL parts from the config and replace port 443 with port 80.  

```nginx
location ~* .(png|jpe?g|gif|ico|svg)$ {
    expires 24h;
    log_not_found off;
    root '/Users/robin/Sites/robin/public/';

    if (-f $request_filename) {
        break;
    }

    try_files $uri $uri/ @production;
}

location @production {
    resolver 8.8.8.8;
    proxy_pass https://robin.se/$uri;
}
```

Don't want to mess with the web server config? Running WordPress? This plugin will do the trick! 
https://wordpress.org/plugins/uploads-by-proxy/

## Bonus
This works with basically all Nginx configurations, not only Valet – which means you can use it on your Laravel Forge staging server or any other Nginx based web server 🤟