var options = {
    type: "basic",
    title: "Honestbee浮動式窗開啟通知",
    message: "Hello Taiwan",
    iconUrl: "icon.png"
};

chrome.notifications.create(options, callback);
function callback() {
    
    console.log('popup done');
}
