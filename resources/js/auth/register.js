import axios from "axios";

document.addEventListener("DOMContentLoaded", async () => {
    if (localStorage.getItem("user_account")) {
        document.querySelector("#wallet_address").value =
            localStorage.getItem("user_account");
    } else {
        window.location.href = `{{ route('auth-index') }}`;
    }
});
const host = "http://" + window.location.host;
document.querySelector("#submit").addEventListener("click", () => {
    let firstname = document.querySelector("[name='firstname']").value;
    let lastname = document.querySelector("[name='lastname']").value;
    let email = document.querySelector("[name='email']").value;
    let year = document.querySelector("[name='year']").value;
    let month = document.querySelector("[name='month']").value;
    let day = document.querySelector("[name='day']").value;
    let wallet = document.querySelector("[name='wallet']").value;
    if (
        firstname.length != 0 &&
        lastname.length != 0 &&
        email.length != 0 &&
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
                console.log(error);
            });
    }
});
console.log(host);
