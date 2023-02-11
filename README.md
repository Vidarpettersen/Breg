# Breg

## How to use
Add it at the top
```
use Smbpartner\Breg;
```
#### Exapmle
```
$result = Breg::enheter('123456789');
dd($result)
```
#### Exapmle 2
```
$result = Breg::roller('123456789');
dd($result)
```


## Install
1. Add repository under "Keywords" in the root composer.json. 
2. Use composer to get the package, code bellow.
  
#### Get it from this git
```
 "repositories": [
     {
         "type": "vcs",
         "url":  "git@github.com:Vidarpettersen/Breg.git"
     }
 ],
```
#### Get package by running
```
composer require smbpartner/breg
```
This will not add the repo to the require list in composer.json


#### Or you can host it in a project  
Use URL for the repository, here we are using the folder LaravelApp/packages/smbpartner/breg 
```
   "repositories":{
        "breg":{
            "type": "path",
            "url": "packages/smbpartner/breg",
            "options": {
                "symlink": true
            }
        }
    },
```

#### Add line to require
```
"smbpartner/breg": "dev-main"
```
