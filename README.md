# qa-function-php

Example repository for publishing an HTTP function: PHP, with Google's Functions
Framework, built with Google's buildpacks.

- The function to run is `helloHttp`, named in `composer.json` (`FUNCTION_TARGET=helloHttp` in `start`), so it is proposed when the repository is imported.
- It answers every request with a fixed text, so a 200 shows it is up.
- With `?wait=N` (3 seconds at most) it holds the request that long and its answer says
  which worker served it (`pid …`): ten requests sent at once with `?wait=2` show whether
  one waited for another.
