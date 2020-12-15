---
extends: _layouts.post
section: content
title: Cloudflare actually slows your website down
date: 2019-01-06
categories: [internet]
---

So I've almost always used Cloudflare for my personal websites. Recently I started asking my self why? Is it better than just a DNS?

I don't need the security, DDOS protection, caching, auto minify or Rocket Loader. And I don't care that you can see my servers IP address.

## Time to speed test
Pingdom Tools and Gtmetrix are probably the best free speed test services out there.

Not sure why Pingdom's screenshot is not working. Nevertheless – I was chocked by the speed difference.

### With Cloudflare
![Pingdom Tools speed test with Cloudflare](/assets/images/cloudflare-speed/pingdom-with-cloudflare.png)
![GTmetrix speed test with Cloudflare](/assets/images/cloudflare-speed/gtmetrix-with-cloudflare.png)

### Without Cloudflare
![Pingdom Tools speed test without Cloudflare](/assets/images/cloudflare-speed/pingdom-without-cloudflare.png)
**31.7% faster**  

![GTmetrix speed test without Cloudflare](/assets/images/cloudflare-speed/gtmetrix-without-cloudflare.png)
**47.6% faster!**  

## Conclusion
You probably don't need Cloudflare. Just use a solid DNS provider along with a CDN and you'll be golden. 

This site is served with static HTML files. With a more complex and dynamic website you might get different results. Better or worse? Do you know? [Send me an email!](mailto:hej@robin.se)  