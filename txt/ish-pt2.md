
## Step 1: Install git & openssh
Git does not come pre-installed on iSH, but the package can be easily installed with the command `apk add git && apk add openssh`

## Step 2: Generate keys 
In order to authenticate with GitHub, we will need to generate a key and place it in our account. To generate a key, enter the command `ssh-keygen -t ed25519`

## Step 3: Upload key to account
- Once the key is created, use the cat command command followed by the location of the public key. If you used the default settings like I did, you can use the command `cat ~/.ssh/id_ed25519.pub` and then copy the resulting key
- Sign into GitHub and click on your account, then go to SSH and GPG keys, then click on new SSH key
- enter a name for the key, then in the key field paste the key from iSH. When complete, a new key will appear displaying its name and hash. The hash can be verified by comparing to the hash displayed in iSH when the key was created

## Step 4: Test key 
We can test if everything is working properly by connecting to GitHub via ssh. In iSH, enter the command `ssh -T git@github.com` and enter yes if prompted. If the connection is successful, it should display a message like “Hi USERNAME! You've successfully authenticated”


## Step 5: create a GitHub repo
Now that we have access to GitHub in iSH, we can create and push repositories. To create a repository from scratch, we can create a new folder, add some files, and then initialize git. 
```
#create folder 
mkdir testRepo
cd testRepo

#create some files
echo “This is a text file” >> textfile.txt
echo “This is anothertext file” >> newfile.txt

#initialize git 
git init -b main

#add files to commit
git add .

#create commit message 
git commit -m “new repo”

```
Now we need a GitHub url to push to. The simplest way is to use the API in the shortcuts app, HERE IS A TUTORIAL. You can also just go to the website and create a new empty repository and copy the url. 


```

#add repo url 
git remote add origin git@github.com:MysteriBros/testRepo

#verify url 
git remote -v

#push changes 
git push origin main
```

And then