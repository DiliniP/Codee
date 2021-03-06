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
            <div class="column is-three-fifths is-offset-one-fifth">

             <div class="field is-horizontal">
              <div class="field-label is-normal">
                <label class="label">From</label>
              </div>
              <div class="field-body">
                <div class="field">
                  <p class="control is-expanded has-icons-left">
                    <input class="input" type="text" placeholder="Name">
                    <span class="icon is-small is-left">
                      <i class="fas fa-user"></i>
                    </span>
                  </p>
                </div>
                <div class="field">
                  <p class="control is-expanded has-icons-left has-icons-right">
                    <input class="input is-success" type="email" placeholder="Email" value="alex@smith.com">
                    <span class="icon is-small is-left">
                      <i class="fas fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                      <i class="fas fa-check"></i>
                    </span>
                  </p>
                </div>
              </div>
            </div>

            <div class="field is-horizontal">
              <div class="field-label"></div>
              <div class="field-body">
                <div class="field is-expanded">
                  <div class="field has-addons">
                    <p class="control">
                      <a class="button is-static">
                        +94
                      </a>
                    </p>
                    <p class="control is-expanded">
                      <input class="input" type="tel" placeholder="Your phone number">
                    </p>
                  </div>
                  <p class="help">Do not enter the first zero</p>
                </div>
              </div>
            </div>

            <div class="field is-horizontal">
              <div class="field-label is-normal">
                <label class="label">Department</label>
              </div>
              <div class="field-body">
                <div class="field is-narrow">
                  <div class="control">
                    <div class="select is-fullwidth">
                      <select>
                        <option>Business development</option>
                        <option>Marketing</option>
                        <option>Sales</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="field is-horizontal">
              <div class="field-label">
                <label class="label">Already a member?</label>
              </div>
              <div class="field-body">
                <div class="field is-narrow">
                  <div class="control">
                    <label class="radio">
                      <input type="radio" name="member">
                      Yes
                    </label>
                    <label class="radio">
                      <input type="radio" name="member">
                      No
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="field is-horizontal">
              <div class="field-label is-normal">
                <label class="label">Subject</label>
              </div>
              <div class="field-body">
                <div class="field">
                  <div class="control">
                    <input class="input is-danger" type="text" placeholder="e.g. Partnership opportunity">
                  </div>
                  <p class="help is-danger">
                    This field is required
                  </p>
                </div>
              </div>
            </div>

            <div class="field is-horizontal">
              <div class="field-label is-normal">
                <label class="label">Question</label>
              </div>
              <div class="field-body">
                <div class="field">
                  <div class="control">
                    <textarea class="textarea" placeholder="Explain how we can help you"></textarea>
                  </div>
                </div>
              </div>
            </div>

            <div class="field is-horizontal">
              <div class="field-label">
                <!-- Left empty for spacing -->
              </div>
              <div class="field-body">
                <div class="field">
                  <div class="control">
                    <button class="button is-primary">
                      Send message
                    </button>
                  </div>
                </div>
              </div>
            </div>

            </div>
          </div>
        </div>
      </section>
    </div>
  </body>
</html>
