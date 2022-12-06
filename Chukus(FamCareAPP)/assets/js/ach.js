function render(){
    var grid = document.getElementById('grid');
    var s = '';
    var c = 1;
    for(var i=1;i<8;i++){
        s = s + '<tr>'
        for(var j=1;j<53;j++){
            s = s + '<td id="'+c+'">' + c + '</td>'
            c++;
        }
        s = s + '</tr>'
    }
    var c = 1;
    grid.innerHTML = s;
    var iset = 0;
    var arr = {};
    for(var i=1;i<8;i++){
        for(var j=1;j<53;j++){
            var valset = 1;
            if(j != 1)
                valset = ((j-1)*7)+iset + 1;
            else
                valset = iset + 1;
            document.getElementById(c).innerHTML = valset;
            arr[c] = valset;
            c++;
        }
        iset++;
    }
    for (var key of Object.keys(arr)) {
        console.log(key + " -> " + arr[key])
        document.getElementById(key).id = arr[key]+'_';
    }
    for (var i=1; i<=364; i++) {
        //console.log(key + " -> " + arr[key])
        document.getElementById(i+'_').id =  document.getElementById(i+'_').id.split('_')[0];
    }
       

}
function date(){
    for(var i=1; i<=364; i++){
        if(i%2==0)
            document.getElementById(i).innerHTML = "◙";
        else 
            document.getElementById(i).innerHTML = "◙";
        
    }
}
render();
date();