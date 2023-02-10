# Breg
Add under "Keywords" 
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
  
Add line to require
```
"smbpartner/breg": "@dev"
```
