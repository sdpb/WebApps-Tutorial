# Deploying our web application

### In this section we will see how to deploy our WebApp using NGROK and XAMPP over HTML, CSS and PHP.
---


## Concepts
As we know from the XAMMP documentation we are working on a local server, which means that no one outside of our local network can enter or use our website, therefore we introduce the **ngrok tool**, which allows us to use a server on the internet that connects to our local service and deploy our application to the public.

**NOTE:** Before continuing, go to the official [ngrok](https://ngrok.com/download) website, download it and install it on your computer following the instructions given there.

### ngrok
In your terminal use the following command to set up a server using the http protocol running on port 80:

```bash
ngrok http 80
```

It will display something like this:

```bash
ngrok by @inconshreveable                                                           (Ctrl+C to quit)

Session Status                online
Session Expires               7 hours, 59 minutes
Update                        update available (version 2.3.35, Ctrl-U to update)
Version                       2.3.35
Region                        United States (us)
Web Interface                 http://127.0.0.1:4040
Forwarding                    http://89a4a79e5609.ngrok.io -> http://localhost:80
Forwarding                    https://89a4a79e5609.ngrok.io -> http://localhost:80

Connections                   ttl     opn     rt1     rt5     p50     p90
                              0       0       0.00    0.00    0.00    0.00
```

Now you can use any of the URLs ending in _.ngrok.io_ that were displayed and see your server on the internet.


