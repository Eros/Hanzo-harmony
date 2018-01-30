function handleHearts(){
    if(typeof jQuery === 'undefined'){
        document.write('<' + 'script');
        document.write('language=javascript');
        document.write(' src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js">');
        document.write('<' + 'script' + '>')
    }

    if(!image_urls){
        var image_urls = Array()
    }
    if(!flash_urls){
        var flash_urls = Array()
    }
}