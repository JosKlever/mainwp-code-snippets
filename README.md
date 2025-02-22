# mainwp-code-snippets
MainWP Code Snippets

## Disclaimer
I'm not a professional developer, so the code I write and post here can be from lower quality and might be insecure.
Just use it for inspiration and improve it if you can. Of course you can always give me feedback for improvements.

## Usage:
I've written these code snippets to use with the MainWP Code Snippets Extension.
You can find more information about that on https://mainwp.com/extension/code-snippets/

## Snippets description

- **show-ghost-updates**: If WordPress shows an available update but you can't find it on the Updates screen, it might be hidden. This script helps you find it.
- **options-autloaded-size**: Check the total size of autoloaded options on a site and if it's more than a set value also show the 10 largest keys.
- **remove-autoloaded-dirsize-transient**: On older versions of WordPress (<6.7) the Site Health information for Directories and Sizes was stored in an autoloaded transient. This script deletes that transient. The next time it's calculated it will be stored with autoload = off
