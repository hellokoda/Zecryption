# Zashing
A string hashing method that becomes completely irreversible, no one, not even your grandpa that fought in World War II can get the string back to its original shape.
<br>
<b>Before you make fun of me, I made this library when I had no idea what the difference between encryption and hashing, I do now because I dove deeper into cybersecurity. <3 </b>

# Installation
Send a Git request to `https://github.com/kodaLee/Zecryption.git`
Make sure you are at a root folder or a folder you can reach, do not put it into a random place and expect it to work like magic.

# Import it
Firstly, you need to have it placed in your code. If the PHP script you are making is in the same area as the Zecryption folder, follow the below
`include "Zecryption/EncryptCall.php";`
Otherwise, you need to find where it is located and place it like so.
`include "/your/path/to/Zecryption/EncryptCall.php";`
But, if none of these work, you can make an issue report or just use an external source.
If you make an issue report, please follow the format.
If you use the external API, make sure you decode the JSON to an Array, it is defined as "encrypted_str"
**Though with the external API, you will not get a spice added to your encryption! This makes it less secure.**
`file_get_contents("https://api.imkoda.xyz/?a=zecrypt&str=" . $string);`

# How to use it
*this will not work with the external api*
`zEcryptString($string, $spice);`
$string is the string you want to have encrypted. (you can use any strings)
$spice is like salt but is also an access key to encrypting something and having it land the same, it is like a private key but only gives access to the same **en**cryption. (you can use any strings or do not use it by defining null)

# List of DOs (recommended, max security)
- Feel free to tweak the code to how your system works if you know what you are doing
- Use a spice, it will make it make database leaks basically useless for passwords. It makes the string different, hackers will have to know the spice string to successfully crack a password using that hash.
- Use a database, do not store stuff in a folder unless you are using SQLite (even then it is risky)

# List of DO NOTs (recommended, max security)
- Do not give out your spice, even though the hash is uncrackable, it gives a possibility for bruteforcing since this is open source.
- Do not trust people who want to check your websites security, once they get access, they can nab your spice, or logins.
- Do not leave a spice key out in the open, read "Hide my spice" below.
- Only share a spice key with your administration or other users that are ACTIVELY working on your website.
- Do not lose your spice key, once it is gone, you will lose the ability to verify strings.

# Hide my spice
###### If you are using apache
Put your spice either in the website under the Zecryption folder.
After that, make another file named .htaccess in that Zecryption folder
Put the text `deny from all` in your folder.
###### If you are using nginx
Locate your nginx configuration folder and add the following.
`location /Zecryption {
        deny all;
        return 403;
}`
