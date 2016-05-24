# wrap-statsd


## Installation

`composer.json`
```
...
"repositories":[
    {
        "type": "vcs",
        "url": "https://github.com/arjayads/wrap-statsd.git"
    }
],
"require": {
    ...
    "plus-telecom/statsd": "dev-master",
    ...
},
...
```


## Usage

```

use Plustelecom\Statsd\Statsd;

...

Statsd::client()->increment("welcome");


```


Ref: http://domnikl.github.io/statsd-php/
