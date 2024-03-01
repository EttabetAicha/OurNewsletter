import { log } from "console";
import "./bootstrap";

const channel = window.Echo.channel("SendEmail");

channel.subscribed(() => console.log("sub"));

channel.listen("SendMailsEvent", () => {
    console.log("event");
});
