fetch('/api/verhalen')
.then(Response => Response.json())
.then(files => {
    for(const key in files){
        if (files.hasOwnProperty(key)){
            const file = files[key];
            const iframe = document.createElement('iframe');
            console.log(file);

            iframe.src = '/verhalen/' + file;
            iframe.classList.add('verhalen');

            document.getElementById('verhalen').appendChild(iframe);
        }
    }
})