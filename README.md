# intershiptask

## Auto Loading
This is a function that allow us to include all the class we created at a single function and help us to call whenever its needed. By using this we can just call the file which has the autoload function to the file which need any class

example:-

if we have a cls named cls1 ins src/cls file we needed it to run on index file so the direct method is

in the index file we should add require function and add the path of the cls file if the prj has lets say 1000 cls we can add every cls inside by manually so here we can use autoload to add the cls automatically
