document.addEventListener('DOMContentLoaded', () => {
    console.log("Home JS");
    $.ajax({
        url: "./app/controllers/UsersController.php",
        type: "GET",
        success: function (response) {

            let responseFetch = JSON.parse(response);
            responseFetch.data.forEach((item) => {

                let tbody_table = document.querySelector("#tbody-table");
                tbody_table.innerHTML = "";
                
                let tr = document.createElement("tr");

                let td_name = document.createElement("td");
                td_name.innerText = item.name;
                let td_username = document.createElement("td");
                td_username.innerText = item.username; 
                let td_email = document.createElement("td");
                td_email.innerText = item.email;

                tr.appendChild(td_name);
                tr.appendChild(td_username);
                tr.appendChild(td_email);

                tbody_table.appendChild(tr);

            });
            
        }
    });

});