#!/bin/bash
PAST=$(pwd)
cd ~
curl https://nodejs.org/dist/v18.9.0/node-v18.9.0-linux-x64.tar.gz | tar xz
mv node-v18.9.0-linux-x64/ nodejs
mkdir ~/bin
cp nodejs/bin/node ~/bin
cd ~/bin
rm npm
ln -s ../nodejs/lib/node_modules/npm/bin/npm-cli.js npm
cd ..
source ~/.nvm/nvm.sh
nvm install 18.9.0
source ~/.nvm/nvm.sh
nvm use --delete-prefix v10.24.1
cd $PAST
npm run prod
