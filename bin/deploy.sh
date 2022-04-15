#!/bin/bash

PORT=${PORT-4000}

(cd ../ && php -S localhost:$PORT)


