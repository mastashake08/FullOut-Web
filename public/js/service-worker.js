self.addEventListener('push', function(event) {
  console.log(event.data.message);
  if (event.data) {
    console.log('This push event has data: ', event.data.text());
    var notification = new Notification("Test");
  } else {
    console.log('This push event has no data.');
  }
});
