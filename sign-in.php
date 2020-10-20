<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hello Bulma!</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>
    <div class="container is-fluid">

      <section class="hero">
        <div class="hero-body">
          <div class="container has-text-centered">
            <h2 class="subtitle">The New Internet</h2>
            <h1 class="title">We've built a decentralized internet where information is totally free</h1>
          </div>
        </div>
      </section>

      <section class="section">
        <div class="container">
          <h2 class="title has-text-centered">Sign in to Codee</h2>
          <div class="columns">
            <!-- <div class="column is-6"><img src="https://bulma.dev/placeholder/pictures/bg_16-9.svg?primary=00d1b2" alt=""></div> -->
            <div class="column is-half is-offset-one-quarter">

              <div class="field">
                <label class="label">Email</label>
                <div class="control has-icons-left has-icons-right">
                  <input class="input is-success" type="email" placeholder="Email">
                  <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                  </span>
                </div>
                <!-- <p class="help is-success">This email is available</p> -->
              </div>

            <div class="field">
              <label class="label">Password</label>
              <div class="control has-icons-left has-icons-right">
                <input class="input is-info" type="password" placeholder="Password">
                <span class="icon is-small is-left">
                  <i class="fas fa-key"></i>
                </span>
                <!-- <span class="icon is-small is-right">
                  <i class="fas fa-exclamation-triangle"></i>
                </span> -->
              </div>
              <!-- <p class="help is-danger">This email is invalid</p> -->
            </div>

              <div class="field is-grouped is-grouped-right">
                <div class="control">
                  <button class="button is-link is-rounded">Sign In</button>
                </div>
                <div class="control">
                  <button class="button is-link is-light is-rounded">Cancel</button>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>
    </div>
  </body>
</html>
