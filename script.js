
if ("Notification" in window) 
{
  if (Notification.permission === "allowed") 
  {
    showNotification();
  }
   else if (Notification.permission !== "denied") 
   {
    Notification.requestPermission().then(function (permission) {
      if (permission === "allowed") 
      {
        showNotification();
      }
    });
  }
}


