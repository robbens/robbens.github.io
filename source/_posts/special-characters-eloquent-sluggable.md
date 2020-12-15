---
extends: _layouts.post
section: content
title: ÅÄÖ characters in Eloquent Sluggable
date: 2019-08-23
description: Generate correct slugs with special characters
featured: true
---

In Sweden, we have three letters that might look weird to you: Å, Ä and Ö, so this post is mainly for Swedes.

Usually, you don't want to use these characters in, for example, slugs. Therefore most slug generators will translate Å to A, Ä to A and Ö to O.

I use the package [eloquent-sluggable](https://github.com/cviebrock/eloquent-sluggable) in my Laravel projects, which I love! However, this package does not generate slugs using the method above. Ö translates to OE, which is wrong. 

## 1. Publish config
```bash
php artisan vendor:publish --provider="Cviebrock\EloquentSluggable\ServiceProvider"
```

## 2. Set slug helper as method
You'll find `sluggable.php` in your config directory.  
```
[
    ...
    'method' => function($string) {
        return Str::slug($string);
    },
    ...
]
```
