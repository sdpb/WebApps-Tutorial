# First week
## In this section we'll learn how a basic web request works.

### Some important definitions

1. IETF (Internet Engineering Task Force)
2. URL (Uniform Resource Locator)
3. HTTP (Hypertext Transfer Protocol)

#### HTML explanation

All the webpages have a source code invisible to the final user,
but if we use the developer tools then we can see it, 
in fact, we can use `telnet` to get the source of a web page
including its metadata.

Using telnet to connect us to a web page and get the data, maybe
would be unnecessary because now we have better tools,
but is interesting to know how the web methods work.

```bash
telnet data.pr4e.org 80

Trying 192.241.136.170...
Connected to data.pr4e.org.
Escape character is '^]'.

GET http://data.pr4e.org/page1.htm HTTP/1.0

HTTP/1.1 200 OK
Date: Tue, 30 May 2017 18:08:52 GMT
Server: Apache/2.4.7 (Ubuntu)
Last-Modified: Mon, 15 May 2017 11:11:47 GMT
Content-Type: text/html

<h1>The First Page</h1>
<p>If you like, you can switch to
the <a href="http://www.dr-chuck.com/page2.htm">Second
Page</a>.</p>
Connection closed by foreign host.
```

If you look the telnet command you can see that we are
adding an **80** after the web server URL, this number
indicates the port we are using to connect us to the webpage.

Note that the output content has three sections.
        
The first one is a **GET** request, this is one of
the most basic methods used to establish a data
exchange between the client and the server.

The second one is the metadata allocated in the request,
it indicates some things about how the request looks like.
One interesting data is the `200 OK` code,
it says the connection was successful.

The last one is the source code of the web page that
we retrieve from the URL.

#### URL explanation

To do a request to a server we need to introduce a URL
on the top of a browser, this is composed of three sections.

- Protocol: "PROT://"
- Host: "www.WEBSITE.com"
- Document: "/somepage.EXT"

As we can infer, there exist a lot of protocols and
different types of extensions, for example:  

```html
http://www.dr-chuck.com/page1.htm
```

#### IEFT explanation

**NOTE:** The IEFT is the organization who develops
all the internet standard protocols.
