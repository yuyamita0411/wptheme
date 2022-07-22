window.addEventListener('DOMContentLoaded', () => {
    ['load', 'resize'].forEach((ev) => {
        window.addEventListener(ev, () => {
            if(document.getElementById('gnavinner') && document.getElementById('footer') && document.getElementById('site-content')){
                var gnavheight = document.getElementById('gnavinner').offsetHeight,
                gnavspheight = document.getElementById('gnavbutton').offsetHeight,
                footerheight = document.getElementById('footer').offsetHeight,
                mainobj = document.getElementById('site-content');
    
                if(768 < window.innerWidth){
                    mainobj.setAttribute(
                        'style',
                        `
                        min-height:calc(100vh - ${gnavheight + footerheight}px);
                        margin-top:calc(${gnavheight}px);
                        `
                    );
                }else{
                    mainobj.setAttribute(
                        'style',
                        `
                        min-height:calc(100vh - ${gnavspheight + footerheight}px);
                        margin-top:calc(${gnavspheight}px);
                        `
                    );
                }
            }
            if(document.getElementById('site-content')){
                var gnavheight = document.getElementById('gnavinner') ? document.getElementById('gnavinner').offsetHeight : 0,
                gnavspheight = document.getElementById('gnavbutton') ? document.getElementById('gnavbutton').offsetHeight : 0,
                footerheight = document.getElementById('footer') ? document.getElementById('footer').offsetHeight : 0,
                mainobj = document.getElementById('site-content');
    
                if(768 < window.innerWidth){
                    mainobj.setAttribute(
                        'style',
                        `
                        min-height:calc(100vh - ${gnavheight + footerheight}px);
                        margin-top:calc(${gnavheight}px);
                        `
                    );
                }else{
                    mainobj.setAttribute(
                        'style',
                        `
                        min-height:calc(100vh - ${gnavspheight + footerheight}px);
                        margin-top:calc(${gnavspheight}px);
                        `
                    );
                }
                
            }
        });
    });
});