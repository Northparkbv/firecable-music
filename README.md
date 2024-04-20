# firecable-music
A crap PHP music database browser. warning: this is probably very insecure. only use on LAN unless you have some sort of external password to access your servers with security.
You should definitely not pirate music using this!! definitely not.

Features:
seperate music index file
1998 style web design (yeah!)
add your own album pages by copying the all the files into a new folder, then adding a link to the index.php inside the new folder.
fully customizable!
works without CSS!
pretty easy to use.

How to use:
edit the data.csv file like so:
First cell: Artist, second cell: Track name, Third cell: Album (if not applicable, just put a dash), Fourth cell: anchor tag with Download link and Preview link
e.g. 
Rick Astley,Together Forever,Whenever You Need Somebody,&lt;a href="music/togetherforever.mp3" download&gt;Download&lt;/a&gt; / &lt;a href="music/togetherforever.mp3"&gt;Preview&lt;/a&gt;
