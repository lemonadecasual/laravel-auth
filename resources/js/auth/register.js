import axios from "axios";
const host = "http://" + window.location.host;

document.addEventListener("DOMContentLoaded", async () => {
    if (localStorage.getItem("user_account")) {
        //check if wallet exists
        axios
            .get(`${host}/auth/wallet_exists/`, {
                params: {
                    wallet: localStorage.getItem("user_account"),
                },
            })
            .then((response) => {
                if (response.data.exists == true) {
                    //if wallet exists
                    window.location.href = `${host}/dashboard/index/`;
                }
            });

        document.querySelector("#wallet_address").value =
            localStorage.getItem("user_account");
    } else {
        window.location.href = `${host}/auth/index /`;
    }
});
document.querySelector("#submit").addEventListener("click", () => {
    let firstname = document.querySelector("[name='firstname']").value;
    let lastname = document.querySelector("[name='lastname']").value;
    let email = document.querySelector("[name='email']").value;
    let year = document.querySelector("[name='year']").value;
    let month = document.querySelector("[name='month']").value;
    let day = document.querySelector("[name='day']").value;
    let wallet = document.querySelector("[name='wallet']").value;
    let gendar;
    for (const input of document.querySelectorAll("[name='gendar']")) {
        if (input.checked) {
            gendar = input.value;
            break;
        }
    }

    console.log(gendar);

    if (
        firstname.length != 0 &&
        lastname.length != 0 &&
        email.length != 0 &&
        gendar.length != 0 &&
        year.length != 0 &&
        month.length != 0 &&
        day.length != 0 &&
        wallet.length != 0
    ) {
        axios
            .get(`${host}/auth/store/`, {
                params: {
                    firstname: firstname,
                    lastname: lastname,
                    email: email,
                    gendar: gendar,
                    year: year,
                    month: month,
                    day: day,
                    wallet: wallet,
                },
            })
            .then(function (response) {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error.response.data.message);
                const elem = document.querySelector("error");
                const elem_msg = document.querySelector("error_msg");
                elem_msg.innerHTML = error.response.data.message;
                elem.classList.remove("hidden");
                elem.classList.add("block");
            });
    }
});
