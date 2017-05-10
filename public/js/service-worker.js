self.addEventListener('push', function(event) {
  console.log(event.data.message);
  if (event.data) {
    console.log('This push event has data: ', event.data.json());
    self.registration.showNotification(event.data.json().body) 
  } else {
    console.log('This push event has no data.');
  }
});
