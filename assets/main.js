
let notification = (type, title, message) => {
  new Notify({
    status: type,
    title: title,
    text: message,
    effect: "slide",
    speed: 2000,
    showIcon: true,
    showCloseButton: true,
    autoclose: true,
    autotimeout: 5000,
    gap: 20,
    distance: 20,
    type: 1,
    position: "right top",
  });
};