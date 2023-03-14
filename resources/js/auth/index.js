import { connect, createClient, configureChains, mainnet } from "@wagmi/core";
import { WalletConnectConnector } from "@wagmi/core/connectors/walletConnect";
import { publicProvider } from "@wagmi/core/providers/public";

const { provider, webSocketProvider } = configureChains(
    [mainnet],
    [publicProvider()]
);

var wallet = null;
document.addEventListener("DOMContentLoaded", async () => {
    wallet = await connect({
        connector: new WalletConnectConnector({
            options: {
                projectId: "798d24edeab92235f15f62fdd6a9985f",
                showQrModal: false,
            },
        }),
    }).then((user) => {
        connected(user);
    });
});

const client = createClient({
    provider,
    webSocketProvider,
});

document
    .querySelector("#wallect_connect_button_on_click")
    .addEventListener("click", async () => {
        wallet = await connect({
            connector: new WalletConnectConnector({
                options: {
                    projectId: "798d24edeab92235f15f62fdd6a9985f",
                },
            }),
        }).then((user) => {
            connected(user);
        });
    });

