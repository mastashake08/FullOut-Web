@extends('layouts.app')

@section('content')
<script>
function registerServiceWorker() {
  return navigator.serviceWorker.register('js/service-worker.js')
  .then(function(registration) {
    console.log('Service worker successfully registered.');
    return registration;
  })
  .catch(function(err) {
    console.error('Unable to register service worker.', err);
  });
}

function askPermission() {
  return new Promise(function(resolve, reject) {
    const permissionResult = Notification.requestPermission(function(result) {
      resolve(result);
    });

    if (permissionResult) {
      permissionResult.then(resolve, reject);
    }
  })
  .then(function(permissionResult) {
    if (permissionResult !== 'granted') {
      throw new Error('We weren\'t granted permission.');
    }
  });
}

function subscribeUserToPush() {
  return getSWRegistration()
  .then(function(registration) {
    const subscribeOptions = {
      userVisibleOnly: true,
      applicationServerKey: urlBase64ToUint8Array(
        "{{env('VAPID_PUBLIC_KEY')}}"
      )
    };

    return registration.pushManager.subscribe(subscribeOptions);
  })
  .then(function(pushSubscription) {
    pushSubscription = JSON.stringify(pushSubscription);
    console.log('Received PushSubscription: ', pushSubscription);

    return pushSubscription;
  });
}

function sendSubscriptionToBackEnd(subscription) {
  const subscriptionObject = {
endpoint: subscription.endpoint,
keys: {
  p256dh: subscription.getKeys('p256dh'),
  auth: subscription.getKeys('auth')
}
};

// The above is the same output as:

const subscriptionObjectToo = JSON.stringify(subscription);
  return fetch('/api/save-subscription/', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(subscriptionObjectToo)
  })
  .then(function(response) {
    if (!response.ok) {
      throw new Error('Bad status code from server.');
    }

    return response.json();
  })
  .then(function(responseData) {
    if (!(responseData.data && responseData.data.success)) {
      throw new Error('Bad response from server.');
    }
  });
}

registerServiceWorker();
askPermission();
var permission = subscribeUserToPush();
sendSubscriptionToBackEnd(permission);
</script>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Beginner Skills</div>

                <div class="panel-body">
                    <form action="{{url('/cheerleader/skills/beginner')}}" method="POST">
                      {{csrf_field()}}
                      <div class="form-group">
                        <div class="checkbox">
                          <label><input type="checkbox"  name="round_off">Round Off</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox"  name="round_off_backhand_spring">Backhand Spring</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox"  name="front_walk_over">Front Walk Over</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox"  name="round_off_2_backhand_spring">Round Off, 2 Backhand Spring</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox"  name="round_off_3_backhand_spring">Round Off, 3 Backhand Spring</label>
                        </div>
                      </div>
                      <hr>
                      <div class="form-group">
                        <div class="checkbox">
                          <label><input type="checkbox"  name="bhs">Basic Handstand</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox"  name="2_bhs">2 Basic Handstand</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox"  name="3_bhs">3 or More Basic Handstand</label>
                        </div>
                      </div>
                      <button class="btn btn-success"> Edit Beginner Skills</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Advanced Skills</div>

                <div class="panel-body ">
                    <form action="{{url('/cheerleader/skills/advance')}}" method="POST">
                      {{csrf_field()}}
                      <div class="form-group">
                        <div class="checkbox">
                          <label><input type="checkbox"  name="round_off_tuck">Round Off, Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox"  name="round_off_bhs_tuck">Round Off, Backhand Spring, Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox"  name="round_off_bhs_tuck_2_bhs_tuck">Round Off, Backhand Spring, Tuck, 2 Backhand Spring, Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox"  name="round_off_bhs_whip">Round Off, Backhand Spring, Whip</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox"  name="round_off_bhs_layout">Round Off, Backhand Spring, Layout</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox"  name="round_off_bhs_whip_2_bhs_layout">Round Off, Backhand Spring, Whip, 2 Backhand Spring, Layout</label>
                        </div>
                      </div>
                      <hr>
                      <div class="form-group">
                        <div class="checkbox">
                          <label><input type="checkbox"  name="3_bhs_tuck">3 Backhand Spring, Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox"  name="2_bhs_tuck">2 Backhand Spring, Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox"  name="bhs_tuck">Backhand Spring, Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox"  name="tuck">Tuck</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox"  name="3_bhs_layout">3 Backhand Spring, Layout</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox"  name="2_bhs_layout">2 Backhand Spring, Layout</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox"  name="bhs_layout">Backhand Spring, Layout</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox"  name="tuck_2_bhs_layout">Tuck, 2 Backhand Spring, Tuck</label>
                        </div>
                      </div>
                      <button class="btn btn-success"> Edit Advanced Skills</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Elite Skills</div>

                <div class="panel-body ">
                    <form action="{{url('/cheerleader/skills/elite')}}" method="POST">
                      {{csrf_field()}}
                      <div class="form-group">
                        <div class="checkbox">
                          <label><input type="checkbox"  name="3_bhs_full">3 Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" name="2_bhs_full">2 Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox"  name="bhs_full">Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox"  name="full">Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox"  name="3_bhs_double">3 Backhand Spring, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox"  name="2_bhs_double">2 Backhand Spring, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox"  name="bhs_double">Backhand Spring, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox"  name="full_2_bhs_full">Full, 2 Backhand Spring, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox"  name="full_3_bhs_double">Full, 3 Backhand Spring, Double</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox"  name="3_bhs_whip_full">3 Backhand Spring, Whip, Full</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox"  name="3_bhs_whip_double">3 Backhand Spring, Whip, Double</label>
                        </div>

                      </div>

                      <button class="btn btn-success"> Edit Elite Skills</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
