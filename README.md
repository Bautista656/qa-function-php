# qa-function-php

Example repository for publishing an HTTP function: PHP, with Google's Functions
Framework, built with Google's buildpacks.

- The function to run is `helloHttp`, named in `composer.json` (`FUNCTION_TARGET=helloHttp` in `start`), so it is proposed when the repository is imported.
- It answers every request with a fixed text, so a 200 shows it is up.
