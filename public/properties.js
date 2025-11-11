$(function(){
    /*document.onkeydown = function(e){
        if((e.ctrlKey && 
            (e.keyCode === 85 ||
            e.keyCode === 117)) || 
            e.keyCode === 123 ||
            (e.ctrlKey && e.shiftKey && e.keyCode == 73)){
            console.log('not allowed');
            return false;
        }else{
            return true;
        }
    }
    document.addEventListener("contextmenu", function(e){
        e.preventDefault();
    }, false);*/
});

/**
 * Display notifycation
 * @param {*} icon 
 * @param {*} msg 
 */
function show_message(icon, msg){
    $.toast({
        heading: 'Thông báo',
        text: msg,
        showHideTransition: 'fade',
        icon: icon,
        position: 'top-right'
    })
}

/**
 * 
 * @param {*} evt 
 */
function validate(evt) {
    var theEvent = evt || window.event;
    // Handle paste
    if (theEvent.type === 'paste') {
        key = event.clipboardData.getData('text/plain');
    } else {
        // Handle key press
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
    }
    var regex = /[0-9]|\./;
    if (!regex.test(key)) {
        theEvent.returnValue = false;
        if (theEvent.preventDefault) theEvent.preventDefault();
    }
}