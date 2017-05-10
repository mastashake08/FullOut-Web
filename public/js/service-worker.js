self.addEventListener('push', function(event) {
  console.log(event.data.json());
  if (event.data) {
    console.log('This push event has data: ', event.data.text());
    var notification = new Notification(event.data.json().title);
  } else {
    console.log('This push event has no data.');
  }
});
