export const marginBodyHeader= ()=> {
    const header = document.getElementById('siteHeader')
    const headerHeight = header?.offsetHeight
    const headerPad = document.getElementById('headerPad');
    console.log('Header Size: ',headerHeight)
    if(headerPad){
        headerPad.style.height = headerHeight + 'px'
    }

}