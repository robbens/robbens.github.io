---
extends: _layouts.post
section: content
title: Pretty PHP dumps using highlight_string()
date: 2018-08-20
description: This is a nice little trick if you’re sick of the almost impossible to read var_dump.
categories: [php, snippets]
featured: true
---

This is a nice little trick if you’re sick of the almost impossible to read var_dump.

```php
function dump($data) {
    highlight_string("<?php\n" . var_export($data, true) . "\n");
}
```

```php
<?php dump(['foo' => 'bar', 'baz' => 'foobar', 'status' => true]); ?>
```

And it should come out something like this. Nice, eh?

![Highlighted PHP code](/assets/images/php-highlighted.png)
