# Laravel wrapper for Slack API PHP Client ([FULL DOCS](https://github.com/soixt/slack-api-php))

This repository contains PHP classes for interacting with the Slack API. Below are links to documentation for each class:

## SlackAuthProvider and SlackApiProvider Usage

To interact with the Slack API, you can use `SlackAuth` and `SlackApi` facades. Here's how you can set up and use them:

```php
// Call this when you wish to redirect user to authorize with slack
SlackAuth::redirect();

// Call this on $redirectUrl when slack authorization redirect to $redirectUrl
$token = SlackAuth::getAccessToken(request('code'));

// Create a new SlackApiProvider instance with access token
SlackApi::setToken($token);

// Below this point, you can use various API methods:
SlackApi::channel()->someMethod();
SlackApi::user()->someMethod();
SlackApi::chat()->someMethod();
SlackApi::auth()->someMethod();
SlackApi::apps()->someMethod();
SlackApi::conversations()->someMethod();
SlackApi::files()->someMethod();
SlackApi::reactions()->someMethod();
SlackApi::reminders()->someMethod();
SlackApi::teams()->someMethod();
SlackApi::userGroups()->someMethod();
SlackApi::views()->someMethod();
```

Please replace the placeholders (`SLACK_CLIENT_ID`, `SLACK_CLIENT_SECRET`, `SLACK_REDIRECT_URL`) with your actual Slack app details. The `redirectUrl` must also be set within your Slack app configuration. After successful authentication and being redirected to the callback URL, you can obtain the access token.

You can then use the SlackApi facade to interact with various API methods from different classes within the repository.
