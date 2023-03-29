

function show_alert(){
    const name = document.querySelector("#name").value;
    document.querySelector("#name_label").innerHTML = name
    //alert("Nama saya : "+name);    
}

function login(){
    const username = document.querySelector("#username").value;
    const password = document.querySelector("#password").value;

    const body = {
        "username" : username,
        "password" : password
    }

    //console.log(username+" "+password)
    const url = "http://localhost:8000/login_process.php"
    fetch(url, {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
        },
        body: "username="+username+"&password="+password
    })
    .then(res => res.text())
    .then(res => {
        document.querySelector("#login_result").innerHTML = res
    });
}
