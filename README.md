# RSClues
A website based clue solver for old school runescape, see it live at http://www.rsclues.com  
The original idea was to build a clue solver back when clients didnt have this built in, but now its less useful, but I maintain it and update it occasional as a personal pet project

## Contributing to the project
Clone the repo, ensure you gatsby client setup (`npm install -g gatsby`)  
Run `npm i` in the project root  
Run `npm run develop` the site will then be hosted locally at localhost:8000
Run `npm run build` to set up a production build, ideally this wouldn't bein the repo but im commiting it so i can have dumb servers that don't need to build the project and can just git pull

## About
Built on gatsby and react  
Data scarped from osrs wikia with permissions  
You can see the old php import in the /legacy folder, which contains the old build of the site in php