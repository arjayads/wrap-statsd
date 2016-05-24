# wrap-statsd


## Installation

`composer.json`
```
...
"repositories":[
    {
        "type": "vcs",
        "url": "https://github.com/Plus-Telecom/wrap-statsd.git"
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