//import axios
import axios from "axios";

axios
    .get("/auth/get_user", {
        params: {
            // get user account from localstorage
            wallet: localStorage.getItem("user_account"),
        },
    })
    .then((response) => {
        //log response
        console.log(response.data);
        document.querySelectorAll(".user_wallet").forEach((el) => {
            el.innerHTML = response.data.wallet;
        });
        document.querySelectorAll(".user_firstname").forEach((el) => {
            el.innerHTML = response.data.firstname;
        });
        document.querySelectorAll(".user_lastname").forEach((el) => {
            el.innerHTML = response.data.lastname;
        });
    })
    .catch((error) => {});
