# Redirection in Apache

## MultiViews considered harmful

When trying to redirect to a file whose name matches the start of the redirected path you can get the following error in the apache log and a 404 (here we're redirecting `^tapi/...` to `tapi.php`):

    Negotiation: discovered file(s) matching request: /var/www/html/tapi (None could be negotiated)

See this article: http://www.bennadel.com/blog/2218-negotiation-discovered-file-s-matching-request-none-could-be-negotiated.htm

Removing the MultiViews option fixes the problem.
