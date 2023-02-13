# Breg
Simple package to access the Brreg API to get company information. This package is not hosted on packagist.org.

Token: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
  
  
## How to use
Class expects STRING, dont care about space's.  
Returns "false" if it cant find a company.
  
#### Include it at the top of the file
```
use Smbpartner\Breg;
```

#### Exapmle 1
```
$result = Breg::enheter('998 043 301');
dd($result);
```
#### Exapmle 2
```
$result = Breg::roller('SMB Partner AS');
dd($result);
```


## Install
1. Add repository bellow "Keywords" in the root composer.json. 
2. Use composer to get the package (code bellow).
  
#### Get it from this git
```
 "repositories": [
     {
         "type": "vcs",
         "url":  "git@github.com:Vidarpettersen/Breg.git"
     }
 ],
```
You need a token for this to work!

#### Get package by running
```
composer require smbpartner/breg
```
This will add the repo to the require list in composer.json, and you will get the main branch.

  
#### Or you can host it in a project  
Use the repository path as the URL, here we are using the folder RootFolder/packages/smbpartner/breg 
Download the zip from release page and extract it into the smbpartner folder.  
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

#### Add line to the require-dev in composer.json
You can spesify the branch you want, but in this case only main exists.
```
"smbpartner/breg": "dev-main"
```

